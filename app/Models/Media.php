<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $mediaId)
 */
class Media extends Model
{
    use HasFactory;

    protected $table = "media";

    protected $attributes = [
        "path" => "",
        "title" => "",
        "alt"=> "",
        "wheight" => 0,
        "height" => 0,
        "mime_type" => "",
        "status" => true
    ];

    protected $fillable = [
        "path",
        "title",
        "alt",
        "wheight",
        "height",
        "mime_type",
        "status"
    ];
}
