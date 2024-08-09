<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentTalentController extends Controller
{
    //
    public function studentTalent()
    {
        try{

            return view('web.student_talents.view');

        }catch(\Exception $exception){

            return;
        }
    }
    public function onlineExamResult()
    {
        try{

            return view('web.student_talents.online_exam_result');

        }catch(\Exception $exception){

            return;
        }
    }

    public function paperAnswer()
    {
        try{

            return view('web.student_talents.paper_answer');

        }catch(\Exception $exception){

            return;
        }
    }


    public function studentCertificate()
    {
        try{

            return view('web.student_talents.student_certificate');

        }catch(\Exception $exception){

            return;
        }
    }
    public function talentVideos()
    {
        try{

            return view('web.student_talents.talent-videos');

        }catch(\Exception $exception){

            return;
        }
    }


    public function talentVideosView()
    {
        try{

            return view('web.student_talents.talent_videos_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function talentVideosLesson()
    {
        try{

            return view('web.student_talents.talent_videos_lesson');

        }catch(\Exception $exception){

            return;
        }
    }




  public function myTalentVideos()
    {
        try{

            return view('web.student_talents.my_talent_videos');

        }catch(\Exception $exception){

            return;
        }
    }





    public function otherTalentVideos()
    {
        try{

            return view('web.student_talents.other_talent_videos');

        }catch(\Exception $exception){

            return;
        }
    }


    public function reviweTeacher()
    {
        try{

            return view('web.student_talents.reviwe_teacher');

        }catch(\Exception $exception){

            return;
        }
    }


    public function termTest()
    {
        try{

            return view('web.student_talents.term_test');

        }catch(\Exception $exception){

            return;
        }
    }



















}
