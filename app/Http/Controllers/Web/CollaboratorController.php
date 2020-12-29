<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    public function show()
    {
        return view('collaborators.show');
    }
}
