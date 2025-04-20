<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadFc extends Controller
{
  public function index(Request $request)
  {
    $limit_per_page = $request->limit_per_page ?? 10;
    $order_by = $request->order_by ?? 'created_at';
    $order_in = $request->order_in ?? 'DESC';
    $rows = Lead::orderBy($order_by, $order_in);
    $filterApplied = false;
    if ($request->has('search') && $request->search != '') {
      $rows = $rows->where('name', 'like', '%' . $request->search . '%')->orWhere('email', 'like', '%' . $request->search . '%')->orWhere('mobile', 'like', '%' . $request->search . '%')->orWhere('nationality', 'like', '%' . $request->search . '%');
    } else {
      if ($request->has('from') && $request->from != '') {
        $rows = $rows->Where('created_at', '>=', $request->from);
        $filterApplied = true;
      }
      if ($request->has('to') && $request->to != '') {
        $rows = $rows->Where('created_at', '<=', $request->to);
        $filterApplied = true;
      }
      if ($request->has('nationality') && $request->nationality != '') {
        $rows = $rows->Where('nationality', $request->nationality);
        $filterApplied = true;
      }
      if ($request->has('source') && $request->source != '') {
        $rows = $rows->Where('source', $request->source);
        $filterApplied = true;
      }
    }
    $rows = $rows->paginate($limit_per_page)->withQueryString();

    $cp = $rows->currentPage();
    $pp = $rows->perPage();
    $i = ($cp - 1) * $pp + 1;

    $lpp = ['10', '20', '50'];
    $orderColumns = ['Name' => 'name', 'Date' => 'created_at'];

    $filterNationality = Lead::select('nationality')->where('nationality', '!=', '')->groupBy('nationality')->orderBy('nationality')->get();

    $filterSources = Lead::select('source')->where('source', '!=', '')->groupBy('source')->orderBy('source')->get();

    // printArray($filterCC->toArray());
    // die;

    $page_title = 'Leads';
    $data = compact('rows', 'page_title', 'i', 'limit_per_page', 'order_by', 'order_in', 'lpp', 'orderColumns', 'filterNationality', 'filterApplied', 'filterSources');
    return view('admin.leads')->with($data);
  }

  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'name' => 'required',
        'email' => 'required',
        'c_code' => 'nullable|numeric',
        'mobile' => 'required|numeric',
      ]
    );
    $field = new Lead;
    $field->name = $request['name'];
    $field->email = $request['email'];
    $field->c_code = $request['c_code'];
    $field->mobile = $request['mobile'];
    $field->gender = $request['gender'];
    $field->nationality = $request['nationality'];
    $field->source = $request['source'];
    $field->dob = $request['dob'];
    $field->current_qualification_level = $request['current_qualification_level'];
    $field->intrested_course_category = $request['intrested_course_category'];
    $field->status = 1;
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/leads/add');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = Lead::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'name' => 'required',
        'email' => 'required',
        'c_code' => 'nullable|numeric',
        'mobile' => 'required|numeric',
      ]
    );
    $field = Lead::find($id);
    $field->name = $request['name'];
    $field->email = $request['email'];
    $field->c_code = $request['c_code'];
    $field->mobile = $request['mobile'];
    $field->gender = $request['gender'];
    $field->nationality = $request['nationality'];
    $field->source = $request['source'];
    $field->dob = $request['dob'];
    $field->current_qualification_level = $request['current_qualification_level'];
    $field->intrested_course_category = $request['intrested_course_category'];
    $field->status = 1;
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/leads');
  }
  public function getQuickInfo(Request $request)
  {
    if ($request->id) {
      $id = $request->id;
      $student = Lead::find($request->id);

      $output = '<div class="form-group col-md-12">
			<label>Name</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="' . $student->name . '">
		</div>
		<div class="form-group col-md-12">
			<label>Email</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="' . $student->email . '">
		</div>
    <div class="form-group col-md-12">
        <label>Mobile</label>
        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile" value="' . $student->mobile . '">
    </div>
    ';

      echo $output;
    }
  }
  public function updateQuickInfo(Request $request)
  {
    $field = Lead::find($request['id']);
    $field->name = $request['name'];
    $field->email = $request['email'];
    $field->mobile = $request['mobile'];
    $field->status = 1;
    $done = $field->save();
    if ($done) {
      return "success";
    } else {
      return "failed";
    }
    //session()->flash('smsg', 'Record has been updated successfully.');
    //return redirect('admin/leads/');
  }
  public function fetchLastRecord($id)
  {
    $student = Lead::find($id);
    $output = '<i class="fas fa-user text-danger"></i> : ' . $student->name . '
      <br><i class="fas fa-mobile text-danger"></i> : ' . $student->email . '
      <br><i class="fas fa-mail-bulk text-danger"></i> : ' . $student->mobile . '';
    echo $output;
  }
}
