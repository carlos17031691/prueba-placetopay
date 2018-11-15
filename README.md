# prueba-placetopay
<p align="justify">
                        El propósito de esta evaluación es verificar las habilidades para entender un
                        problema a partir de una documentación estándar.
                    </p>
                    <p align="justify"> 
                        Se requiere desarrollar una conexión en PHP utilizando el WebServices de PSE
                        descrito en el archivo anexo. Esta integración debe permitir realizar un pago básico
                        desde internet.
                    </p>
                    <p align="justify"> 
                        Mediante un formulario debe suministrar los datos necesarios para realizar el pago
                        (revisar parámetros de entrada del servicio). 
                    </p>
                    <p align="justify"> 
                        Debe mantener un registro de la
                        respuesta generada por el WebService, determinando su estado actual (Aprobado,
                        pendiente, fallido o rechazado). Listar cada intento de pago con el estado en que se
                        encuentre.
                    </p>

                    
                    Tener en cuenta:
                        -Uso de Programación Orientada a Objetos
                        -Conexión por SOAP (con SoapClient)
                        -Uso de cache (Cache Interface)
                        -Separación de capas (mínimo MVC)
                        -Uso de autoload (PSR 4)
                        -Documentación/README
                        -Formato de código (PSR 1 y 2)
                        -Manejo de variables de entorno para los datos de conexión (con .env o
                            config.php o similares)
                        -Uso de migraciones
                        -Aplicar control de versiones (commits, descripciones, organización,
                            continuidad)
                        -Aplicar pruebas unitarias
                        -La información suministrada es confidencial y no debe ser replicada o
                            compartida para usos diferentes a los de este ejercicio.
                   
Realizado bajo el Framework Laravel 5.4, acontinuacion se detallan los pasos para la instacion y usa del desarrollo:

- Clonar el repositorio en la carpeta de su preferencia
- Ejecutar "Composer Update"
- Crear Base de Datos
- Configurar .env de acuerdo a la informacion de la base de datos MySql
- Ejecutar "php artisan migrate" en la raiz del proyecto
- Ejecutar "php artisan serve" en la raiz del proyecto
- Acceder a "http://localhost:8000"
- Registre un Usuario para ingresar al sistema
- Ingrese al sistema con el usuario registrado
- Registre un Cliente: Clentes -> Agregar Cliente
- Registre el Pago: Pagos -> Agregar Pago.
- Ingrese los datos solicitados por el formulario.
