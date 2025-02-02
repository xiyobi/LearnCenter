<?php

namespace App\Models;

use App\Models\DB;
use App\Traits\HasApiTokens;
use Random\RandomException;

class Admin extends DB
{
    use HasApiTokens;

    /**
     * @throws RandomException
     */
    public  function create(string $full_name, string $phone_number, string $email, string $password): true
    {
        $query = "INSERT INTO admins (full_name, phone_number, email, password,  created_at) VALUES (:full_name, :phone_number, :email, :password,  NOW())";
        $this->conn
            ->prepare($query)
            ->execute(
                [':full_name' => $full_name, ':phone_number'=>$phone_number, ':email' => $email, ':password' => password_hash($password, PASSWORD_DEFAULT)]
            );

        $adminId = $this->conn->lastInsertId();
        $this->adminCreateApiToken($adminId);
        return true;
    }
    public function getAdmin(string $email, string $password): bool
    {
        $query = "SELECT * FROM admins WHERE email = :email";
        $stmt = $this->conn
            ->prepare($query);
        $stmt->execute(
            [':email' => $email]
        );

        $admin = $stmt->fetch();
        if ($admin && password_verify($password, $admin->password)) {

            $this->adminCreateApiToken($admin->id);
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getAdminById(int $id): mixed
    {
        $query = "SELECT id, full_name, phone_number, email, created_at FROM admins WHERE id = :id";
        $stmt = $this->conn
            ->prepare($query);
        $stmt->execute(
            [':id' =>$id]
        );
        return $stmt->fetch();
    }

}