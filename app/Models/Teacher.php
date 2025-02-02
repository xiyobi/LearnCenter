<?php

namespace App\Models;

use App\Models\DB;
use App\Traits\HasApiTokens;
use Random\RandomException;

class Teacher extends DB
{
    use HasApiTokens;

    public string $api_token;

    /**
     */
    public  function create(string $full_name, string $phone_number, string $email, string $password): true
    {
        $query = "INSERT INTO teachers (full_name, phone_number, email, password, updated_at, created_at) VALUES (:full_name, :phone_number, :email, :password, NOW(), NOW())";
        $this->conn
            ->prepare($query)
            ->execute(
                [':full_name' => $full_name, ':phone_number'=>$phone_number, ':email' => $email, ':password' => password_hash($password, PASSWORD_DEFAULT)]
            );

        $teacherId = $this->conn->lastInsertId();
        $this->teacherCreateApiToken($teacherId);
        return true;
    }
    public function getTeacher(string $email, string $password): bool
    {
        $query = "SELECT * FROM teachers WHERE email = :email";
        $stmt = $this->conn
            ->prepare($query);
        $stmt->execute(
            [':email' => $email]
        );

        $teacher = $stmt->fetch();
        if ($teacher && password_verify($password, $teacher->password)) {

            $this->teacherCreateApiToken($teacher->id);
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getTeacherById(int $id): mixed
    {
        $query = "SELECT id, full_name, phone_number, email, created_at, updated_at FROM teachers WHERE id = :id";
        $stmt = $this->conn
            ->prepare($query);
        $stmt->execute(
            [':id' =>$id]
        );
        return $stmt->fetch();
    }

}