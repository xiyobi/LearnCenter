<?php


use App\Http\Controllers\WEB\HomeController;
use App\Http\Controllers\WEB\QuizController;
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


Router::get('/dashboard', [UserController::class, 'course']);
Router::get('/dashboard/payments', [UserController::class, 'payments']);
Router::get('/dashboard/teachers', [UserController::class, 'teachers']);
Router::get('/dashboard/videos', [UserController::class, 'videos']);
Router::get('/dashboard/wallet', [UserController::class, 'wallet']);
Router::get('/dashboard/purchases', [UserController::class, 'purchases']);
Router::get('/dashboard/assignments', [UserController::class, 'assignments']);


Router::get('/take_quiz/{id}', [QuizController::class, 'take_quiz']);

Router::get('/dashboard/quizzes/{id}/update', [UserController::class, 'update']);


Router::notFound();
