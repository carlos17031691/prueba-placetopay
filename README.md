<p align="center"><img src="https://media.licdn.com/dms/image/C5603AQFKjl8tLpetdA/profile-displayphoto-shrink_200_200/0?e=1547683200&v=beta&t=ZJ3WzLM6NKE_R2x5xXQn4FvEfA_e_MCWLTuRDtFK5NA"></p>

## Sobre el Proyecto

<p align="justify">El propósito de esta evaluación es verificar las habilidades para entender un problema a partir de una documentación estándar.</p>
<p align="justify">Se requiere desarrollar una conexión en PHP utilizando el WebServices de PSE descrito en el archivo anexo. Esta integración debe permitir realizar un pago básico desde internet.</p>
<p align="justify">Mediante un formulario debe suministrar los datos necesarios para realizar el pago (revisar parámetros de entrada del servicio).</p>
<p align="justify">Debe mantener un registro de la respuesta generada por el WebService, determinando su estado actual (Aprobado, pendiente, fallido o rechazado). Listar cada intento de pago con el estado en que se encuentre.</p>

## Tener en cuenta
- Uso de Programación Orientada a Objetos.
- Conexión por SOAP (con SoapClient).
- Uso de cache (Cache Interface).
- Separación de capas (mínimo MVC).
- Uso de autoload (PSR 4).
- Documentación/README.
- Formato de código (PSR 1 y 2).
- Manejo de variables de entorno para los datos de conexión (con .env o config.php o similares).
- Uso de migraciones.
- Aplicar control de versiones (commits, descripciones, organización, continuidad).
- Aplicar pruebas unitarias.
- La información suministrada es confidencial y no debe ser replicada o compartida para usos diferentes a los de este ejercicio.


## Instalación y Configuración

El desarrollo esta basado en el Framework Laravel. Para mayor información puede consultar la documentación oficial:  [Laravel documentation](https://laravel.com/docs). 

- Descargar o Clonar el repositorio en la ubicacion de su preferencia
- Se debe actualizar las dependencias con Composer ejecutando el siguiente comando en la raiz del proyecto: "composer update".
- Configurar el archivo .env para la correcta conexion a la base de datos mysql.
- Ejecutar la migracion de las tablas y sus relaciones con "php artisan migrate", previamente se debe haber creado la base de datos y configurar los datos de conexion en el archivo .env.
- Ejecutar el comando "php artisan serve" para levantar el servidor web de Laravel.

## Acceso y Uso

Si los pasos anteriores ha sido realizados correctamente y sin errores, podemos acceder al proyecto el la siguiente direccion: "http://localhost:8000".

Seguidamente:

- Registrar un Usuario para acceder al proyecto
- Iniciar sesión con le Usuario previamente registrado.
- Crear Clientes, este paso es necesario para poder realizar los pagos de prueba.
- Crear Pagos, ingresamos la información solicitada por el formulario y registramos el pago.

## Caracteristicas y Funciones

- Modulo simple para administrar Información de los clientes
- Modulo simple para el Proceso y Verificación de los Pagos Registrados.
- Detalles de Pagos.

## Agradecimiento

Muchas gracias a la empresa PlacetoPay por permitirme participar en su proceso de selección, espero haber cumplido con todos los requerimiento. 
