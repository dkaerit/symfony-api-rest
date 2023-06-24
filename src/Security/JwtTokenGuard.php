<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

class JwtTokenGuard extends AbstractGuardAuthenticator
{
    public function supports(Request $request)
    {
        // Verificar si la solicitud contiene un token JWT
        return $request->headers->has('Authorization') && preg_match('/^Bearer\s+(.*?)$/', $request->headers->get('Authorization'), $matches);
    }

    public function getCredentials(Request $request)
    {
        // Obtener el token JWT de la cabecera Authorization
        preg_match('/^Bearer\s+(.*?)$/', $request->headers->get('Authorization'), $matches);
        return $matches[1];
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        // Verificar y decodificar el token JWT
        try {
            $decodedToken = JWT::decode($credentials, $this->secretKey, ['HS256']);
            // Obtener el usuario en base a la información del token
            $user = $userProvider->loadUserByUsername($decodedToken->username);
            return $user;
        } catch (\Exception $e) {
            throw new CustomUserMessageAuthenticationException('Token JWT inválido.');
        }
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        // No se requiere verificación adicional en este caso
        return true;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        // Manejar la falla de autenticación, por ejemplo, retornar una respuesta de error
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        // No se requiere acción adicional en este caso
    }

    public function start(Request $request, AuthenticationException $authException = null)
    {
        // Manejar la falta de autenticación, por ejemplo, retornar una respuesta de error
    }

    public function supportsRememberMe()
    {
        // No se utiliza "recuérdame" en este caso
        return false;
    }
}
