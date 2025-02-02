<?php

namespace App\Http\Controllers\API;

use App\Models\Admin;
use App\Models\DB;
use App\Traits\Validator;
use Src\Auth;

class AdminController extends DB
{
    use Validator;

    public function store()
    {
        $adminData = $this-> validate([

            'full_name' => 'string',
            'email' => 'string',
            'password' => 'string',
            'phone_number' => 'string',

        ]);

        $admin = new Admin();
        $admin->create($adminData['full_name'],$adminData['phone_number'],$adminData['email'],$adminData['password']);
        apiResponse(
            ['massage' => 'Admin created successfully',
                'token'=>$admin->api_token],
            200);
    }

    public function  login(): void
    {
        $adminData = $this-> validate([
            'email' => 'string',
            'password' => 'string',
        ]);
        $admin=new Admin();
        if($admin->getAdmin($adminData['email'],$adminData['password'])){
            apiResponse(
                ['massage' => 'User logged in successfully',
                    'token'=>$admin->api_token]);
        }

        apiResponse([
            'errors'=>[
                'massage' => 'User not found',
            ],
        ],401);

    }
    public function show()
    {
        $admin = Auth::admin();
        apiResponse([
            'admin' => $admin,
        ],200);
    }

}