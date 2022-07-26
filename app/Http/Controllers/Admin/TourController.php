<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Models\Tour;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tours = Tour::paginate(10);
        
        return view('admin.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'nullable|max:300',
            'distance' => 'nullable',
            'altitude_delta' => 'nullable',
            'duration' => 'nullable',
            'description' => 'nullable',
            'link_gps' => 'nullable',
            'map_image' => ['nullable', 'mimes:jpeg,jpg,png,gif,bmp,svg,webp', 'max:1024'],
            'altimetry_image' => ['nullable', 'mimes:jpeg,jpg,png,gif,bmp,svg,webp', 'max:1024'],
            /* 'category_id' => 'nullable|exists:categories,id' */
        ]);
        if ($request->file('map_image')) {
            $map_image = Storage::put('tours_maps', $request->file('map_image'));
            $validate['map_image'] = $map_image;
        }
        if ($request->file('altimetry_image')) {
            $altimetry_image = Storage::put('tours_altimetries', $request->file('altimetry_image'));
            $validate['altimetry_image'] = $altimetry_image;
        }

        $validate['slug'] = Str::slug($request->name);
        /* ddd($validate); */
        $tour = Tour::create($validate);

        /* if ($request->has('tags')) {
            $request->validate([
                'tags' => 'nullable|exists:tags,id'
            ]);
            $post->tags()->attach($request->tags);
        } */

        return redirect()->route('admin.tours.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
