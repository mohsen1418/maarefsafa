<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Mark;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show_profile($id)
    {
        $count = User::where('id', $id)->count();
        if($count>0) {
            //show all lesson user by group
            $user = User::where('id', $id)->first();
            $lessons = DB::table('lessons')
                ->join('categories', 'lessons.id_category', '=', 'categories.id')
                ->where('lessons.group', Auth::user()->group)
                ->get();

            //show all mark user
            $marks = Mark::where('id_user', $id)->limit(4)->get();

            //avg user
            $avg = Mark::where('id_user', $id)->avg('point');


            //lesson all public
            $lessons_all = DB::table('lessons')
                ->join('categories', 'lessons.id_category', '=', 'categories.id')
                ->get();

            return view('profile', compact('lessons', 'marks', 'avg', 'lessons_all', 'user'));
        }
        else
            return view('errors.404');
        }
}
