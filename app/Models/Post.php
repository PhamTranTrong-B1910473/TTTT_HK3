<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'noidung',
        'category_id'
    ];
    protected $primaryKey = 'id';
    protected $table ='baigiang';

    public function category(){
        return $this->belongsTo('App\Models\CategoryPost','category_id');
    }


}
