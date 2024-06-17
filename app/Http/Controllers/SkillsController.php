<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Skills',
            'content' => 'This is the Skills page.'
        ];
        return view('skills', $data);
    }
}
