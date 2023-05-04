<?php
/**
 * Script práctica-DELGADO.php
 * 
 * Descripción: Este script contiene dos funciones para el ejercicio 1.2.
 * 
 * @author: Rafael Delgado Garcia
 * @version: 1.0
 * 
 * @package    practica-DELGADO
 * @subpackage CalculosRectangulo
 */

/**
 * Función para calcular el área de un rectángulo.
 * 
 * @param float $base La medida de la base del rectángulo.
 * @param float $altura La medida de la altura del rectángulo.
 * 
 * @return float El área del rectángulo.
 */
function calcular_area_rectangulo($base, $altura) {
    $area = $base * $altura;
    return $area;
}

/**
 * Función para calcular el perímetro de un rectángulo.
 * 
 * @param float $base La medida de la base del rectángulo.
 * @param float $altura La medida de la altura del rectángulo.
 * 
 * @return float El perímetro del rectángulo.
 */
function calcular_perimetro_rectangulo($base, $altura) {
    $perimetro = 2 * ($base + $altura);
    return $perimetro;
}

/**
 * Este es un comentario adicional que solo se verá en la documentación.
 * 
 * @internal Este comentario es solo para desarrolladores y no debe ser incluido en la documentación final.
 */
?>
