<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $categoryId)
 */
class Category extends Model
{
    use HasFactory;

    protected $table = "category";

    protected $attributes = [
        "name" => "",
        "description" => "",
        "reference" => "",
        "status" => 1
    ];

    protected $fillable = [
        "name",
        "description",
        "reference",
        "status"
    ];
}
