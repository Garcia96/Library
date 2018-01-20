<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
	public $timestamps = false;
    protected $table = 'editorials';

    protected $fillable = [
        'name', 'tel', 'address'
    ];

    public function book()
    {
        return $this->hasMany('App\Book');
    }
}
