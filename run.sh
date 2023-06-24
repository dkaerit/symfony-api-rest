#!/bin/bash

# Construye la imagen Docker
docker build -t symfony_backtest .

# Crea una red Docker para la comunicación entre contenedores
docker network create symfony_network

# Ejecuta el contenedor con el volumen montado
docker run -d --name symfony_backtest_container \
  --network symfony_network \
  -p 9000:9000 \
  -e APP_ENV=prod \
  -e APP_SECRET=your_secret_key \
  -v $(pwd):/var/www/html \
  symfony_backtest

# Muestra el estado del contenedor
docker ps
