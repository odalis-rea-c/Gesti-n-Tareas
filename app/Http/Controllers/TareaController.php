<?php

namespace App\Http\Controllers;
;

use App\Http\Controllers;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index() {
        return view(tarea.index);
    }
}
