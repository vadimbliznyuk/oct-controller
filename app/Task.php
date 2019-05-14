<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

////https://drive.google.com/open?id=0B0BvhbNap7MPS0JQbDkxOVMyR3M
class Task extends Model {

    protected $fillable = ['name'];

    public function user() {
	return $this->belongsTo(User::class);
    }

}
