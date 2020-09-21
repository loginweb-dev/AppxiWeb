<h1 align="center">APPSI</h1>

## Acerca de APPSI

## Características

- **Administración de Clientes.**
- **Seguimiento de tramos recorridos por los vehiculos.**
- **Administración de precios por kilometro o millas.**
- **Administración de metodos de pago cash o por cuenta bancaria.**
- **Administracion de Conductores de vehiculos.**

## Componentes

APPSI está desarrollado bajo el lenguaje PHP, pero también utiliza librerias basadas en el lenguaje JavaScript. Las herramientas sobre las que está desarrollado APPSI son:

- **[Laravel](https://vehikl.com/)**
- **[Admin Voyager](https://tighten.co)**
- **[laravel-dompdf](https://github.com/barryvdh/laravel-dompdf)**
- **[Laravel-Excel](https://github.com/Maatwebsite/Laravel-Excel)**
- **[Intervention Image](http://image.intervention.io/)**
- **[simple-qrcode](https://github.com/SimpleSoftwareIO/simple-qrcode)**
- **[Numeros-en-Letras](https://github.com/villca/Numeros-en-Letras)**
- **[barcode](https://github.com/milon/barcode)**
- **[laravel-mix](https://laravel.com/docs/7.x/mix)**
- **[Laravel Socialite](https://laravel.com/docs/7.x/socialite)**

## Instalación

Para la instalación de APPSI se deben seguir algunos pasos que se describen a continuación.

- *Clonar el proyecto desde le repositorio*
    ```bash
    git clone https://github.com/loginweb-dev/appxi.git && cd appsi
    ```
- *Crear la base de datos "appxi"*
- *Copiar el archivo .env y editar los datos de usuario del gestos de base de datos*
    ```bash
    cp .env.example .env && nano .env
    ```
- *Instalar dependencias de composer*
    ```bash
    composer install
    ```
Nota: Antes de instalar las dependencias debes asegurarte que tu entorno cumple con los requerimientos necesarios en **[Requerimientos Laravel]
- PHP >= 7.2.5
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

- *Instalar APPXI*
    ```bash
    php artisan appxi:install
    ```
- *Luego de instalar todas las dependias se recomienda ejecutar el siguiente comando*
    ```bash
    composer dump-autoload
    ```

- *Dar permiso al directorio storage*
    ```bash
    chmod -R 777 storage bootstrap/cache
    ```
