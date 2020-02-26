<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    //
    public function index(){
    	return view('question_answer');
    }

    public function create(){
    	return view('form');
    }
}
