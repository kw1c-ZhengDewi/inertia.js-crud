<?php

namespace App\Http\Controllers;

abstract class Controller
{
      public function blog() {
        return view('blog');
    }

    public function resume() {
        return view('resume');
    }

}
