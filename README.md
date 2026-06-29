# TP Vistas Blade - Programación III

Proyecto Laravel 12 para la gestión de mascotas con sistema de layouts Blade.

## Funcionalidades

- CRUD de mascotas con paginación y búsqueda
- Layout principal con `@yield()` y herencia de vistas
- Estilos globales con CSS personalizado
- Iconos Font Awesome
- Mensajes de éxito estilizados

## Rutas

| Ruta | Descripción |
|------|-------------|
| `/` | Listado de mascotas (inicio) |
| `/mascotas` | Listado de mascotas |
| `/mascotas/crear` | Registrar nueva mascota |
| `/productos` | Listado de productos |
| `/contacto` | Formulario de contacto |
| `/nosotros` | Información del sitio |

## Instalación

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```
