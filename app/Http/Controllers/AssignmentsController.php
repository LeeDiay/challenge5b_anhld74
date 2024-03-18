<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AssignmentsController extends Controller
{
    public function create()
    {
        return view('admin.assignments.add', [
            'title' => 'Them bai tap moi'
        ]);
    }
}
