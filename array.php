<?php
// array de tipo escalar 
$estudiantes = ["Carlos", "José","Vanessa","Katy",];
 
#arrar de tipo asociativo
$tutor=[
    "nombre"=>"Calors",
    "apellido"=>"Alfaro",
    "edad"=>27
];
        // $tutor["edad"]=19;
        // echo $tutor["edad"]

#Array de multiples dimenciones
$tutor_2=[
    "nombre"=>"Calors",
    "apellido"=>"Alfaro",
    "edad"=>27,
    "cursos"=>["php","Python","Css"]
];
    // $tutor_2["pais"]="El Salvador";
    // echo $tutor_2["pais"];

echo count($tutor_2, COUNT_RECURSIVE);
?>