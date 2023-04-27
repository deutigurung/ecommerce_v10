<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title','price','status','image','description'];

    public function scopeActive(Builder $query) : void{
        $query->where('status','active')->latest()->get();
    }

}
