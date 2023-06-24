<?php
require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Symfony\Component\Dotenv\Dotenv;

class AuthController
{
    private $secretKey;

    public function __construct()
    {
        $dotenv = new Dotenv();
        $dotenv->load(__DIR__ . '/.env');
        $this->secretKey = $_ENV['SECRET_KEY'];
    }

/**
     * @Route("/auth", methods={"POST"})
     * @param string $user El nombre de usuario
     * @param string $password La contraseña del usuario
     * @return string El token JWT generado
     */

    public function authenticate($user, $password)
    {
        $payload = [
            'user_id' => $user,
            'username' => $user,
            'role' => 'admin' // Asigna el rol correspondiente según la autenticación
        ];

        $jwt = JWT::encode($payload, $this->secretKey, 'HS256');

        return $jwt;
    }
}
