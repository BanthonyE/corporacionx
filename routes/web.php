<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('viewsTemplate/index');
})->name('home');
 */

Route::view('/','viewsTemplate/index')->name('index');
Route::view('/inicio2','viewsTemplate/index-2')->name('index-2');
Route::view('/inicio3','viewsTemplate/index-3')->name('index-3');

Route::view('/about','viewsTemplate/about')->name('about');
Route::view('/about-2','viewsTemplate/about-2')->name('about-2');

Route::view('/services','viewsTemplate/services')->name('services');
Route::view('/services2','viewsTemplate/services-2')->name('services-2');
Route::view('/service-details','viewsTemplate/service-details')->name('service-details');

Route::view('/projects','viewsTemplate/projects')->name('projects');
Route::view('/projects-2','viewsTemplate/projects-2')->name('projects-2');
Route::view('/projects-lightbox','viewsTemplate/projects-lightbox')->name('projects-lightbox');
Route::view('/projects-lightbox-description','viewsTemplate/projects-lightbox-description')->name('projects-lightbox-description');
Route::view('/project-details','viewsTemplate/project-details')->name('project-details');

Route::view('/coming-soon','viewsTemplate/coming-soon')->name('coming-soon');
Route::view('/page-not-found','viewsTemplate/page-not-found')->name('page-not-found');
Route::view('/faq','viewsTemplate/faq')->name('faq');
Route::view('/privacy','viewsTemplate/privacy')->name('privacy');
Route::view('/support','viewsTemplate/support')->name('support');

Route::view('/blogs','viewsTemplate/blogs')->name('blogs');
Route::view('/blogs-grid-1','viewsTemplate/blogs-grid-1')->name('blogs-grid-1');
Route::view('/blogs-grid-2','viewsTemplate/blogs-grid-2')->name('blogs-grid-2');
Route::view('/blogs-grid-2','viewsTemplate/blogs-grid-2')->name('blogs-grid-2');
Route::view('/blogs-3','viewsTemplate/blogs-3')->name('blogs-3');
Route::view('/blog-details','viewsTemplate/blog-details')->name('blog-details');
Route::view('/blog-details-2','viewsTemplate/blog-details-2')->name('blog-details-2');

Route::view('/contact','viewsTemplate/contact')->name('contact');
Route::view('/contact-2','viewsTemplate/contact-2')->name('contact-2');