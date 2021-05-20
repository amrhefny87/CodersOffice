El Consultorio Del Coder
========================

***

## Contexto del proyecto


## El Consultorio

Nos encontramos en una empresa de desarrollo y necesitamos una aplicación que permita pedir cita al CTO para resolver problemas técnicos de los equipos de desarrollo.

De momento vamos a desarrollar un producto mínimo viable (MVP). Empezaremos con un código spaguetti, en PHP e intentaremos llegar a una aplicación orientada a objetos usando el 
patrón MVC (Modelo, Vista, Controlador).


## Requisitos Funcionales


La aplicación constará de al menos 3 páginas
<ul>
<li>Una página para la lista con todas las citas previstas.</li>
<li>Una página con un formulario para crear una nueva cita.</li>
<li>Una página para editar una cita concreta.</li>
</ul>


## Páginas:

### Lista: Las citas beben aparecer por orden de creación con:
<ul>
<li>El nombre del coder o del equipo.</li>
<li>El tema de consulta</li>
<li>Fecha y hora de la creación de la cita</li>
<li>Las citas se podrán eliminar.</li>
<li>Podremos acceder a la edición de cada cita, y a la página de creación de una cita nueva.</li>
</ul>

### Crear nueva cita:
<ul>
<li>Formulario con los campos necesarios obligatorios</li>
<li>Botón para borrar los campos</li>
<li>Botón para cancelar y volver a la lista principal</li>
<li>Botón para enviar la información</li>
</ul>


### Editar cita:
<ul>
<li>Formulario con los campos necesarios obligatorios.</li>
<li>Los campos deben tener la información de la cita a editar</li>
<li>Boton cancelar, Botón de enviar</li>
</ul>


La aplicación deberá ser responsiva.


## Requisitos Técnicos:
<ul>
<li>Aplicación de tipo CRUD (Create, Read, Update, Delete)</li>
<li>Deberá ser Orientada a objetos con el patrón MVC</li>
<li>Deberá estar en un servidor gratuito en producción.</li>
<li>Se debe usar Git con buenas prácticas en los commits.</li>
<li>El repositorio debe contener un Readme con explicación del proyecto, y una explicación de cómo instalar o ejecutar la aplicación.</li>
</ul>


## Extras:
<ul>
<li>Añadir tests unitarios con PhpUnit.</li>
<li>Añadir Tests End2End con Selenium.</li>
</ul>


## Tecnologías:
<ul>
<li>Frontend: HTML, CSS, SCSS - Opcional: Framework de CSS.</li>
<li>Backend: PHP.</li>
<li>Bases de datos: MySQL.</li>
<li>No se pueden usar otras librerias o frameworks que los espicificados.</li>
</ul>


## Entrega:
<ul>
<li> Un link a un repositorio de github</li>
<li>Link a url del proyecto en producción</li>
<li>Presentación en diapositivas + Link</li>
<li>Demo y code review</li>
</ul>


## Core Skills:
<ul>
  <li>Semántica HTML</li>
  <li>Buenas Practicas en CSS, SCSS</li>
  <li>Capacidad de Abstración en clases y objetos.</li>
  <li>Buenas prácticas OOP - Encapsulación, Herencia.</li>
  <li>Patrones de diseño - Modelo Vista Controlador (MVC).</li>
  <li>Implementar la aplicación en un servidor en producción.</li>
  <li>Uso de Git.</li>
  <li>Desarrollo basado en historias de usuario y tareas (Kanban).</li>
  <li>Comunicación y autoevaluación.</li>
</ul>


***
***


## Requiered

- PHP 7.4
- Composer installed


## Install Project

1. Clone git https://github.com/DiversosFactoria5/elConsultorioDelCodersMVC.git
2. Crear una base de datos en phpMyAdmin en Local, con los credenciales - user : root, password : ""
3. Nombre de base de datos : consultant
4. Importar la tabla siguiente : https://github.com/DiversosFactoria5/elConsultorioDelCodersMVC/blob/main/src/ReadMe.MD/Database/consultant.sql


## Install

- composer install and/or composer update

## Run Tests

- vendor/bin/phpunit


***
***


# El Consultorio del Coder


## Comenzando 🚀

Dónde encontrar el Proyecyo en Producción:

https://el-consultorio-del-coder.herokuapp.com/

El hoster Heroku nos genera un error de conexiones simultaneas a nuestra base de datos SQL, que no hemos podido solucioanr en Heroku.


## Mockup de este proyecto 🛠️

Mockup de cómo pensábamos que deberían ser las pantallas y sus funcionalidades:

<p align="center"> 
  <img src="./img/README.md/mockupReadMe.JPG?raw=true" width=50%>
</p>


## Capturas Pantallas formato Móvil ⚙️

<p align="center"> 
  <img src="./img/README.md/landingPageReadMe.JPG?raw=true" width=25%>
  <img src="./img/README.md/Main1ReadMe.JPG?raw=true" width=25%>
  <img src="./img/README.md/Main2ReadMe.JPG?raw=true" width=25%>
  <img src="./img/README.md/endingPage1ReadMe.JPG?raw=true" width=25%>
  <img src="./img/README.md/endingPage2ReadMe.JPG?raw=true" width=25%>
</p>


## Capturas Pantallas formato Desktop ⚙️

<p align="center"> 
  <img src="./img/README.md/landingPageReadMeIpad.JPG?raw=true" width=40%>
  <img src="./img/README.md/Main1ReadMeIpad.JPG?raw=true" width=40%>
  <img src="./img/README.md/Main2ReadMeIpad.JPG?raw=true" width=40%>
  <img src="./img/README.md/endingPage1ReadMeIpad.JPG?raw=true" width=40%>
  <img src="./img/README.md/endingPage2ReadMeIpad.JPG?raw=true" width=40%>
</p>


## Herramientas usadas en este proyecto 🛠️
<ul>
  <li>Visual Studio Code</li>
  <li>Trello</li>
  <li>Figma</li>
  <li>Metodologías Ágiles</li>
  <li>Balsamiq</li>
  <li>Planning Poker</li>
  <li>GoogleDocs</li>
  <li>GoogleFonts</li>
  <li>Zoom</li>
  <li>MVC</li>
  <li>PDO</li>
  <li>HEROKU</li>
  <li>SQL</li>
  <li>PHPMyAdmin</li>
</ul>


## Licencias Utilizadas 🛠️

xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx


## Autores ✒️
<ul>
  <li>Amr</li>
  <li>Andrea</li>
  <li>Andres - Scrum Master</li>
  <li>Jael</li>
  <li>Jose Miguel - Product Owner</li>
  <li>Sergi</li>
</ul>

También pueden mirar la lista de todos los [contribuyentes](https://github.com/DiversosFactoria5/elConsultorioDelCodersMVC/graphs/contributors) quienes han participado en este proyecto.  


