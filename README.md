![symfony cartel](https://github.com/dkaerit/symfony-api-rest/assets/24440929/0e28af89-cdce-4c92-acf9-bccca14ac3f6)

<p align="center">
    <img src="https://travis-ci.org/symfony/symfony.svg" alt="Build Status">
    <img src="https://img.shields.io/packagist/v/symfony/symfony" alt="Latest Stable Version">
    <img src="https://img.shields.io/github/commit-activity/y/dkaerit/symfony-api-rest?color=blueviolet">
    <img src="https://img.shields.io/github/downloads/dkaerit/symfony-api-rest/total?color=blueviolet">
    <img src="https://img.shields.io/badge/license-MIT-blueviolet" alt="License">
</p>


<p align="center">
    <img src="https://travis-ci.org/symfony/symfony.svg" alt="Build Status">
    <img src="https://img.shields.io/packagist/v/symfony/symfony" alt="Latest Stable Version">
    <img src="https://img.shields.io/github/commit-activity/y/dkaerit/symfony-api-rest?color=blueviolet">
    <img src="https://img.shields.io/github/downloads/dkaerit/symfony-api-rest/total?color=blueviolet">
    <img src="https://img.shields.io/badge/license-MIT-blueviolet" alt="License">
</p>

## Índice

1. [Descripción](#descripción)
2. [Requisitos previos](#requisitos-previos)
3. [Instalación](#instalación)
4. [Arrancar el servidor](#arrancar-el-servidor)
5. [Uso](#uso)
6. [Contribución](#contribución)
7. [Licencia](#licencia)

# 1. Descripción

Este es un proyecto de ejemplo desarrollado con Symfony, un framework de aplicaciones web en PHP. El proyecto implementa una API REST para la gestión de usuarios, incluyendo autenticación basada en tokens JWT.

# 2. Requisitos previos

- PHP >= 7.2
- Composer
- Opcionalmente, servidor web (Apache, Nginx, etc.)

# 3. Instalación

1. Clona el repositorio: `git clone https://github.com/dkaerit/symfony-api-rest.git`
2. Navega al directorio del proyecto: `cd symfony-api-rest`
3. Instala las dependencias: `composer install`
4. Configura las variables de entorno en el archivo `.env`
5. Si usas un servidor web como nginx: Configura tu servidor web para apuntar al directorio `public/` como el punto de entrada de la aplicación.

# 4. Arrancar el servidor

a) Usando symfony
```bash
symfony server:start
```

b) Usando php
```bash
php -S localhost:8000 -t public
```

c) Usando Docker y Nginx:
Asegúrate de tener Docker instalado en tu sistema.

```bash
docker build -t my-symfony-app .
docker run -d -p 8000:80 my-symfony-app
```

# 5. Uso
En la ruta "/" aparecerán los endpoints.

# 6. Contribución
Si deseas contribuir a este proyecto, siéntete libre de abrir un PR (Pull Request) con tus mejoras o correcciones.

Recuerda que estos son solo ejemplos de contenido y puedes personalizarlos según las necesidades y la estructura específica de tu proyecto. Además, asegúrate de proporcionar información adicional relevante, como requisitos adicionales, configuraciones especiales, bases de datos utilizadas, entre otros.
