<?php

namespace App\Models;
//元々入ってたけどこれは必要？
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    public function getList(){
    //articlesテーブルからデータを取得
    $articles = DB::table('articles')->get();
    return $articles;
    }
}
