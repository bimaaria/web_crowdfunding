<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function random($count)
    {
        $blogs = Blog::select('*')
                ->inRandomOrder()
                ->limit($count)
                ->get();

        $data['blogs'] = $blogs;

        return response()->json([
            'response_code' => '00',
            'response_message' => 'data blogs berhasil ditampilkan',
            'data' => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);

        $blog = Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image
        ]);
        $data['blog'] = $blog;

        return response()->json([
            'response_code' => '00',
            'response_message' => 'data blogs berhasil ditambahkan',
            'data' => $data
        ], 200);
    }
}
