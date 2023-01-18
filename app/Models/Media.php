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

    protected $table = "medias";

    protected $attributes = [
        "path" => "",
        "title" => "",
        "alt"=> "",
        "size" => 0,
        "mime_type" => "",
        "status" => true
    ];

    protected $fillable = [
        "path",
        "title",
        "alt",
        "size",
        "mime_type",
        "status"
    ];
}
