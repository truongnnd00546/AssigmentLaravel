<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list_pro = Category::all();
        return view('admin.category.Category')->with('list_pro', $list_pro);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Product();
        $obj->name = Input::get('name');
        $obj->image = Input::get('image');
        $obj->description = Input::get('description');
        $obj->save();
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.category.edit')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->image = Input::get('image');
        $obj->description = Input::get('description');
        $obj->save();
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return response('article not found or has been deleted!', 404);
        }
        $obj->delete();
        return response('Deleted', 200);
    }
}
