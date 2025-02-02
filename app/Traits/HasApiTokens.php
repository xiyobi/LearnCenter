<?php

namespace App\Traits;

use Random\RandomException;

trait HasApiTokens
{
    public string $api_token;
    protected string $duration;

    /**
     * @throws RandomException
     */

    //user create token
    public function  userCreateApiToken(int $userId): string
    {
        $query = "Insert into  user_api_tokens(user_id,token,expires_at,created_at)
            values(:userId, :token, :expiresAt,NOW())";

        $this->api_token=bin2hex(random_bytes(40));

        $this->duration = date('Y-m-d H:i:s', strtotime('+' . $_ENV['API_TOKEN_EXPIRATION_DAYS'] . 'month', time()));
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':userId' => $userId,
            ':token' => $this->api_token,
            ':expiresAt' => $this->duration,
        ]);
        return $this->api_token;
    }

    /**
     * @throws RandomException
     */
// admin create token
    public function  adminCreateApiToken(int $adminId): string
    {
        $query = "Insert into  admin_api_tokens(admin_id,token,expires_at,created_at)
            values(:adminId, :token, :expiresAt,NOW())";

        $this->api_token=bin2hex(random_bytes(50));

        $this->duration = date('Y-m-d H:i:s', strtotime('+' . $_ENV['API_TOKEN_EXPIRATION_YEARS'] . 'year', time()));
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':adminId' => $adminId,
            ':token' => $this->api_token,
            ':expiresAt' => $this->duration,
        ]);
        return $this->api_token;
    }
    //Teacher

    /**
     * @throws RandomException
     */
    public function  teacherCreateApiToken(int $teacherId): string
    {
        $query = "Insert into  teacher_api_tokens(teacher_id,token,expires_at,created_at)
            values(:teacherId, :token, :expiresAt,NOW())";

        $this->api_token=bin2hex(random_bytes(40));

        $this->duration = date('Y-m-d H:i:s', strtotime('+' . $_ENV['API_TOKEN_EXPIRATION_MONTHS'] . 'months', time()));
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':teacherId' => $teacherId,
            ':token' => $this->api_token,
            ':expiresAt' => $this->duration,
        ]);

        return $this->api_token;
    }
}