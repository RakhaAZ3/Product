<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //kolom/field yang boleh di isi
    protected $fillable = ['id','title','content','cover'];
    public $timestamp =true;
}
