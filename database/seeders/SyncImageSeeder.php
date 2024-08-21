<?php

namespace Database\Seeders;

use App\Models\File;
use App\Models\PostMeta;
use App\Utils\Util;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SyncImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            \DB::beginTransaction();
            $data = PostMeta::query()->where('meta_key', 'feature_image')->get();
            foreach ($data as $item){
                $metaValue = unserialize($item->meta_value);
                $image = $metaValue['image'];
                $image  = str_replace('http://1.53.252.75/storage/', 'https://thamlenhangkenh.com/storage/', $image);
                $image  = str_replace('http://hangkenh.motbit.com/storage/', 'https://thamlenhangkenh.com/storage/', $image);
                $item->meta_value = serialize([
                    'id' => $metaValue['id'],
                    'image' => $image
                ]);
                $item->save();
            }

            $data = PostMeta::query()->where('meta_key', 'image_library')->get();
            foreach ($data as $item){
                $metaValue = unserialize($item->meta_value);
                $metaValueFormat = [];
                foreach ($metaValue as $meta){
                    $image  = str_replace('http://1.53.252.75/storage/', 'https://thamlenhangkenh.com/storage/', $meta);
                    $image  = str_replace('http://hangkenh.motbit.com/storage/', 'https://thamlenhangkenh.com/storage/', $image);
                    $file = File::where('path', $image)->first();
                    if ($file){
                        $metaValueFormat[] = [
                            'id' => $file->id,
                            'image' => $image
                        ];
                    }
                }


                $item->meta_value = serialize($metaValueFormat);
                $item->save();

            }
            \DB::commit();
        }catch (\Exception $exception){
            \DB::rollBack();
            \Log::error($exception);
        }

    }
}
