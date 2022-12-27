<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    // tweetするときに登録しないカラムの設定($fillableは追加していいカラムの指定)どちらかを使用する必ず必要がある。
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    public static function getAllOrderByUpdated_at()
    {
        return self::orderBy('updated_at', 'desc')->get();
    }

    
}
