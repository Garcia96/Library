<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	public $timestamps = false;
    protected $table = 'author';

    protected $fillable = [
        'name', 'lastname', 'tel', 'nit'
    ];

    public function book()
    {
        return $this->belongsToMany('App\Book','book_author','id_author','id_book');
    }

}
