<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/", name="api_index")
     * @return Response La respuesta HTTP que muestra los endpoints de la API
     */
    public function index(): Response
    {
        // Obtener la lista de endpoints de la API
        $endpoints = [
            '/api/users/read/{id}',
            '/api/users/read',
            '/api/users/update',
            '/api/users/delete',
            '/api/users/create',
            // Agrega aquí otros endpoints de la API
        ];

        // Devolver la lista de endpoints como una respuesta JSON
        return $this->json($endpoints);
    }
}
