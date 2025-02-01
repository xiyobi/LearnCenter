<?php


use App\Http\Controllers\WEB\HomeController;
use App\Http\Controllers\WEB\AdminController;
use App\Http\Controllers\WEB\TeacherController;
use App\Http\Controllers\WEB\UserController;

use Src\Router;
use App\Models\User;

Router::get('/', [HomeController::class, 'home']);
Router::get('/about', [HomeController::class, 'about']);
Router::get('/login', [HomeController::class, 'login']);
Router::get('/register', [HomeController::class, 'register']);
Router::get('/product-card', [HomeController::class, 'product_card']);
Router::get('/contacts', [HomeController::class, 'contacts']);
Router::get('/news', [HomeController::class, 'news']);
Router::get('/teachers', [HomeController::class, 'teachers']);

//admin
Router::get('/admin/dashboard/courses', [AdminController::class, 'courses']);
Router::get('/admin/dashboard/videos', [AdminController::class, 'videos']);
Router::get('/admin/dashboard/students', [AdminController::class, 'students']);
Router::get('/admin/dashboard/settings', [AdminController::class, 'settings']);
Router::get('/admin/dashboard/logout', [AdminController::class, 'logout']);


//Users
Router::get('/user/dashboard/course', [UserController::class, 'course']);
Router::get('/user/dashboard/teachers', [UserController::class, 'teachers']);
Router::get('/user/dashboard/videos', [UserController::class, 'videos']);
Router::get('/user/dashboard/purchases', [UserController::class, 'purchases']);
Router::get('/user/dashboard/assignments', [UserController::class, 'assignments']);
Router::get('/user/dashboard/homework', [UserController::class, 'homework']);
Router::get('/user/dashboard/logout', [UserController::class, 'logout']);




//teacher
Router::get('/teacher/dashboard/groups', [TeacherController::class, 'groups']);
Router::get('/teacher/dashboard/assignments', [TeacherController::class, 'assignments']);
Router::get('/teacher/dashboard/homework', [TeacherController::class, 'homework']);
Router::get('/teacher/dashboard/videos', [TeacherController::class, 'videos']);
Router::get('/teacher/dashboard/students', [TeacherController::class, 'students']);
Router::get('/teacher/dashboard/add_videos', [TeacherController::class, 'add_videos']);
Router::get('/teacher/dashboard/logout', [TeacherController::class, 'logout']);


Router::get('/dashboard/quizzes/{id}/update', [UserController::class, 'update']);


Router::notFound();
