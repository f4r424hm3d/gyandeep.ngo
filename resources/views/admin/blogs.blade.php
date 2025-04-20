@extends('admin.layouts.main')
@push('title')
  <title>{{ $page_title }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@section('main-section')
  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ $page_title }}</h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ url('/admin/') }}"><i class="mdi mdi-home-outline"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <!-- NOTIFICATION FIELD START -->
          <x-result-notification-field />
          <!-- NOTIFICATION FIELD END -->
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">
                {{ $title }} Record
                <span style="float:right;">
                  <button class="btn btn-xs btn-info tglBtn">+</button>
                  <button class="btn btn-xs btn-info tglBtn hide-this">-</button>
                </span>
              </h4>
            </div>
            <div class="card-body" id="tblCDiv">
              <form id="{{ $ft == 'add' ? 'dataForm' : 'editForm' }}" {{ $ft == 'edit' ? 'action=' . $url : '' }}
                class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row">
                  <div class="col-md-6 col-sm-12 mb-3">
                    <x-input-field type="text" label="Enter Title" name="title" id="title" :ft="$ft"
                      :sd="$sd">
                    </x-input-field>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <x-input-field type="text" label="Enter Slug/Url" name="slug" id="slug" :ft="$ft"
                      :sd="$sd">
                    </x-input-field>
                  </div>
                  <div class="col-md-4 col-sm-12 mb-3">
                    <x-SelectField type="text" label="Select Category" name="category_id" id="category_id"
                      :ft="$ft" :sd="$sd" :list="$blog_categories" savev="id" showv="category_name">
                    </x-SelectField>
                  </div>
                  <div class="col-md-4 col-sm-12 mb-3">
                    <x-SelectField type="text" label="Select Author" name="author_id" id="author_id" :ft="$ft"
                      :sd="$sd" :list="$authors" savev="id" showv="name">
                    </x-SelectField>
                  </div>
                  <div class="col-md-4 col-sm-12 mb-3">
                    <x-input-field type="file" label="Upload Thumbnail" name="thumbnail" id="thumbnail"
                      :ft="$ft" :sd="$sd">
                    </x-input-field>
                  </div>
                  <div class="col-md-4 col-sm-12 mb-3">
                    <x-input-field type="file" label="Upload Image" name="image_name" id="image_name"
                      :ft="$ft" :sd="$sd">
                    </x-input-field>
                  </div>
                  <div class="col-md-12 col-sm-12 mb-3">
                    <x-TextareaField label="Enter Shortnote" name="shortnote" id="shortnote" :ft="$ft"
                      :sd="$sd">
                    </x-TextareaField>
                  </div>
                  <div class="col-md-12 col-sm-12 mb-3">
                    <x-TextareaField label="Enter Description" name="description" id="description" :ft="$ft"
                      :sd="$sd">
                    </x-TextareaField>
                  </div>
                </div>
                <hr>
                <!--  SEO INPUT FILED COMPONENT  -->
                <x-seo-field :ft="$ft" :sd="$sd"></x-seo-field>
                <!--  SEO INPUT FILED COMPONENT END  -->
                @if ($ft == 'add')
                  <button type="reset" class="btn btn-sm btn-warning  mr-1"><i class="ti-trash"></i>
                    Reset</button>
                @endif
                @if ($ft == 'edit')
                  <a href="{{ aurl($page_route) }}" class="btn btn-sm btn-info "><i class="ti-trash"></i> Cancel</a>
                @endif
                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
              </form>
            </div>
          </div>
          <!-- end card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body" id="trdata">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(function() {
      var $description = CKEDITOR.replace('description');

      $description.on('change', function() {
        $description.updateElement();
      });
    });
  </script>
  @include('admin.js.common-ajax-page')
@endsection
