<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteAndPaperController extends Controller
{
   
    public function notePaper()
    {
        try{

            return view('web.note-paper.list');

        }catch(\Exception $exception){

            return;
        }
    }

    public function notePaperList()
    {
        try{

            return view('web.note-paper.list_view');

        }catch(\Exception $exception){

            return;
        }
    }

    
}
