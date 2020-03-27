<?php

namespace App\Http\Controllers;

use App\Category;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $lessons_all=DB::table('categories')
            ->join('lessons', 'categories.id', '=', 'lessons.id_category')
            ->where('lessons.kind','عمومی')
            ->get();
        $lessons_group=DB::table('categories')
            ->join('lessons', 'categories.id', '=', 'lessons.id_category')
            ->where('categories.onvan','نمایه صوتی')
            ->get();
        $cat=Category::get();

        $lesson_count=DB::table('lessons')
            ->join('categories', 'lessons.id_category', '=', 'categories.id')
            ->where('lessons.id_category',1)
            ->count();
        return view('index',compact('lessons_all','lessons_group','cat'));
    }
}
