<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'role',
        'password',
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
        'password' => 'hashed',
    ];

/**
 * Determine if the user has the given permission.
 *
 * @param  string  $permission
 * @return bool
 */
public function hasPermission(string $permission): bool
{
    // Hard-coded permissions for each user role
    $permissions = [
        '2' => ['book-list', 'book-create', 'book-edit', 'book-delete'],
        '1' => ['book-list', 'book-edit'],
        '0' => ['book-list'],
    ];

    // Get the user's role
    $role = $this->role;

    // Check if the user's role has the given permission
    return in_array($permission, $permissions[$role] ?? []);
}
    
}
