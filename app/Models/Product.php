<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Category;
use App\Models\CategoryChild;
use App\Models\Flavor;
use App\Models\Cart;
use Illuminate\Support\Str;
class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function image(){
        return $this->hasMany(Image::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function category_child(){
        return $this->belongsTo(CategoryChild::class);
    }

    public function flavor(){
        return $this->belongsTo(Flavor::class);
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function getLimitDescriptionAttribute()
    {
        return Str::limit(strip_tags(html_entity_decode($this->discription)), 200);
    }

    public function getLimitNameAttribute()
    {
        return Str::limit($this->name, 19, ' ...');
    }

    public function getPriceVndAttribute()
    {
        $symbol = ' VNĐ';
        $priceFormat = number_format($this->price, 0, '', '.');
        return $priceFormat.$symbol;
    }

    public function getDiscountPriceVndAttribute()
    {
        $symbol = ' VNĐ';
        $priceFormat = number_format($this->discount_price, 0, '', '.');
        return $priceFormat.$symbol;
    }
}
