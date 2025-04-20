<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Validator;

class BlogC extends Controller
{
  protected $page_route;
  public function __construct()
  {
    $this->page_route = 'blogs';
  }
  public function index($id = null)
  {
    $page_no = $_GET['page'] ?? 1;
    $blog_categories = BlogCategory::all();
    $authors = User::all();
    $rows = Blog::get();
    if ($id != null) {
      $sd = Blog::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/' . $this->page_route . '/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/' . $this->page_route);
      }
    } else {
      $ft = 'add';
      $url = url('admin/' . $this->page_route . '/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = "Blogs";
    $page_route = $this->page_route;
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title', 'page_route', 'page_no', 'blog_categories', 'authors');
    return view('admin.blogs')->with($data);
  }
  public function getData(Request $request)
  {
    $rows = Blog::where('id', '!=', '0');
    $rows = $rows->paginate(10)->withPath('/admin/' . $this->page_route);
    $i = 1;
    $output = '<table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Title</th>
        <th>Category</th>
        <th>Author</th>
        <th>Shortnote</th>
        <th>Description</th>
        <th>Thumnbnail</th>
        <th>Image</th>
        <th>SEO</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>';
    foreach ($rows as $row) {
      $output .= '<tr id="row' . $row->id . '">
      <td>' . $i . '</td>
      <td>
      Title : ' . $row->title . ' <br>
      Slug : ' . $row->slug . '
      </td>
      <td>' . $row->getCategory->category_name . '</td>
      <td>' . $row->getAuthor->name . '</td>
      <td>' . Blade::render('<x-content-view-modal :row="$row" field="shortnote" title="Shortnote" />', ['row' => $row]) . '</td>
      <td>' . Blade::render('<x-content-view-modal :row="$row" field="description" title="Description" />', ['row' => $row]) . '</td><td>';
      if ($row->thumbnail_path != null) {
        $output .= '<img src="' . asset($row->thumbnail_path) . '" alt="" height="40" width="40">';
      } else {
        $output .= 'N/A';
      }
      $output .= '</td><td>';
      if ($row->image_path != null) {
        $output .= '<img src="' . asset($row->image_path) . '" alt="" height="40" width="40">';
      } else {
        $output .= 'N/A';
      }
      $output .= '</td>
      <td>' . Blade::render('<x-seo-view-model :row="$row" />', ['row' => $row]) . '</td>
      <td>
        ' . Blade::render('<x-delete-button :id="$id" />', ['id' => $row->id]) . '
        ' . Blade::render('<x-edit-button :url="$url" />', ['url' => url("admin/" . $this->page_route . "/update/" . $row->id)]) . '

        ' . Blade::render('<x-custom-button :url="$url" label="Faqs" :count="$count" />', ['url' => url("admin/blog-faqs/" . $row->id), 'count' => $row->faqs->count()]) . '

        ' . Blade::render('<x-custom-button :url="$url" label="Content" :count="$count" />', ['url' => url("admin/blog-content/" . $row->id), 'count' => $row->contents->count()]) . '

        </td>
        </tr>';
      $i++;
    }
    $output .= '</tbody></table>';
    $output .= '<div>' . $rows->links('pagination::bootstrap-5') . '</div>';
    return $output;
  }
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'title' => 'required|unique:blogs,title',
      'category_id' => 'required',
      'author_id' => 'required',
      'thumbnail' => 'nullable|max:5000|mimes:jpg,jpeg,png,gif,webp',
      'image_name' => 'nullable|max:5000|mimes:jpg,jpeg,png,gif,webp',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'error' => $validator->errors(),
      ]);
    }

    $field = new Blog;
    if ($request->hasFile('thumbnail')) {
      $fileOriginalName = $request->file('thumbnail')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('thumbnail')->getClientOriginalExtension();
      $file_name = $file_name_slug . '.' . $fileExtention;
      $move = $request->file('thumbnail')->move('uploads/blogs/', $file_name);
      if ($move) {
        $field->thumbnail_path = 'uploads/blogs/' . $file_name;
      }
    }
    if ($request->hasFile('image_name')) {
      $fileOriginalName = $request->file('image_name')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('image_name')->getClientOriginalExtension();
      $file_name = $file_name_slug . '.' . $fileExtention;
      $move = $request->file('image_name')->move('uploads/blogs/', $file_name);
      if ($move) {
        $field->image_path = 'uploads/blogs/' . $file_name;
      }
    }
    $field->title = $request['title'];
    $field->slug = slugify($request['slug'] ?? $request['title']);
    $field->category_id = $request['category_id'];
    $field->author_id = $request['author_id'];
    // $field->shortnote = $request['shortnote'];
    $field->description = $request['description'];
    $field->meta_title = $request['meta_title'];
    $field->meta_keyword = $request['meta_keyword'];
    $field->meta_description = $request['meta_description'];

    $field->seo_rating = $request['seo_rating'];
    $field->best_rating = $request['best_rating'];
    $field->review_number = $request['review_number'];
    if ($request->hasFile('og_image')) {
      $fileOriginalName = $request->file('og_image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('og_image')->getClientOriginalExtension();
      $file_name = $file_name_slug . '.' . $fileExtention;
      $move = $request->file('og_image')->move('uploads/blogs/', $file_name);
      if ($move) {
        $field->og_image_path = 'uploads/blogs/' . $file_name;
      }
    }
    $field->save();
    return response()->json(['success' => 'Record hase been added succesfully.']);
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'title' => 'required|unique:blogs,title,' . $id,
        'category_id' => 'required',
        'author_id' => 'required',
        'thumbnail' => 'nullable|max:5000|mimes:jpg,jpeg,png,gif,webp',
        'image_name' => 'nullable|max:5000|mimes:jpg,jpeg,png,gif,webp',
      ]
    );
    $field = Blog::find($id);
    if ($request->hasFile('thumbnail')) {
      $fileOriginalName = $request->file('thumbnail')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('thumbnail')->getClientOriginalExtension();
      $file_name = $file_name_slug . '.' . $fileExtention;
      $move = $request->file('thumbnail')->move('uploads/blogs/', $file_name);
      if ($move) {
        if ($field->thumbnail_path != null && file_exists($field->thumbnail_path)) {
          unlink($field->thumbnail_path);
        }
        $field->thumbnail_name = $file_name;
        $field->thumbnail_path = 'uploads/blogs/' . $file_name;
      }
    }
    if ($request->hasFile('image_name')) {
      $fileOriginalName = $request->file('image_name')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('image_name')->getClientOriginalExtension();
      $file_name = $file_name_slug . '.' . $fileExtention;
      $move = $request->file('image_name')->move('uploads/blogs/', $file_name);
      if ($move) {
        if ($field->image_path != null  && file_exists($field->image_path)) {
          unlink($field->image_path);
        }
        $field->image_name = $file_name;
        $field->image_path = 'uploads/blogs/' . $file_name;
      }
    }
    $field->title = $request['title'];
    $field->slug = slugify($request['slug'] ?? $request['title']);
    $field->category_id = $request['category_id'];
    $field->author_id = $request['author_id'];
    // $field->shortnote = $request['shortnote'];
    $field->description = $request['description'];
    $field->meta_title = $request['meta_title'];
    $field->meta_keyword = $request['meta_keyword'];
    $field->meta_description = $request['meta_description'];

    $field->seo_rating = $request['seo_rating'];
    $field->best_rating = $request['best_rating'];
    $field->review_number = $request['review_number'];
    if ($request->hasFile('og_image')) {
      $fileOriginalName = $request->file('og_image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('og_image')->getClientOriginalExtension();
      $file_name = $file_name_slug . '.' . $fileExtention;
      $move = $request->file('og_image')->move('uploads/blogs/', $file_name);
      if ($move) {
        $field->og_image_path = 'uploads/blogs/' . $file_name;
      }
    }
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/' . $this->page_route);
  }
  public function delete($id)
  {
    if ($id) {
      $row = Blog::findOrFail($id);
      if ($row->thumbnail_path != null && file_exists($row->thumbnail_path)) {
        unlink($row->thumbnail_path);
      }
      if ($row->image_path != null && file_exists($row->image_path)) {
        unlink($row->image_path);
      }
      if ($row->og_image_path != null && file_exists($row->og_image_path)) {
        unlink($row->og_image_path);
      }
      $row->delete();
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false]);
    }
  }
}
