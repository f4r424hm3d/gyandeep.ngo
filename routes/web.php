<?php

use App\Http\Controllers\admin\AdminDashboard;
use App\Http\Controllers\admin\AdminLogin;
use App\Http\Controllers\admin\BlogC;
use App\Http\Controllers\admin\BlogCategoryC;
use App\Http\Controllers\admin\BlogContentC;
use App\Http\Controllers\admin\BlogFaqC;
use App\Http\Controllers\admin\DefaultOgImageC;
use App\Http\Controllers\admin\DynamicPageSeoC;
use App\Http\Controllers\admin\FaqC;
use App\Http\Controllers\admin\FaqCategoryC;
use App\Http\Controllers\admin\StaticPageSeoC;
use App\Http\Controllers\admin\StudentC;
use App\Http\Controllers\admin\UploadFilesC;
use App\Http\Controllers\admin\UserC;
use App\Http\Controllers\front\BlogFc;
use App\Http\Controllers\front\EventFc;
use App\Http\Controllers\front\HomeFc;
use App\Http\Controllers\front\InquiryFc;
use App\Http\Controllers\front\LeadFc;
use App\Http\Controllers\front\ServiceFc;
use App\Http\Middleware\AdminLoggedIn;
use App\Http\Middleware\AdminLoggedOut;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

//Reoptimized class loader:
Route::get('/optimize', function () {
  $exitCode = Artisan::call('optimize');
  return '<h1>Reoptimized class loader</h1>';
});
Route::get('/f/optimize', function () {
  $exitCode = Artisan::call('optimize');
  return true;
});

//For MIgrate:
Route::get('/migrate', function () {
  $exitCode = Artisan::call('migrate');
  return '<h1>Migrated</h1>';
});
Route::get('/f/migrate', function () {
  $exitCode = Artisan::call('migrate');
  return true;
});

Route::get('/', [HomeFc::class, 'index'])->name('home');
Route::get('/about', [HomeFc::class, 'about'])->name('about');
Route::get('/team', [HomeFc::class, 'team'])->name('team');
Route::get('/donation-details', [HomeFc::class, 'donationDetail'])->name('donation.details');
Route::get('/projects', [HomeFc::class, 'projects'])->name('projects');
Route::get('/mbbs-scholarship', [HomeFc::class, 'mbbsScholarship'])->name('mbbs.scholarship');
Route::get('/contact', [HomeFc::class, 'contact'])->name('contact');
Route::get('/faq', [HomeFc::class, 'faq'])->name('faq');
Route::get('/terms-and-condition', [HomeFc::class, 'tc'])->name('tc');
Route::get('/privacy-policy', [HomeFc::class, 'privacyPolicy'])->name('pp');

Route::get('/services', [ServiceFc::class, 'index'])->name('services');
Route::get('/services/{service_slug}', [ServiceFc::class, 'detail'])->name('service.detail');

Route::get('/blog', [BlogFc::class, 'index'])->name('blog');
Route::get('/blog/{blog_slug}', [BlogFc::class, 'detail'])->name('blog.detail');

Route::get('/events', [EventFc::class, 'index'])->name('events');
Route::get('/events/{event_slug}', [EventFc::class, 'detail'])->name('event.detail');

Route::get('/thank-you', [HomeFc::class, 'thankYou'])->name('thank.you');

Route::prefix('/en')->group(function () {
  Route::post('/mbbs-scholarship-application', [InquiryFc::class, 'mbbsScholarshipApplication'])->name('mbbs.scholarship.en');
  Route::post('/contact-us', [InquiryFc::class, 'contact'])->name('contact.en');
});


