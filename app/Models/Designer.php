<?php

namespace App\Models;

use App\Models\Attributes\Serialize;
use App\Models\Traits\HasSEO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    use HasSEO;
    protected $fillable = [
        'name',
        'short_name',
        'slug',
        'short_description',
        'description',
        'image',
        'image_library',
        'status',
        'meta_data',
    ];

    protected $casts = [
        'image' => Serialize::class,
        'image_library' => Serialize::class,
        'meta_data' => Serialize::class,
    ];

    public const STATUS_UNACTIVE = 'UNACTIVE';
    public const STATUS_ACTIVE = 'ACTIVE';

    public const STATUSES = [
        self::STATUS_ACTIVE => 'Hoạt động',
        self::STATUS_UNACTIVE => 'Không hoạt động',
    ];

    public const STATUS_CLASS = [
        self::STATUS_UNACTIVE => 'text-danger',
        self::STATUS_ACTIVE => 'text-success',
    ];


    public function scopeActive(Builder $builder)
    {
        return $builder->where('status', self::STATUS_ACTIVE);
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
