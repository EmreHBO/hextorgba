# Hex to RGBA
This tool converts hex and alpha code to rgba

## Run on docker quickly
`docker run -d -p 80:80 --name hex-app -v "$PWD":/var/www/html php:7.4-apache`

> **Note:** If you use **Windows**, please use **${PWD}** instead of **"$PWD"**

## Run tests directly
`docker exec -it hex-app php phpunit tests`