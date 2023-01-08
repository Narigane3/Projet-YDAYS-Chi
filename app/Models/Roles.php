<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table="roles";

    /**
     * Get the user that owns the role
     */
    public function user(){
        return $this->hasMany(Roles::class);
    }


}
