<?php
namespace App\Http\Middleware;

session_start();

class RoleMiddleware {
    public static function check($role): void
    {
        if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== $role) {
            header("Location: /unauthorized.php");
            exit();
        }
    }
}
