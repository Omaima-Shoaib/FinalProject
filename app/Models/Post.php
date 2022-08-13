<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['id','title','body','user_id','enabled','published_at','image'];
    protected $dates=['deleted_at'];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
