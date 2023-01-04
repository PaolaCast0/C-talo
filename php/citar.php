<?php

//APA

// Función para crear una cita APA
function crearCitaAPA($nombre, $apellido, $year, $titulo, $editorial) {
  return "$apellido. ($year).";
}

// Función para crear una referencia bibliográfica APA
function crearReferenciaAPA($nombre, $apellido, $year, $titulo, $editorial) {
    
    $inicialNombre = substr($nombre, 0, 1); // Obtiene la primera letra del nombre

    return "$apellido, $inicialNombre. ($year). <em>$titulo</em>. $editorial.";
}

// Función para crear una Tesis APA
function tesisAPA($nombre, $apellido, $year, $titulotesis, $tipodetesis, $institucion) {
    
  $inicialNombre = substr($nombre, 0, 1); // Obtiene la primera letra del nombre

  return "$apellido, $inicialNombre. ($year). <em>$titulotesis</em>. [$tipodetesis.] .$institucion.";
}

// Función para crear Periodico APA
function periodicoAPA($nombre, $apellido, $fecha, $titulo, $periodico) {
    
  $inicialNombre = substr($nombre, 0, 1); // Obtiene la primera letra del nombre

  return "$apellido, $inicialNombre. ($fecha). $titulo. <em>$periodico.</em>";
}

// Función para crear Periodico en linea APA
function periodico_onlineAPA($nombre, $apellido, $fecha, $titulo, $periodico, $link) {
    
  $inicialNombre = substr($nombre, 0, 1); // Obtiene la primera letra del nombre

  return "$apellido, $inicialNombre. ($fecha). $titulo. <em>$periodico.</em> .$link.";
}

// Función para crear Web APA
function webAPA($nombre, $apellido, $year, $titulo, $editorial) {
    
  $inicialNombre = substr($nombre, 0, 1); // Obtiene la primera letra del nombre

  return "$apellido, $inicialNombre. ($year). <em>$titulo</em>. $editorial.";
}

//Ejemplo
//echo crearCitaAPA($nombre, $apellido, $year, $titulo, $editorial);
//echo "\n";
//echo "<br>";
//echo crearReferenciaAPA($nombre, $apellido, $year, $titulo, $editorial);


//Chicago

?>