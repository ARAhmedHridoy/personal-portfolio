<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// frontend route
Route::get('/', [HomeController::class, 'index']);
Route::post('/contact', [HomeController::class, 'contact']);
Route::get('blog/{id}', [HomeController::class, 'blog_page']);


// admin route
Route::get('login', [AuthController::class, 'login']);

Route::post('login-admin', [AuthController::class, 'login_admin']);

Route::get('logout', [AuthController::class, 'logout']);

Route::get('forgot', [AuthController::class, 'forgot']);

Route::post('forgot-password', [AuthController::class, 'forgot_password']);


Route::group(['middleware' =>'admin'], function(){

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/home', [DashboardController::class, 'admin_home']);

    Route::post('admin/home/post', [DashboardController::class, 'admin_home_post']);

    Route::get('admin/about', [DashboardController::class, 'admin_about']);

    Route::post('admin/about/post', [DashboardController::class, 'admin_about_post']);

    Route::get('admin/quality', [DashboardController::class, 'admin_quality']);
    Route::get('admin/quality/add', [DashboardController::class, 'admin_quality_add']);
    Route::post('admin/quality/post', [DashboardController::class, 'admin_quality_post']);
    Route::get('admin/quality/edit/{id}', [DashboardController::class, 'admin_quality_edit']);
    Route::post('admin/quality/update/{id}', [DashboardController::class, 'admin_quality_update']);
    Route::get('admin/quality/delete/{id}', [DashboardController::class, 'admin_quality_delete']);

    Route::get('admin/experience', [DashboardController::class, 'admin_experience']);
    Route::get('admin/experience/add', [DashboardController::class, 'admin_experience_add']);
    Route::post('admin/experience/post', [DashboardController::class, 'admin_experience_post']);
    Route::get('admin/experience/edit/{id}', [DashboardController::class, 'admin_experience_edit']);
    Route::post('admin/experience/update/{id}', [DashboardController::class, 'admin_experience_update']);
    Route::get('admin/experience/delete/{id}', [DashboardController::class, 'admin_experience_delete']);

    Route::get('admin/skill', [DashboardController::class, 'admin_skill']);
    Route::post('admin/skill/post', [DashboardController::class, 'admin_skill_post']);
    Route::get('admin/skill/edit/{id}', [DashboardController::class, 'admin_skill_edit']);
    Route::post('admin/skill/update/{id}', [DashboardController::class, 'admin_skill_update']);
    Route::get('admin/skill/delete/{id}', [DashboardController::class, 'admin_skill_delete']);

    Route::get('admin/service', [DashboardController::class, 'admin_service']);
    Route::get('admin/service/add', [DashboardController::class, 'admin_service_add']);
    Route::post('admin/service/post', [DashboardController::class, 'admin_service_post']);
    Route::get('admin/service/edit/{id}', [DashboardController::class, 'admin_service_edit']);
    Route::post('admin/service/update/{id}', [DashboardController::class, 'admin_service_update']);
    Route::get('admin/service/delete/{id}', [DashboardController::class, 'admin_service_delete']);

    Route::get('admin/portfolio', [DashboardController::class, 'admin_portfolio']);
    Route::get('admin/portfolio/add', [DashboardController::class, 'admin_portfolio_add']);
    Route::post('admin/portfolio/post', [DashboardController::class, 'admin_portfolio_post']);
    Route::get('admin/portfolio/edit/{id}', [DashboardController::class, 'admin_portfolio_edit']);
    Route::post('admin/portfolio/update/{id}', [DashboardController::class, 'admin_portfolio_update']);
    Route::get('admin/portfolio/delete/{id}', [DashboardController::class, 'admin_portfolio_delete']);

    Route::get('admin/review', [DashboardController::class, 'admin_review']);
    Route::get('admin/review/add', [DashboardController::class, 'admin_review_add']);
    Route::post('admin/review/post', [DashboardController::class, 'admin_review_post']);
    Route::get('admin/review/edit/{id}', [DashboardController::class, 'admin_review_edit']);
    Route::post('admin/review/update/{id}', [DashboardController::class, 'admin_review_update']);
    Route::get('admin/review/delete/{id}', [DashboardController::class, 'admin_review_delete']);

    Route::get('admin/blog', [DashboardController::class, 'admin_blog']);
    Route::post('admin/blog', [DashboardController::class, 'admin_blog_store']);
    //Route::post('admin/blog/add', [DashboardController::class, 'admin_blog_store']);

    //Route::get('admin/blog/add', [DashboardController::class, 'admin_blog_add']);
    //Route::post('admin/blog/post', [DashboardController::class, 'admin_blog_post']);
    Route::get('admin/blog/edit/{id}', [DashboardController::class, 'admin_blog_edit']);
    Route::post('admin/blog/update/{id}', [DashboardController::class, 'admin_blog_update']);
    Route::get('admin/blog/delete/{id}', [DashboardController::class, 'admin_blog_delete']);

    Route::get('admin/contact', [DashboardController::class, 'admin_contact']);
    Route::get('admin/contact/delete/{id}', [DashboardController::class, 'admin_contact_delete']);
});