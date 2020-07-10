<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    // protected $table = 'todo_items';
    // protected $attributes = array(
    //     'progress' => 0
    //   );


    protected $guarded = array('id');


    public static $rules = array(
        'text'=>  'required',
        // progressをデフォルトを1(作業中)にする
        'progress'=>'required',
    );
}
