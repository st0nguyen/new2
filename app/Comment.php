<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "tbl_comment";

    public function tintuc()
    {
        return $this->belongsTo('App\TinTuc', 'idTinTuc', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'idUser', 'id');
    }

}
