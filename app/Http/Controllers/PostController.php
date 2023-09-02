<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
