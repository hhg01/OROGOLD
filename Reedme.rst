/**Base de Datos**/
LA base de datos esta guardada en orogold.sql puedes importarla y no olvides cambiar la configuración en
application/config/database.php
    
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'orogold',

/**Vistas**/
Se agregaron dos vistas en view/templates
    - Heater.php
    - Footer.php
con la finalidad de que sean reutilizables en distintas partes de la pagina
fuera de la carpeta templates se agregan los distintos cuerpos que se requieran respecto a las necesidades

/**Recursos**/
se creo la carpeta public/assets donde se aloja todos los recursos que se requieran para la pagina ya sea imagenes, 
archivos de estilos y js en sus respectivas carpetas para una buena estructura y facilidad de acceso a los archivos

/**Controlador y Modelo**/
para esta version solo se requirio de un controlador Homepage.php y un modelo Appointment.php
    - el controlador tiene dos metodos el index() que carga las vistas y saveAppointment()
      quien se encarga de obtener y verificar los correos, si es el caso guardar el correo
    - el modelo tiene dos metodo el getEmail() para verificar los correos existentes y setAppointment()
      el cual inserta la informacion del cliente