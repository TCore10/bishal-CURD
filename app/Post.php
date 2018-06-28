<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    //protected $fillable = ['title','content'];(In case of fillable the mention fields have to be filled)
    protected $guarded = []; //in case of Guarded here nothing is guarded

    public function user()
    {
    	return $this->hasMany(User::class);
    }
}
