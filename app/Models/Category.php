<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'code',
        'activity',
        'parent_category'
    ];

    public function product_m()
    {
        return $this->hasMany(Product::class);
    }

    public function getCategoryById($id)
    {
        return DB::table($this->table)->where('id','=',$id)->get();
    }


}