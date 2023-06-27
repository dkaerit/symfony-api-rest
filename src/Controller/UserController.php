<?php namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/users/read/{id}", name="user_read", methods={"GET"})
     * @param int $id El ID del usuario a leer
     * @return Response La respuesta HTTP con los detalles del usuario
     */
    public function read($id)
    {
        // Obtener los datos del usuario (simulado)
        $user = [
            'id' => $id,
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ];

        // Devolver los detalles del usuario como una respuesta JSON
        return $this->json($user);
    }

    /**
     * @Route("/users/read", name="users_read", methods={"GET"})
     * @return Response La respuesta HTTP con los detalles de todos los usuarios
     */
    public function readAll()
    {
        // Obtener todos los usuarios (simulado)
        $users = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
            ],
        ];

        // Devolver los detalles de todos los usuarios como una respuesta JSON
        return $this->json($users);
    }

    /**
     * @Route("/users/update", name="user_update", methods={"POST"})
     * @param Request $request La solicitud HTTP con los datos de actualización del usuario
     * @return Response La respuesta HTTP indicando el resultado de la actualización
     */
    public function update(Request $request)
    {
        // Obtener los datos enviados en la solicitud
        $data = json_decode($request->getContent(), true);

        // Realizar la lógica de actualización (simulado)
        // ...

        // Devolver una respuesta de éxito
        return new Response('Usuario actualizado correctamente');
    }

    /**
     * @Route("/users/delete", name="user_delete", methods={"POST"})
     * @param Request $request La solicitud HTTP con los datos de eliminación del usuario
     * @return Response La respuesta HTTP indicando el resultado de la eliminación
     */
    public function delete(Request $request)
    {
        // Obtener los datos enviados en la solicitud
        $data = json_decode($request->getContent(), true);

        // Realizar la lógica de eliminación (simulado)
        // ...

        // Devolver una respuesta de éxito
        return new Response('Usuario eliminado correctamente');
    }

    /**
     * @Route("/users/create", name="user_create", methods={"POST"})
     * @param Request $request La solicitud HTTP con los datos de creación del usuario
     * @return Response La respuesta HTTP indicando el resultado de la creación
     */
    public function create(Request $request)
    {
        // Obtener los datos enviados en la solicitud
        $data = json_decode($request->getContent(), true);

        // Realizar la lógica de creación (simulado)
        // ...

        // Devolver una respuesta de éxito
        return new Response('Usuario creado correctamente');
    }
}
