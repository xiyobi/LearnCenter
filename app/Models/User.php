<?php

namespace App\Models;

use App\Traits\HasApiTokens;
use PDO;
use Random\RandomException;

class  User extends DB
{
    use HasApiTokens;

    /**
     * @throws RandomException
     */
    public  function create(string $full_name, string $phone_number, string $email, string $password): true
    {
        $query = "INSERT INTO users (full_name, phone_number, email, password, wallet, status, teacher, updated_at, created_at) VALUES (:full_name, :phone_number, :email, :password, :wallet, :status, :teacher, NOW(), NOW())";
        $this->conn
            ->prepare($query)
            ->execute(
                [':full_name' => $full_name, ':phone_number'=>$phone_number, ':email' => $email, ':password' => password_hash($password, PASSWORD_DEFAULT),':wallet'=>0, ':status'=>'inactive', ':teacher'=>0]
            );

        $userId = $this->conn->lastInsertId();
        $this->userCreateApiToken($userId);
        return true;
    }
    public function getUser(string $email, string $password): bool
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn
            ->prepare($query);
        $stmt->execute(
            [':email' => $email]
        );

        $user = $stmt->fetch();
        if ($user && password_verify($password, $user->password)) {

            $this->userCreateApiToken($user->id);
            return true;
        }
        else
        {
            return false;
        }
    }
 
    public function getUserById(int $id): mixed
    {
        $query = "SELECT id, full_name, wallet, teacher,updated_at, created_at FROM users WHERE id = :id";
        $stmt = $this->conn
            ->prepare($query);
        $stmt->execute(
            [':id' =>$id]
        );
        return $stmt->fetch();
    }
}