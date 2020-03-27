<?php

namespace App\Http\Controllers;

use App\Category;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    public function show_lesson_item($id)
    {
        $count = Lesson::where('id', $id)->count();
        if($count>0) {
            $lessons = DB::table('lessons')
                ->join('courses', 'courses.id_lesson', '=', 'lessons.id')
                ->join('categories', 'lessons.id_category', '=', 'categories.id')
                ->where('lessons.id', $id)
                ->orderBy('courses.id', 'ASC')
                ->get();
            //
            $lesson_group = DB::table('categories')
                ->join('lessons', 'categories.id', '=', 'lessons.id_category')
                ->orderBy('lessons.id', 'ASC')->limit(5)
                ->get();
            $category = Category::get();

            return view('show_lesson_item', compact('lessons', 'category', 'lesson_group'));
        }
        else
            return view('errors.404');
    }
}
