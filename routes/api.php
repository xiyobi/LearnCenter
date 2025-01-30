<?php

use App\Http\Controllers\API\AnswerController;
use App\Http\Controllers\API\ResultController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\QuizController;
use Src\Router;

Router::get('/api/users/getInfo',[UserController::class, 'show'],'auth:api');
Router::post('/api/register', [UserController::class, 'store']);
Router::post('/api/login', [UserController::class, 'login']);



//Result
Router::post('/api/results', [ResultController::class, 'store'],'auth:api');
Router::post('/api/answers', [AnswerController::class, 'store'],'auth:api');


Router::notFound();

