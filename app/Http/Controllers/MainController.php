<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function checkRole()
    {
        echo "<br>2. MainController@checkRole";
        echo "<br>Main Controller: checkRole function";
        echo "<br>Thực hiện sau khi qua bộ lọc Middleware và trước khi gửi HTTP response";
    }

    public function showNews($news_id_string)
    {
        $news_id_arr = explode('-', $news_id_string);
        $news_id = end($news_id_arr);

        // Thực hiện lấy thông tin về bài viết $news_id, bài viết đưa ra ví dụ ở mức đơn giản
        $news_title = 'Bài viết Laravel mới với ID là ' . $news_id;
        // Các xử lý khác

        return view('fontend.news-detail')->with(['news_id' => $news_id, 'news_title' => $news_title]);
    }
}
