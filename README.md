El Consultorio del Coder - MVC
========================

***

## Contexto del proyecto


## El Consultorio

Nos encontramos en una empresa de desarrollo y necesitamos una aplicación que permita pedir cita al CTO para resolver problemas técnicos de los equipos de desarrollo.

De momento vamos a desarrollar un producto mínimo viable (MVP) en PHP, e intentaremos llegar a una aplicación orientada a objetos usando el patrón MVC (Modelo-Vista-Controlador).


## Requisitos funcionales


La aplicación constará de al menos 3 páginas:
<ul>
<li>Una página para la lista con todas las citas previstas.</li>
<li>Una página con un formulario para crear una nueva cita.</li>
<li>Una página para editar una cita concreta.</li>
</ul>


## Páginas:

### Lista: Las citas beben aparecer por orden de creación con:
<ul>
<li>El nombre del coder o del equipo.</li>
<li>El tema de consulta.</li>
<li>La fecha la y hora de la creación de la cita.</li>
<li>Las citas se podrán eliminar.</li>
<li>Podremos acceder a la edición de cada cita, y a la página de creación de una cita nueva.</li>
</ul>

### Crear nueva cita:
<ul>
<li>Formulario con los campos necesarios obligatorios.</li>
<li>Botón para borrar los campos.</li>
<li>Botón para cancelar y volver a la lista principal.</li>
<li>Botón para enviar la información.</li>
</ul>


### Editar cita:
<ul>
<li>Formulario con los campos necesarios obligatorios.</li>
<li>Los campos deben contener la información de la cita a editar.</li>
<li>Boton para cancelar, botón para enviar.</li>
</ul>


La aplicación deberá ser responsiva.


## Requisitos técnicos:
<ul>
<li>Aplicación de tipo CRUD (Create, Read, Update, Delete).</li>
<li>Deberá ser orientada a objetos con el patrón MVC.</li>
<li>Deberá alojarse en un servidor gratuito en producción.</li>
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
<li>No se pueden usar otras librerías o frameworks más allá de los espicificados.</li>
</ul>


## Entrega:
<ul>
<li> Un link a un repositorio de github.</li>
<li>Un link a la URL del proyecto en producción.</li>
<li>Presentación en diapositivas + link.</li>
<li>Demo y code review.</li>
</ul>


## Core skills:
<ul>
  <li>Semántica HTML.</li>
  <li>Buenas prácticas en CSS, SCSS.</li>
  <li>Capacidad de abstración en clases y objetos.</li>
  <li>Buenas prácticas OOP - Encapsulación, herencia.</li>
  <li>Patrones de diseño - Modelo-Vista-Controlador (MVC).</li>
  <li>Implementar la aplicación en un servidor en producción.</li>
  <li>Uso de Git.</li>
  <li>Desarrollo basado en historias de usuario y tareas (Kanban).</li>
  <li>Comunicación y autoevaluación.</li>
</ul>


***
***


## Requiered

- PHP 7.4 min
- Composer installed


## Install Project

1. Clone git https://github.com/DiversosFactoria5/elConsultorioDelCodersMVC.git
2. Crear una base de datos en phpMyAdmin en local, con los credenciales - user : root, password : ""
3. Nombre de base de datos : consultant
4. Importar la tabla siguiente : https://github.com/DiversosFactoria5/elConsultorioDelCodersMVC/blob/main/src/ReadMe.md/Database/consultant.sql


## Install

- composer install and/or composer update

## Run tests

- vendor/bin/phpunit 
- (1 test, 2 assertions)


***
***


# El Consultorio del Coder - MVC


## 🚀 Comenzando

Dónde encontrar el proyecto en producción:

https://el-consultorio-del-coder.herokuapp.com/

El hoster Heroku nos genera un error de conexiones simultáneas a nuestra base de datos SQL, que no hemos podido solucionar en Heroku.


## 🛠️ Mockup de este proyecto

Mockup de cómo pensábamos que deberían ser las pantallas y sus funcionalidades:

<p align="center"> 
  <img src="./src/ReadMe.md/mockup/mockupMobil.PNG?raw=true" width=50%>
  <img src="./src/ReadMe.md/mockup/mockupTablet.PNG?raw=true" width=50%>
  <img src="./src/ReadMe.md/mockup/mockupDesktop.PNG?raw=true" width=50%>
</p>


## ⚙️ Capturas pantalla formato móvil 

<p align="center"> 
<img src="./src/ReadMe.md/screenshotMobil/read.PNG?raw=true" width=25%>
<img src="./src/ReadMe.md/screenshotMobil/creat.PNG?raw=true" width=25%>
<img src="./src/ReadMe.md/screenshotMobil/edit.PNG?raw=true" width=25%>
</p>


## ⚙️ Capturas pantalla formato desktop

<p align="center"> 
<img src="./src/ReadMe.md/screenshotDesktop/read.PNG?raw=true" width=50%>
<img src="./src/ReadMe.md/screenshotDesktop/creat.PNG?raw=true" width=50%>
<img src="./src/ReadMe.md/screenshotDesktop/edit.PNG?raw=true" width=50%>
</p>


## 🛠️ Herramientas usadas en este proyecto
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
  <li>Bootstrap</li>
  <li>PDO</li>
  <li>Heroku</li>
  <li>SQL</li>
  <li>PHPMyAdmin</li>
</ul>


## ✒️ Autores 
<ul>
  <li>Amr</li>
  <li>Andrea</li>
  <li>Andrés (Scrum Master)</li>
  <li>Jael</li>
  <li>Jose Miguel (Product Owner)</li>
  <li>Sergi</li>
</ul>

También pueden mirar la lista de todos los [contribuyentes](https://github.com/DiversosFactoria5/elConsultorioDelCodersMVC/graphs/contributors) quienes han participado en este proyecto.  


