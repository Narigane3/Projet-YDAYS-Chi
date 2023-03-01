<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $tvaId)
 */
class Tva extends Model
{
    use HasFactory;

    protected $table = "tva";

    protected $attributes = [
        "tva" => 0.0,
        "status" => 1
    ];

    protected $fillable = [
        "tva",
        "status"
    ];

    public function product()
    {
        return $this->hasMany("App\Models\Product", 'tva_id', 'id');
    }

    public function getAllTvaExpectCurrentId(int $id)
    {
        return Tva::all()
            ->where("status", "=", 1)
            ->where("id", "!=", $id);
    }
}
