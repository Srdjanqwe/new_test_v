<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'blogposts';
    // protected $fillable = ['user_name','unique'];
    protected $fillable = ['unique'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public static function boot()
    {
        parent::boot();
    }
}
