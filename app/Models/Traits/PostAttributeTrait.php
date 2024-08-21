<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\Log;

trait PostAttributeTrait
{

    public function getStatusLabelAttribute(): string
    {
        return self::STATUSES[$this->status] ?? '';
    }

    public function getStatusClassAttribute(): string
    {
        return self::STATUS_CLASS[$this->status] ?? '';
    }

    public function getShortDescriptionAttribute()
    {
        return $this->postMeta->findByMetaKey('short_description');
    }

    public function getDescriptionAttribute()
    {
        return $this->postMeta->findByMetaKey('description');
    }

    public function getPostAuthorNameAttribute()
    {
        return $this->postMeta->findByMetaKey( 'post_author_name');
    }
    public function getPageTemplateAttribute()
    {
        return $this->postMeta->findByMetaKey( 'page_template');
    }

    public function getPhotoByAttribute()
    {
        return $this->postMeta->findByMetaKey( 'photo_by');
    }

    public function getFeatureImageAttribute()
    {
        $metaValue = $this->postMeta->findByMetaKey('feature_image');
    
        if ($metaValue) {
            $unserializedValue = @unserialize($metaValue);
    
            if ($unserializedValue !== false && is_array($unserializedValue)) {
                return $unserializedValue;
            } else {
                \Log::error('Unserialize error: Invalid serialized data in feature_image metadata.');
            }
        }
    
        return [
            'id' => '',
            'image' => ''
        ];
    }

    public function getImageLibraryAttribute()
    {
        $imageLibrary = $this->postMeta->findByMetaKey('image_library');
        if (!$imageLibrary) {
            return [];
        }

        return unserialize($imageLibrary);
    }

    public function getImageLibraryIdsAttribute()
    {
        try {
            $ids = [];
            foreach ($this->image_library as $item){
                $ids[] = $item['id'];
            }
            return implode(',', $ids);
        }catch (\Exception $exception){
            Log::error(make_prefix_log_message(__CLASS__, __FUNCTION__, __LINE__, $exception->getMessage()));
        }
        return '';
    }

    public function getFeatureImageLinkAttribute()
    {
        return $this->feature_image['image'] ?? '';
    }

    public function getFeatureImageObjectIdAttribute()
    {
        return $this->feature_image['id'];
    }
    public function getFeatureImageObjectImageAttribute()
    {
        return $this->feature_image['image'];
    }


}
