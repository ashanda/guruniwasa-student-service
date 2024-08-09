<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherSubjectController extends Controller
{
    public function teacherSubject()
    {
        try{

            return view('web.teacher-subject.view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function requestSubject()
    {
        try{

            return view('web.teacher-subject.request_subject');

        }catch(\Exception $exception){

            return;
        }
    }

}
