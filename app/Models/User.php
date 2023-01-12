<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static create(array $array)
 */
class User extends Authenticate
{
    use HasApiTokens, HasFactory, Notifiable;

    /** Table of this model
     * @var string
     */
    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'phone',
        'password',
        'role_id',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the role associated with user
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Roles::class);
    }

    /**
     * Get all users and organize them by page
     * @return LengthAwarePaginator
     */
    public function getAllUsers(): LengthAwarePaginator
    {
        return DB::table($this->table, 'u')
            ->select(['u.id', 'u.firstname', 'u.lastname', 'u.username', 'u.email', 'roles.libelle'])
            ->join('roles', 'role_id', '=', 'roles.id')
            ->where('u.status', "=", '1')->where('u.role_id','!=','4')
            ->paginate(5);
    }

    /** Return data of user
     * @param int $user_id Identifier user
     * @return Collection|Model|null
     */
    public function getUserById(int $user_id): Model|Collection|null
    {
        $users = User::all();
        return $users->find($user_id);
    }

}
