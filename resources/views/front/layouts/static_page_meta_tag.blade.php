@php
  use App\Models\StaticPageSeo;
  $page_url = url()->current();
  //$url = Request::segment(1) ?? 'home';
  $url = Request::path();
  $seo = StaticPageSeo::where(['url' => $url])->first();
  $dseo = StaticPageSeo::where(['url' => 'home'])->first();
  //die();
  $site = url('/');
  $tagArray = ['currentmonth' => date('M'), 'currentyear' => date('Y'), 'site' => $site];

  $meta_title = $seo->meta_title ?? $dseo->meta_title;
  $meta_title = replaceTag($meta_title, $tagArray);

  $meta_keyword = $seo->meta_keyword ?? $dseo->meta_keyword;
  $meta_keyword = replaceTag($meta_keyword, $tagArray);

  $meta_description = $seo->meta_description ?? $dseo->meta_description;
  $meta_description = replaceTag($meta_description, $tagArray);

  $og_image_path = $seo->og_image_path ?? $dseo->og_image_path;
@endphp
@include('front.layouts.dynamic_page_meta_tag')
