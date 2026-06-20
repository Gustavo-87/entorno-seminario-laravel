# Entorno de Desarrollo - Seminario Laravel con Enfoque RAD

Este repositorio contiene la configuración inicial del entorno de desarrollo para el **Seminario Desarrollo de Aplicaciones Web en Laravel con Enfoque RAD**.

El entorno fue configurado usando **Ubuntu WSL**, **Docker Desktop**, **Docker Compose**, **Git** y **GitHub**. Permite ejecutar una aplicación PHP con Apache, una base de datos MariaDB y phpMyAdmin como herramienta gráfica para la administración de la base de datos.

---

## Información del estudiante

**Estudiante:** Gustavo Adolfo Piedrahita
**Repositorio:** https://github.com/Gustavo-87/entorno-seminario-laravel

---

## Objetivo

Configurar un entorno de desarrollo local basado en contenedores Docker para trabajar aplicaciones web en PHP y posteriormente avanzar en el desarrollo con Laravel.

Este entorno permite tener separados los servicios principales del proyecto:

* Servidor web con PHP y Apache.
* Base de datos MariaDB.
* phpMyAdmin para administrar la base de datos desde el navegador.

---

## Requisitos previos

Para ejecutar este proyecto se requiere tener instalado:

* Ubuntu WSL.
* Docker Desktop.
* Integración de Docker con WSL habilitada.
* Git.
* Docker Compose.

Las herramientas fueron verificadas desde Ubuntu WSL con las siguientes versiones:

```bash
Docker version 29.5.2
git version 2.43.0
Docker Compose version v5.1.3
```

---

## Estructura del proyecto

La estructura principal del repositorio es la siguiente:

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

---

## Servicios configurados

El archivo `docker-compose.yml` configura los siguientes servicios:

| Servicio     | Contenedor           | Puerto local | Descripción                               |
| ------------ | -------------------- | ------------ | ----------------------------------------- |
| PHP / Apache | seminario_php        | 8082         | Servidor web para ejecutar PHP            |
| MariaDB      | seminario_mariadb    | 3307         | Base de datos del proyecto                |
| phpMyAdmin   | seminario_phpmyadmin | 8083         | Interfaz gráfica para administrar MariaDB |

Los puertos fueron modificados para evitar conflictos con otros proyectos desarrollados durante el semestre.

---

## Clonar el repositorio

Para clonar este repositorio se debe ejecutar:

```bash
git clone https://github.com/Gustavo-87/entorno-seminario-laravel.git
cd entorno-seminario-laravel
```

---

## Levantar el entorno

Desde la raíz del proyecto, donde se encuentra el archivo `docker-compose.yml`, ejecutar:

```bash
docker compose up -d
```

Este comando descarga o construye las imágenes necesarias y levanta los contenedores en segundo plano.

---

## Verificar contenedores activos

Para validar que los contenedores estén funcionando correctamente, ejecutar:

```bash
docker ps
```

Deben aparecer activos los siguientes contenedores:

```text
seminario_php
seminario_phpmyadmin
seminario_mariadb
```

---

## Acceso a la aplicación PHP

Para verificar el funcionamiento de PHP y Apache, abrir en el navegador:

```text
http://localhost:8082
```

En esta ruta debe visualizarse la página generada por `phpinfo()`, lo cual confirma que PHP y Apache están funcionando correctamente dentro del contenedor.

---

## Acceso a phpMyAdmin

Para ingresar a phpMyAdmin, abrir en el navegador:

```text
http://localhost:8083
```

Datos de conexión:

```text
Servidor: db
Usuario: root
Contraseña: root_password
Base de datos: seminario_db
```

La base de datos `seminario_db` fue creada automáticamente por la configuración del servicio MariaDB.

---

## Base de datos

Los datos principales de conexión a la base de datos son:

```text
Host: db
Puerto interno: 3306
Puerto local: 3307
Base de datos: seminario_db
Usuario root: root
Contraseña root: root_password
Usuario de desarrollo: dev_user
Contraseña de desarrollo: dev_password
```

Dentro de Docker, los servicios se comunican usando el nombre del servicio. Por eso, desde phpMyAdmin o desde una aplicación dentro de la red de Docker, el host de la base de datos es:

```text
db
```

---

## Evidencias de funcionamiento

A continuación se presentan las evidencias de la configuración inicial del entorno de desarrollo.

### 1. Contenedores activos en Docker

La siguiente evidencia muestra los contenedores del entorno ejecutándose correctamente:

![Contenedores activos](evidencias/Captura%20CONTENEDORES.png)

---

### 2. Verificación de PHP con phpinfo()

La siguiente evidencia muestra la página `phpinfo()` cargando correctamente desde el navegador en el puerto 8082:

![PHP Info](evidencias/Captura%20PHP%20INF%29.png)

---

### 3. Verificación de phpMyAdmin

La siguiente evidencia muestra phpMyAdmin funcionando correctamente y la base de datos `seminario_db` disponible:

![phpMyAdmin](evidencias/Captura%20PHPMYADMIN.png)

---

## Comandos útiles

Detener los contenedores:

```bash
docker compose down
```

Levantar nuevamente los contenedores:

```bash
docker compose up -d
```

Ver los contenedores activos:

```bash
docker ps
```

Ver el estado de los servicios del proyecto:

```bash
docker compose ps
```

Ver logs de los servicios:

```bash
docker compose logs
```

Reconstruir los contenedores si se realizan cambios en la configuración:

```bash
docker compose up -d --build
```

---

## Configuración del repositorio en GitHub

El repositorio fue subido a una cuenta personal de GitHub con visibilidad pública.

Repositorio:

```text
https://github.com/Gustavo-87/entorno-seminario-laravel
```

También se agregó al docente como colaborador del repositorio, de acuerdo con el entregable solicitado en la guía del seminario.

---

## Conclusión

Se configuró correctamente el entorno inicial de desarrollo para el seminario. Se verificó la instalación de Docker, Git y Docker Compose; se clonó y configuró el repositorio; se ajustaron los puertos para evitar conflictos con otros proyectos; se levantaron los contenedores de PHP, MariaDB y phpMyAdmin; y se comprobó el funcionamiento del entorno desde el navegador.

Finalmente, el repositorio fue publicado en GitHub, se agregaron las evidencias de funcionamiento y se invitó al docente como colaborador.
