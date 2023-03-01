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

    protected $table = "product";

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tva()
    {
        return $this->belongsTo(Tva::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllProducts()
    {
        return Product::with("tva", "category")
            ->where("status", "=", 1)
            ->get();
    }

    public function removeProduct(int $productId)
    {
        $product = Product::find($productId);
        $product->update(
            ["status" => 0]
        );
    }
}
