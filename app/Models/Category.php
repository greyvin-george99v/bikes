<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','slug', 'description'];

    // Define One to many relationship
    public function products()
    {
        return $this->hasMany(Product::class);
    }


    // Generate slug
    /**

     * Boot the model.

     */

    protected static function boot()
    {
        parent::boot();

        static::created(function ($category) {

            $category->slug = $category->createSlug($category->name);

            $category->save();
        });
    }

    /** 
     * Write code on Method
     *
     * @return response()
     */
    private function createSlug($name)
    {
        if (static::whereSlug($slug = Str::slug($name))->exists()) {

            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');

            if (isset($max[-1]) && is_numeric($max[-1])) {

                return preg_replace_callback('/(\d+)$/', function ($mathces) {

                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }
}
