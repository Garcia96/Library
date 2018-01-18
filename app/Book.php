<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	public $timestamps = false;
    protected $table = 'book';

    protected $fillable = [
        'title', 'price', 'author_id', 'editorial_id', 'date'
    ];

    public function Editorial()
    {
        return $this->belongsTo('App\Editorial');
    }

    public function Author()
    {
        return $this->belongsToMany('App\Author','book_author','id_book','id_author');
    }
}
