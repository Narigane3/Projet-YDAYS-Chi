<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $productId)
 */
class Product extends Model
{
    use HasFactory;

    protected $table = "category";

    protected $attributes = [
        "name" => "",
        "reference" => "",
        "description" => "",
        "quantity" => 0,
        "status" => 1,
        "priceHT" => 0.0,
        "tva_id" => 0,
        "category_id" => 0
    ];

    protected $fillable = [
        "name",
        "reference",
        "description",
        "quantity",
        "status",
        "priceHT",
        "tva_id",
        "category_id"
    ];
}
