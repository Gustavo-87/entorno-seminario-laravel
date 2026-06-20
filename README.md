# Entorno de Desarrollo - Seminario Laravel con Enfoque RAD

Repositorio de configuración inicial para el **Seminario Desarrollo de Aplicaciones Web en Laravel con Enfoque RAD**.

Este entorno fue configurado con **Ubuntu WSL**, **Docker Desktop**, **Docker Compose**, **Git** y **GitHub**. Permite ejecutar una aplicación PHP con Apache, una base de datos MariaDB y phpMyAdmin.

## Estudiante

**Gustavo Adolfo Piedrahita**

Repositorio público:

https://github.com/Gustavo-87/entorno-seminario-laravel

## Requisitos

* Ubuntu WSL
* Docker Desktop con integración WSL activa
* Git
* Docker Compose

Versiones verificadas:

* Docker version 29.5.2
* Git version 2.43.0
* Docker Compose version v5.1.3

## Estructura del proyecto

```text
entorno-seminario-laravel/
├── docker-compose.yml
├── Dockerfile
├── README.md
├── src/
│   └── index.php
└── evidencias/
    ├── Captura CONTENEDORES.png
    ├── Captura PHP INF).png
    └── Captura PHPMYADMIN.png
```

## Servicios configurados

| Servicio     | Contenedor           | Puerto |
| ------------ | -------------------- | ------ |
| PHP / Apache | seminario_php        | 8082   |
| phpMyAdmin   | seminario_phpmyadmin | 8083   |
| MariaDB      | seminario_mariadb    | 3307   |

Los puertos fueron modificados para evitar conflictos con otros proyectos trabajados durante el semestre.

## Clonar el repositorio

```bash
git clone https://github.com/Gustavo-87/entorno-seminario-laravel.git
cd entorno-seminario-laravel
```

## Levantar el entorno

```bash
docker compose up -d
```

## Verificar contenedores

```bash
docker ps
```

Deben aparecer activos:

* seminario_php
* seminario_phpmyadmin
* seminario_mariadb

## Acceso a PHP / Apache

Abrir en el navegador:

http://localhost:8082

Debe mostrarse la página de `phpinfo()`.

## Acceso a phpMyAdmin

Abrir en el navegador:

http://localhost:8083

Datos de conexión:

* Servidor: db
* Usuario: root
* Contraseña: root_password
* Base de datos: seminario_db

## Base de datos

Datos principales:

* Host interno Docker: db
* Puerto interno Docker: 3306
* Puerto local: 3307
* Base de datos: seminario_db
* Usuario root: root
* Contraseña root: root_password
* Usuario desarrollo: dev_user
* Contraseña desarrollo: dev_password

## Evidencias

### Contenedores activos

![Contenedores activos](src/contenedores.png)

### PHP funcionando con phpinfo()

![PHP Info](src/phpinfo.png)

### phpMyAdmin funcionando

![phpMyAdmin](src/phpmyadmin.png)

## Comandos útiles

Detener contenedores:

```bash
docker compose down
```

Levantar contenedores:

```bash
docker compose up -d
```

Reconstruir contenedores:

```bash
docker compose up -d --build
```

Ver estado:

```bash
docker compose ps
```

Ver logs:

```bash
docker compose logs
```

## Entrega

El repositorio fue publicado en GitHub con visibilidad pública. También se agregó al docente como colaborador, cumpliendo con lo solicitado en la guía del seminario.

## Conclusión

Se configuró correctamente el entorno inicial de desarrollo. Se verificó Docker, Git y Docker Compose; se levantaron los contenedores de PHP, MariaDB y phpMyAdmin; se ajustaron los puertos para evitar conflictos; se agregaron evidencias de funcionamiento y se publicó el repositorio en GitHub.

## Guía 2 - Introducción a PHP

En esta guía se desarrollaron ejercicios básicos de PHP dentro del entorno Docker configurado para el seminario de Laravel.

### Actividad 1: Variables y Strings

Se modificó el archivo `src/index.php` agregando las variables `$semestre` y `$materiaFavorita`, mostrando el mensaje solicitado en el navegador.

![Evidencia index.php](src/evidencia_index.png)

### Actividad 2: Arrays y Bucles

Se creó el archivo `src/array_demo.php`, donde se trabajó con arrays asociativos, recorrido con `foreach`, cálculo de total y cálculo de IVA del 19%.

![Evidencia array\_demo.php](src/evidencia_array_demo.png)

### Actividad 3: Condicionales y Funciones

Se creó el archivo `src/funciones.php`, incluyendo la función `esMayorDeEdad($edad)` y el recorrido de un array de edades para determinar si cada persona es mayor o menor de edad.

![Evidencia funciones.php](src/evidencia_funciones.png)

### Archivos desarrollados

* `src/index.php`
* `src/array_demo.php`
* `src/funciones.php`

### Actividad 4: Formularios GET y POST

Se creó el archivo `src/formulario.php`, implementando un formulario con método `POST`. El formulario captura nombre, correo electrónico y teléfono. Además, se agregó la validación para verificar que el teléfono no esté vacío y que sea numérico usando `is_numeric()`.

![Evidencia formulario.php](src/evidencia_formulario.png)

