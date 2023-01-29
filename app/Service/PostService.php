<?php


namespace App\Service;


use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    function store($data){
        try {
            DB::beginTransaction();
            $tagsIds = $data['tag_ids'];
            unset($data['tag_ids']);
//        $preview_image=$data['preview_image'];
//        $main_image=$data['main_image'];
            $data['preview_image']=Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image']=Storage::disk('public')->put('/images', $data['main_image']);
//        $preview_imagePath = Storage::put('/images', $preview_image);
//        $main_imagePath = Storage::put('/images', $main_image);
            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagsIds);
            DB::commit();
        }catch (Exception $exception){
            DB::rollBack();
            abort(404);
        }
    }

    function update($data, $post){
        try {
            DB::beginTransaction();
            $tagsIds = $data['tag_ids'];
            unset($data['tag_ids']);

            isset($data['preview_image']) ?
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']) :
                $data['preview_image'] = $post->preview_image;

            isset($data['main_image']) ?
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']) :

                $data['main_image'] = $post->main_image;

            $post->update($data);
            $post->tags()->sync($tagsIds);

            DB::commit();
        }catch (Exception $exception){
            DB::rollBack();
            abort(500);
        }

        return $post;

    }
}
