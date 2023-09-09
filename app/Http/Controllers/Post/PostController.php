<?php

declare(strict_types=1);

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Image;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        return 'everything is okey';
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $images = $validated['images'];

        unset($validated['images']);

        $post = Post::firstOrCreate($validated);

        foreach($images as $image){
            $name = md5(Carbon::now() . '_' . $image->getClientOriginalName()). '.' . $image->getClientOriginalExtension();
            $filePath = Storage::disk('public')->putFileAs('/images', $image, $name);

            Image::create([
                'path' => $filePath,
                'url' => url("/storage/$filePath"),
                'post_id' => $post->id,
            ]);
        }

        return response()->json(['status' => 200]);
    }
}
