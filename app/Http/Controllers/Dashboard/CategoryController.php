<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use \Input, \Session, \Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $category = Category::all();
       return view('dashboard.category.index', ['category' => $category]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('dashboard.category.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       $category = new Category;
       $category->category = Input::get('category');
       $category->symbol = Input::get('symbol');
       $category->slug = str_slug(Input::get('category'), "-");
       $category->save();

       Session::flash('message', 'Menambah kategori sukses!');
       return Redirect::to('dashboard/category');
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
       $category = Category::find($id);
       return view('dashboard.category.edit', [
         'category' => $category
         ]);
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
       $category = Category::find($id);
       $category->category = Input::get('category');
       $category->symbol = Input::get('symbol');
       $category->slug = str_slug(Input::get('category'), "-");
       $category->save();

       Session::flash('message', 'Ganti Kategori Sukses');
       return Redirect::to('dashboard/category');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $category = Category::find($id);
       $category->delete();
       Session::flash('message', 'Menghapus Kategori Sukses');
       return Redirect::to('dashboard/category');
     }
}
