<?php

namespace App\Http\Controllers\Admin;

use App\CategoryProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories-product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        // dd(Str::of(request()->title)->slug('-'));
        CategoryProduct::create([
            'title' => request()->title,
            'parent_id' => request()->parent_id == null ? 0 : request()->parent_id,
            'slug' => Str::of(request()->title)->slug('-'),
            'short_desc' => request()->intro,
            'desc' => request()->desc,
            'meta_title' => request()->meta_title,
            'meta_keyword' => request()->meta_key,
            'meta_desc' => request()->meta_desc,
            'publish' => request()->options['publish'] == 'on' ? 1 : 0,
            'highlight' => request()->options['highlight'] == 'on' ? 1 : 0,
            'image' => request()->file('image')->getClientOriginalName()
        ]);


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
