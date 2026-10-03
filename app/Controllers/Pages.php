<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Pages extends BaseController
{
    public function welcome()
    {
        $tasks = (new TaskModel())->where('is_archived', 0)->orderBy('task_date', 'ASC')->findAll();
        return view('welcome', ['title' => 'Welcome', 'tasks' => $tasks]);
    }

    public function about()
    {
        return view('about', ['title' => 'About']);
    }

    public function profile()
    {
        return view('profile', ['title' => 'Profile']);
    }
}
