<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\Http\Resources\Student as StudentResource;

class StudentController extends Controller
{
    public function show()
    {
	    return StudentResource::collection(Student::all());
    }
}
