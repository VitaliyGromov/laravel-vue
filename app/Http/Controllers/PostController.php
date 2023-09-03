<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Cool title',
                'body' => 'Cool body',
            ],
            [
                'id' => 2,
                'title' => 'Cats',
                'body' => 'Cats are cool',
            ],
            [
                'id' => 3,
                'title' => 'Music',
                'body' => 'I like metal music',
            ],
        ];

        return $posts;
    }
}
