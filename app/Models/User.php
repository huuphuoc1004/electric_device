<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;

    protected $fillable = [
        'name',
        'email',
        'category_user_id',
        'password',
        'phone',
        'active',
        'login_fail',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return in_array($this->category_user_id, [1, 2]);
    }
    
    public function categoryUser()
    {
        return $this->belongsTo(CategoryUser::class);
    }

}
