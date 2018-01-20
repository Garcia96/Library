<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	public $timestamps = false;
    protected $table = 'authors';

    protected $fillable = [
        'name', 'lastname', 'tel', 'nit'
    ];

    public function books()
    {
        return $this->belongsToMany('App\Book');
    }

}
