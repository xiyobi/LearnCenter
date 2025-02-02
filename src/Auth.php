<?php

namespace Src;

use App\Models\Admin;
use App\Models\DB;
use App\Models\Teacher;
use App\Models\User;
use PDO;


class Auth
{
    public static function getToken(): string|array
    {
        $headers = getallheaders();
        if (!isset($headers['Authorization'])) {
            apiResponse([
                'message' => 'Unauthorized'
            ], 401);
        }
        if(!str_starts_with($headers['Authorization'], 'Bearer ')){
            apiResponse([
                'message' => 'Authorization header must start with Bearer'
            ], 400);
        }
        return str_replace('Bearer ', '', $headers['Authorization']);
    }

    // User Chack
    public  static function getUserCorrectToken()
    {
        $db = new DB();
        $pdo = $db->getConnection();
        $query=("SELECT * FROM user_api_tokens WHERE token = :token and expires_at >= NOW()");
        $stmt = $pdo->prepare($query);
        $stmt->execute(
            [':token' => self::getToken()]
        );

        return $stmt->fetch();
    }
    //admin chack
    public  static function getAdminCorrectToken()
    {
        $db = new DB();
        $pdo = $db->getConnection();
        $query=("SELECT * FROM admin_api_tokens WHERE token = :token and expires_at >= NOW()");
        $stmt = $pdo->prepare($query);
        $stmt->execute(
            [':token' => self::getToken()]
        );

        return $stmt->fetch();
    }
    // teacher chack
    public  static function getTeacherCorrectToken()
    {
        $db = new DB();
        $pdo = $db->getConnection();
        $query=("SELECT * FROM teacher_api_tokens WHERE token = :token and expires_at >= NOW()");
        $stmt = $pdo->prepare($query);
        $stmt->execute(
            [':token' => self::getToken()]
        );

        return $stmt->fetch();
    }
    public static function check(): bool
    {
        if (!self::getToken()) {
            apiResponse([
                'message' => 'Unauthorized'
            ], 401);
        }
        return true;
    }
    // User
    public static function user(): mixed
    {
        $token= self::getUserCorrectToken();
        if (!$token) {
            apiResponse([
                'errors'=>['message' => 'Unauthorized']
            ],401);
        }
        $user = new User();
        return $user->getUserById($token->user_id);
    }
    //Admin
    public static function admin(): mixed
    {
        $token= self::getAdminCorrectToken();
        if (!$token) {
            apiResponse([
                'errors'=>['message' => 'Unauthorized']
            ],401);
        }
        $admin = new Admin();
        return $admin->getAdminById($token->admin_id);
    }

    //Teacher
    public static function teacher(): mixed
    {
        $token= self::getTeacherCorrectToken();
        if (!$token) {
            apiResponse([
                'errors'=>['message' => 'Unauthorized']
            ],401);
        }
        $teacher = new Teacher();
        return $teacher->getTeacherById($token->teacher_id);
    }
}