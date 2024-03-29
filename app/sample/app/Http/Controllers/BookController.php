<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ログ出力用
use Illuminate\Support\Facades\Log;
// データベース参照用
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // booksテーブルのレコードをすべて取得
        $data = [
            'books' => Book::all()
        ];

        // ログ出力
        Log::debug('デバッグ用. $dataの内容です');
        Log::debug($data);

        return view('book.index', $data);
    }
}
