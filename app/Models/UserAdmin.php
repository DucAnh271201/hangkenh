<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserAdmin  extends Authenticatable
{
    use HasApiTokens, Notifiable;
    public const STATUS_INACTIVE = 0;
    public const STATUS_ACTIVE = 1;
    public const STATUSES = [
        self::STATUS_INACTIVE => 'Không hoạt động',
        self::STATUS_ACTIVE => 'Hoạt động',
    ];
    public const STATUS_CLASS = [
        self::STATUS_INACTIVE => 'text-danger',
        self::STATUS_ACTIVE => 'text-success',
    ];
    protected $table = 'user_admins';

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'status',
        'role_id'
    ];

    protected $hidden = [
        'password'
    ];

    public function role()
    {
        return $this->belongsTo(UserRole::class, 'role_id');
    }

    public function getStatusLabelAttribute(): string
    {
        return self::STATUSES[$this->status] ?? '';
    }

    public function getStatusClassAttribute(): string
    {
        return self::STATUS_CLASS[$this->status] ?? '';
    }
}
