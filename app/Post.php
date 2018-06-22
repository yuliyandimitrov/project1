<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    public $table ='posts';
    public $primaryKey = 'id';
    public $timestamps = true;

}

