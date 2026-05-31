# Portafolio Personal - Matías Morales

Portafolio web personal desarrollado en PHP con panel de administración.

## Tecnologías
- PHP (PDO)
- MySQL
- HTML5 / CSS3
- JavaScript (Vanilla)

## Estructura del proyecto
```
portafolio_matias/
├── api/               # Endpoints de la API REST
│   ├── biografia.php
│   ├── habilidades.php
│   ├── mensajes.php
│   ├── proyectos.php
│   ├── tecnologias.php
│   └── usuarios.php
├── assets/
│   ├── css/           # Estilos
│   └── js/
│       ├── admin/     # Scripts del panel de administración
│       └── main.js    # Script principal
├── conexion.example.php  # Plantilla de configuración de BD
├── dashboard.php      # Panel de administración
├── db.php             # Configuración de base de datos
├── enviar_mensaje.php # Formulario de contacto
├── index.php          # Página principal
└── login.php          # Autenticación
```

## Instalación
1. Clona el repositorio
2. Copia `conexion.example.php` como `conexion.php`
3. Edita `conexion.php` con tus credenciales de base de datos
4. Importa la base de datos e inicia el servidor

## Funcionalidades
- Sección de biografía dinámica
- Proyectos y habilidades gestionables desde el panel
- Panel de administración con login
- Formulario de contacto
- API REST para cada sección
