<?php

namespace App\Http\Controllers;

use App\Category;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show_category()
    {
        $lessons_all=DB::table('categories')
            ->join('lessons', 'categories.id', '=', 'lessons.id_category')
            ->orderBy('lessons.id', 'DESC')
            ->get();

        //show all category
        $category=Category::get();
        if(Auth::check())
            $group=Auth::user()->group;
        else
            $group=null;

        $lesson_group = DB::table('categories')
            ->join('lessons', 'categories.id', '=', 'lessons.id_category')
            ->where('lessons.group',$group)
            ->orderBy('lessons.id', 'ASC')->limit(5)
            ->get();

        return view('category',compact('lessons_all','category','lesson_group'));
    }
    public function show_category_item($id)
    {
        $count = Category::where('id', $id)->count();
        if($count>0) {
            if (Auth::check())
                $group = Auth::user()->group;
            else
                $group = null;
            $lessons_all = DB::table('categories')
                ->join('lessons', 'categories.id', '=', 'lessons.id_category')
                ->where('categories.id', $id)
                ->orderBy('lessons.id', 'DESC')
                ->get();
            $category = Category::get();

            $category_name = Category::find($id);
            $lesson_group = DB::table('categories')
                ->join('lessons', 'categories.id', '=', 'lessons.id_category')
                ->where('lessons.group', $group)
                ->orderBy('lessons.id', 'ASC')->limit(5)
                ->get();

            return view('category_item', compact('lessons_all', 'category', 'category_name', 'lesson_group'));
        }
        else
            return view('errors.404');
    }
}
