<?php


use App\Http\Controllers\API\TeacherController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AdminController;
use Src\Router;

// User
Router::get('/api/users/getInfo',[UserController::class, 'show'],'auth:api');
Router::post('/api/register/user', [UserController::class, 'store']);
Router::post('/api/login/user', [UserController::class, 'login']);

//admin
Router::post('/api/register/admin', [AdminController::class, 'store']);
Router::post('/api/login/admin', [AdminController::class, 'login']);
Router::get('/api/admin/getInfo',[AdminController::class, 'show'],'auth:api');

//Teacher
Router::post('/api/register/teacher', [TeacherController::class, 'store']);
Router::post('/api/login/teacher', [TeacherController::class, 'login']);
Router::get('/api/teacher/getInfo',[TeacherController::class, 'show'],'auth:api');





//Result



Router::notFound();

