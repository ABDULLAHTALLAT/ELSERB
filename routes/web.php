<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/slider', function () {
    return view('slider');
})->name('slid');


Route::get('/srv', function () {
    return view('ourservice');
})->name('ourservice');

Route::get('/client', function () {
    return view('ourclients');
})->name('ourclients');

Route::get('/work', function () {
    return view('ourwork');
})->name('ourwork');
// صفحة الاتصال
Route::get('/contact-us', function () {
    return view('contuct');
})->name('contact');

// صفحة طلب عرض الأسعار
Route::get('/request-quotation', function () {
    return view('quotations');
})->name('quotations');

// صفحة العملاء
Route::get('/our-clients', function () {
    return view('clients');
})->name('clients');

// صفحة من نحن
Route::get('/about-us', function () {
    return view('aboutus');
})->name('aboutus');

// صفحة المدونة
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// مجموعة روتات للخدمات تحت `/services`
Route::prefix('services')->group(function () {
    Route::get('/video-photography', function () {
        return view('services.video_photography');
    })->name('video-photography');

    Route::get('/motion-graphic', function () {
        return view('services.Motion_Graphic');
    })->name('motion-graphic');

    Route::get('/web-solutions', function () {
        return view('services.Web_Solutions');
    })->name('web-solutions');

    Route::get('/mobile-apps', function () {
        return view('services.MobileApps');
    })->name('mobile-apps');

    Route::get('/graphic-design', function () {
        return view('services.graphic_design');
    })->name('graphic-design');

    Route::get('/branding', function () {
        return view('services.Branding');
    })->name('branding');

    Route::get('/packaging', function () {
        return view('services.Packaging');
    })->name('packaging');

    Route::get('/social-media-marketing', function () {
        return view('services.SocialMedia');
    })->name(name: 'social-media-marketing');

    Route::get('/seo', function () {
        return view('services.seo');
    })->name('seo');
});


 Route::get('/blog1', function () {
        return view('ourblogs.seo');
    })->name('seoblog');



    Route::get('/blog6', function () {
        return view('ourblogs.blog6');
    })->name('blog6');




    Route::get('/blog5', function () {
        return view('ourblogs.blog5');
    })->name('blog5');








    Route::get('/blog4', function () {
        return view('ourblogs.blog4');
    })->name('blog4');




    Route::get('/blog3', function () {
        return view('ourblogs.blog3');
    })->name('blog3');




    Route::get('/blog2', function () {
        return view('ourblogs.blog2');
    })->name('blog2');
use App\Http\Controllers\QuotationController;

Route::get('/quotation', function () {
    return view('quotation_form');
});

Route::post('/quotations', [QuotationController::class, 'store'])->name('quotations.store');






Route::get('/test-404', function () {
    abort(404);
});

// اختبار خطأ 500
Route::get('/test-500', function () {
    abort(500);
});

// اختبار خطأ 403 (Forbidden)
Route::get('/test-403', function () {
    abort(403);
});

// اختبار خطأ 419 (CSRF Token Expired)
Route::get('/test-419', function () {
    abort(419);
});

// اختبار خطأ 401 (Unauthorized)
Route::get('/test-401', function () {
    abort(401);
});


Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
});