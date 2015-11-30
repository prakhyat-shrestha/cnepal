<?php

namespace cnepal;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['title','body','excerpt','published_at'];

    
}
