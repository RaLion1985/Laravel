<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Armyrss extends Model
{
    protected $table="army_rss";
    protected $primaryKey="id";
    protected $fillable=['title','link','description'];

}
