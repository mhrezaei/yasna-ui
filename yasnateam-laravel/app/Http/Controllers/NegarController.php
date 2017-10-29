<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NegarController extends Controller
{
    public function hello( $argument = 'jafar' )
    {
        $links = [
            'docs'=> '#docs' ,
            'books'=> '#books' ,
            'blogs'=> '#blogs' ,
        ] ;


        return view('negar' , compact('argument','links')) ;
        trans("validation.max.numeric") ;
    }
}

