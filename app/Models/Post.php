<?php

namespace App\Models;

use App\Models\Traits\HasSEO;
use App\Models\Traits\PostAttributeTrait;
use App\Models\Traits\ProductAttributeTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\HigherOrderBuilderProxy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

/**
 * @property-read HigherOrderBuilderProxy $publish
 *
 * @mixin \Illuminate\Database\Query\Builder
 */
class Post extends Model
{
    use HasSEO;
    use PostAttributeTrait;
    use ProductAttributeTrait;
    use SoftDeletes;

    public const KEY_POST_CACHE = 'post_%s_%s';

    public const STATUS_DRAFT = 'draft';
    public const STATUS_PENDING = 'pending';
    public const STATUS_PUBLISH = 'publish';

    public const TYPE_POST = 'post';
    public const TYPE_PAGE = 'page';
    public const TYPE_PRODUCT = 'product';
    public const TYPE_DESIGNER = 'designer';
    public const TYPE_PROJECT = 'project';

    public const STATUSES = [
        self::STATUS_PUBLISH => 'Công khai',
        self::STATUS_PENDING => 'Chờ duyệt',
        self::STATUS_DRAFT => 'Nháp',
    ];
    public const STATUS_CLASS = [
        self::STATUS_DRAFT => 'text-default',
        self::STATUS_PENDING => 'text-warning',
        self::STATUS_PUBLISH => 'text-success',
    ];

    protected $fillable = [
        'title',
        'slug',
        'status',
        'author_id',
        'type',
        'post_date',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'created_at' => 'custom_datetime:H:i d/m/Y'
    ];

    public static function booted()
    {
        static::created(function (Post $post) {
            self::forgetCacheAll();
        });
        static::updated(function (Post $post) {
            self::forgetCacheAll();
        });
    }

    public static function forgetCacheAll()
    {
        Cache::forget(sprintf(self::KEY_POST_CACHE, self::TYPE_POST, self::STATUS_PUBLISH));
        Cache::forget(sprintf(self::KEY_POST_CACHE, self::TYPE_PAGE, self::STATUS_PUBLISH));
        Cache::forget(sprintf(self::KEY_POST_CACHE, self::TYPE_PRODUCT, self::STATUS_PUBLISH));

    }

    public function author(): BelongsTo
    {
        if ($this->type == self::TYPE_DESIGNER) {
            return $this->belongsTo(Designer::class, 'author_id');
        }
        return $this->belongsTo(UserAdmin::class, 'author_id');
    }

    public function designer(): BelongsTo
    {
        return $this->belongsTo(Designer::class, 'author_id');
    }

    public function postMeta()
    {
        return $this->hasMany(PostMeta::class, 'post_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories', 'post_id', 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }


    public function product()
    {
        return $this->hasOne(PostProduct::class, 'post_id');
    }


    public function scopePublish(Builder $query)
    {
        return $query->where('status', self::STATUS_PUBLISH);
    }

    public function findByMetaKey($metaKey)
    {
        $find = $this->postMeta->where('meta_key', $metaKey)->first();
        if ($find) {
            return $find->meta_value;
        }

        return '';
    }
}
