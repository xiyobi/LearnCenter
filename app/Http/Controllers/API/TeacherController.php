<?php

namespace App\Http\Controllers\API;

use App\Models\Teacher;
use App\Traits\Validator;
use Src\Auth;

class TeacherController
{
    use Validator;

    public function store()
    {
        $teacherData = $this-> validate([

            'full_name' => 'string',
            'email' => 'string',
            'password' => 'string',
            'phone_number' => 'string',

        ]);

        $teacher = new Teacher();
        $teacher->create($teacherData['full_name'],$teacherData['phone_number'],$teacherData['email'],$teacherData['password']);
        apiResponse(
            ['massage' => 'Teacher created successfully',
                'token'=>$teacher->api_token],
            200);
    }

    public function  login(): void
    {
        $teacherData = $this-> validate([
            'email' => 'string',
            'password' => 'string',
        ]);
        $teacher=new Teacher();
        if($teacher->getTeacher($teacherData['email'],$teacherData['password'])){
            apiResponse(
                ['massage' => 'User logged in successfully',
                    'token'=>$teacher->api_token]);
        }

        apiResponse([
            'errors'=>[
                'massage' => 'User not found',
            ],
        ],401);

    }
    public function show()
    {
        $teacher = Auth::teacher();
        apiResponse([
            'teacher' => $teacher
        ],200);
    }
}