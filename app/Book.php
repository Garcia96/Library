<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	public $timestamps = false;
    protected $table = 'books';

    protected $fillable = [
        'title', 'price', 'author_id', 'editorial_id', 'date'
    ];

    public function editorial()
    {
        return $this->belongsTo('App\Editorial');
    }

    public function authors()
    {
        return $this->belongsToMany('App\Author');
    }
}
