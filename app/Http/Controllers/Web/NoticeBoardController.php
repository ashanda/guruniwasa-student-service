<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeBoardController extends Controller
{
    //
    public function noticeBoard()
    {
        try{

            return view('web.notice_board.view');

        }catch(\Exception $exception){

            return;
        }
    }

    
}