/* ADMIN ROUTES BEFORE LOGIN */
Route::middleware([AdminLoggedOut::class])->group(function () {
  Route::prefix('/admin')->group(function () {
    Route::get('/login/', [AdminLogin::class, 'index']);
    Route::post('/login/', [AdminLogin::class, 'login']);
    Route::get('/account/password/reset', [AdminLogin::class, 'viewForgetPassword']);
    Route::post('/forget-password', [AdminLogin::class, 'forgetPassword']);
    Route::get('/forget-password/email-sent', [AdminLogin::class, 'emailSent']);
    Route::get('/email-login', [AdminLogin::class, 'emailLogin']);
    Route::get('/password/reset', [AdminLogin::class, 'viewResetPassword']);
    Route::post('/reset-password', [AdminLogin::class, 'resetPassword']);
    Route::get('/account/invalid_link', [AdminLogin::class, 'invalidLink']);
  });
});
/* ADMIN ROUTES AFTER LOGIN */
Route::middleware([AdminLoggedIn::class])->group(function () {
  Route::get('/admin/logout/', function () {
    session()->forget('adminLoggedIn');
    return redirect('admin/login');
  });
  Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminDashboard::class, 'index']);
    Route::get('/dashboard', [AdminDashboard::class, 'index']);
    Route::get('/profile', [AdminDashboard::class, 'profile']);
    Route::post('/update-profile', [AdminDashboard::class, 'updateProfile']);


    Route::prefix('/blog-categories')->group(function () {
      Route::get('', [BlogCategoryC::class, 'index']);
      Route::get('get-data', [BlogCategoryC::class, 'getData']);
      Route::get('/delete/{id}', [BlogCategoryC::class, 'delete']);
      Route::get('/update/{id}', [BlogCategoryC::class, 'index']);
      Route::post('/update/{id}', [BlogCategoryC::class, 'update']);
      Route::post('/store', [BlogCategoryC::class, 'store']);
    });
    Route::prefix('/blogs')->group(function () {
      Route::get('', [BlogC::class, 'index']);
      Route::get('get-data', [BlogC::class, 'getData']);
      Route::get('/delete/{id}', [BlogC::class, 'delete']);
      Route::get('/update/{id}', [BlogC::class, 'index']);
      Route::post('/update/{id}', [BlogC::class, 'update']);
      Route::post('/store', [BlogC::class, 'store']);
    });
    Route::prefix('/blog-contents/')->group(function () {
      Route::get('/get-data', [BlogContentC::class, 'getData']);
      Route::get('/get-position', [BlogContentC::class, 'getPosition']);
      Route::get('/get-parent-headings', [BlogContentC::class, 'getParentHeadings']);
      Route::get('/delete/{id}', [BlogContentC::class, 'delete']);
      Route::post('/store', [BlogContentC::class, 'store']);
      Route::get('/{blog_id}/', [BlogContentC::class, 'index']);
      Route::get('{blog_id}/update/{id}', [BlogContentC::class, 'index']);
      Route::post('{blog_id}/update/{id}', [BlogContentC::class, 'update']);
    });
    Route::prefix('/blog-faqs/')->group(function () {
      Route::get('/get-data', [BlogFaqC::class, 'getData']);
      Route::get('/delete/{id}', [BlogFaqC::class, 'delete']);
      Route::post('/store', [BlogFaqC::class, 'store']);
      Route::get('/{blog_id}/', [BlogFaqC::class, 'index']);
      Route::get('{blog_id}/update/{id}', [BlogFaqC::class, 'index']);
      Route::post('{blog_id}/update/{id}', [BlogFaqC::class, 'update']);
    });

    Route::prefix('/users')->group(function () {
      Route::get('', [UserC::class, 'index']);
      Route::post('/store', [UserC::class, 'store']);
      Route::get('/delete/{id}', [UserC::class, 'delete']);
      Route::get('/update/{id}', [UserC::class, 'index']);
      Route::post('/update/{id}', [UserC::class, 'update']);
    });

    Route::prefix('/static-page-seos')->group(function () {
      Route::get('/', [StaticPageSeoC::class, 'index']);
      Route::post('/store/', [StaticPageSeoC::class, 'store']);
      Route::get('/delete/{id}/', [StaticPageSeoC::class, 'delete']);
      Route::get('/update/{id}/', [StaticPageSeoC::class, 'index']);
      Route::post('/update/{id}/', [StaticPageSeoC::class, 'update']);
    });
    Route::prefix('/dynamic-page-seos')->group(function () {
      Route::get('/', [DynamicPageSeoC::class, 'index']);
      Route::get('add/', [DynamicPageSeoC::class, 'index']);
      Route::post('/store/', [DynamicPageSeoC::class, 'store']);
      Route::get('/delete/{id}/', [DynamicPageSeoC::class, 'delete']);
      Route::get('/update/{id}/', [DynamicPageSeoC::class, 'index']);
      Route::post('/update/{id}/', [DynamicPageSeoC::class, 'update']);
    });
    Route::prefix('/default-og-image')->group(function () {
      Route::get('/', [DefaultOgImageC::class, 'index']);
      Route::get('add/', [DefaultOgImageC::class, 'index']);
      Route::post('/store/', [DefaultOgImageC::class, 'store']);
      Route::get('/delete/{id}/', [DefaultOgImageC::class, 'delete']);
      Route::get('/update/{id}/', [DefaultOgImageC::class, 'index']);
      Route::post('/update/{id}/', [DefaultOgImageC::class, 'update']);
    });


    Route::prefix('leads')->group(function () {
      Route::get('', [LeadFc::class, 'index']);
      Route::get('/add', [LeadFc::class, 'add']);
      Route::get('/update/{id}', [LeadFc::class, 'add']);
      Route::post('/update/{id}', [LeadFc::class, 'update']);
      Route::get('/delete/{id}', [LeadFc::class, 'delete']);
      Route::post('/store', [LeadFc::class, 'store']);
      Route::get('get-quick-info', [LeadFc::class, 'getQuickInfo']);
      Route::get('/update-quick-info/', [LeadFc::class, 'updateQuickInfo']);
      Route::get('/fetch-last-updated-record/{id}', [LeadFc::class, 'fetchLastRecord']);


      Route::get('/add2', [LeadFc::class, 'add2']);
      Route::post('/store-ajax', [LeadFc::class, 'storeAjax']);
    });

    Route::prefix('/upload-files')->group(function () {
      Route::get('/', [UploadFilesC::class, 'index']);
      Route::get('/get-data', [UploadFilesC::class, 'getData']);
      Route::get('/delete/{id}', [UploadFilesC::class, 'delete']);
      Route::post('/store-ajax', [UploadFilesC::class, 'storeAjax']);
      Route::get('/update/{id}', [UploadFilesC::class, 'index']);
      Route::post('/update/{id}', [UploadFilesC::class, 'update']);
    });


    Route::prefix('/faq-categories')->group(function () {
      Route::get('/', [FaqCategoryC::class, 'index']);
      Route::get('/get-data', [FaqCategoryC::class, 'getData']);
      Route::post('/store', [FaqCategoryC::class, 'store']);
      Route::get('/update/{id}', [FaqCategoryC::class, 'index']);
      Route::post('/update/{id}', [FaqCategoryC::class, 'update']);
      Route::get('/delete/{id}', [FaqCategoryC::class, 'delete']);
    });
    Route::prefix('/faqs')->group(function () {
      Route::get('/', [FaqC::class, 'index']);
      Route::get('/get-data', [FaqC::class, 'getData']);
      Route::post('/store', [FaqC::class, 'store']);
      Route::get('/update/{id}', [FaqC::class, 'index']);
      Route::post('/update/{id}', [FaqC::class, 'update']);
      Route::get('/delete/{id}', [FaqC::class, 'delete']);
    });
  });
});
