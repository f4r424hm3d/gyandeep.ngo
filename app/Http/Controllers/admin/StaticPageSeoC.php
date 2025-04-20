<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\StaticPageSeo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StaticPageSeoC extends Controller
{
  protected $page_route;
  public function __construct()
  {
    $this->page_route = 'static-page-seos';
  }
  public function index($id = null)
  {
    $page_no = $_GET['page'] ?? 1;
    $rows = StaticPageSeo::get();
    if ($id != null) {
      $sd = StaticPageSeo::find($id);
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
    $page_title = "Static Page Seo";
    $page_route = $this->page_route;
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title', 'page_route', 'page_no');
    return view('admin.static-page-seos')->with($data);
  }
  public function getData(Request $request)
  {
    $rows = StaticPageSeo::where('id', '!=', '0');
    $rows = $rows->paginate(10)->withPath('/admin/' . $this->page_route . '/');
    $i = 1;
    $output = '<table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Page</th>
        <th>Title</th>
        <th>Keyword</th>
        <th>Description</th>
        <th>Review Schema</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>';
    foreach ($rows as $row) {
      $editUrl = url('admin/' . $this->page_route . '/update/' . $row->id);
      $deleteButton = view('components.delete-button', ['id' => $row->id])->render();
      $editButton = view('components.edit-button', ['url' => $editUrl])->render();

      $output .= '<tr id="row' . $row->id . '">
        <td>' . $i . '</td>
        <td>' . $row->url . '</td>
        <td>' . $row->meta_title . '</td>
        <td>' . $row->meta_keyword . '</td>
        <td>' . view('components.view-on-modal', [
        'id' => 'metaDescription' . $row->id,
        'title' => 'SEO',
        'content' => $row->meta_description
      ])->render() . '</td>
      <td>
        <b>Rating : ' . $row->seo_rating . '</b> <br>
        <b>Best Rating : ' . $row->best_rating . '</b> <br>
        <b>Review : ' . $row->review_number . '</b>
        </td>';
      $output .= '<td>
        ' . $deleteButton . '
        ' . $editButton . '
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
      'url' => 'required|unique:static_page_seos,url',
      'seo_rating' => 'nullable|numeric',
    ]);

    if ($validator->fails()) {

      return response()->json([
        'error' => $validator->errors(),
      ]);
    }

    $field = new StaticPageSeo;
    $field->url = $request['url'];
    $field->meta_title = $request['meta_title'];
    $field->meta_keyword = $request['meta_keyword'];
    $field->meta_description = $request['meta_description'];
    $field->seo_rating = $request['seo_rating'];
    $field->best_rating = $request['best_rating'];
    $field->review_number = $request['review_number'];
    $field->save();
    return response()->json(['success' => 'Record hase been added succesfully.']);
  }
  public function delete($id)
  {
    if ($id) {
      $row = StaticPageSeo::find($id)->delete();
      $result = $row->delete();
      if ($result) {
        return response()->json(['success' => true]);
      }
    } else {
      return response()->json(['success' => false]);
    }
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'url' => 'required|unique:static_page_seos,url,' . $id,
        'seo_rating' => 'nullable|numeric',
      ]
    );
    $field = StaticPageSeo::find($id);
    $field->url = $request['url'];
    $field->meta_title = $request['meta_title'];
    $field->meta_keyword = $request['meta_keyword'];
    $field->meta_description = $request['meta_description'];
    $field->seo_rating = $request['seo_rating'];
    $field->best_rating = $request['best_rating'];
    $field->review_number = $request['review_number'];
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/' . $this->page_route);
  }
}
