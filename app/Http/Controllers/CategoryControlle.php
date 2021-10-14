<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryControlle extends Controller
{
    //

    public  function    index()


    {
        $categories =   Category::all();
        return  view  ('categories.index',[
            'categories'=>  $categories
        ]);


    }



    public  function    show($categoryId)

    {
        $category  =  Category::findOrFail($categoryId);
        return  view( 'categories.show',['category'=>$category]);
    }

    public  function    create()
    {
        return  view('/categories.create');
    }


    public  function    store(Request  $request )
    {


        $request->validate([

            'name'=>'required|string|max:100',

            'desc'=>'required|string|',
        ]);


        Category  ::create([

            'name'=> $request->name,
            'desc'=> $request->desc,
        ]);
        return  redirect(url('/categories'));


    }
    public  function    edit($categoryId)

    {
        $category  =  Category::findOrFail($categoryId);
        return  view( 'categories.edit',['category'=>$category]);
    }

    public  function    update($categoryId,Request  $request)

    {
        $request->validate([

            'name'=>'required|string|max:100',

            'desc'=>'required|string|',
        ]);


        Category  ::findOrFail($categoryId)->update([

            'name'=> $request->name,
            'desc'=> $request->desc,
        ]);
        return  redirect(url('/categories'));

    }
public  function    destroy($categoryId)
{
    Category::findOrFail($categoryId)->delete();
    return  redirect(url('/categories'));
}

}
