<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Article extends Model
{
    //表名
    protected $table = 'article';

    //指定主键
    protected $primaryKey = 'article_id';

    //指定允许批量赋值的字段
    protected $fillable = [
        'title', 'content', 'tags',
    ];

    //指定不允许批量赋值的字段
    // protected $guarded = [];

    //自动维护时间戳
    public $timestamps = false;

    //定制时间戳格式
    protected $dateFormat = 'U';

    //将默认增加时间转化为时间戳
    protected function getDateFormat()
    {
        return time();
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = [
//        'password', 'remember_token'
//    ];
}