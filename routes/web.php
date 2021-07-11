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

use App\Http\Middleware\CheckAge;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function () {
    return view('hello-world');
});

Route::get('/dashboard', function () {
    // Mã xử lý khác viết ở đây
})->middleware('auth', 'checkage');
// })->middleware(CheckAge::class);

Route::get('/role', [
    'middleware' => 'role:superadmin',
    'uses' => 'MainController@checkRole',
]);

Route::group(['middleware' => ['web']], function () {
    //
});

Route::get('/contact', 'ContactController@showContactForm');
Route::post('contact', 'ContactController@insertMessage');
Route::get('/basic-response-string', function () {
    $info = ['name' => 'All Laravel', 'version' => 'Laravel 5.4', 'website' => 'http://allaravel.com'];
    return $info;
});

Route::get('test-view', function () {
    if (View::exists('fontend.contact')) {
        return view('fontend.contact');
    } else {
        return 'Trang liên hệ đang bị lỗi, bạn vui lòng quay lại sau';
    }
});

Route::get('new-details/{news_id_string}', 'MainController@showNews');
Route::get('first-blade-example', function () {
    return view('fontend.first-blade-example');
});
Route::get('components', function () {
    return view('fontend.component-example');
});
Route::get('second-blade-example', function () {
    $comment = 'Tôi là <span class="label label-success">All Laravel</span>';
    return view('fontend.second-blade-example')->with('comment', $comment);
});

Route::get('news', function () {
    $news_list = array(
        ['title' => 'Bài viết số 1', 'content' => 'Nội dung bài viết 1', 'post_date' => '2017-01-03'],
        ['title' => 'Bài viết số 2', 'content' => 'Nội dung bài viết 2', 'post_date' => '2017-01-03'],
        ['title' => 'Bài viết số 3', 'content' => 'Nội dung bài viết 3', 'post_date' => '2017-01-03'],
        ['title' => 'Bài viết số 4', 'content' => 'Nội dung bài viết 4', 'post_date' => '2017-01-03']
    );
    return view('fontend.news-list')->with(compact('news_list'));
});

Route::resource('product', 'ProductController', ['only' => [
    'index', 'create', 'store', 'edit'
]]);
