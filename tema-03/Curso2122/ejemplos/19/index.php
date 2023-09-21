<?php
# Multidimensional de índices y subíndices asociativos
 $paises=[
    'España' =>
                ['capital'=>'Madrid','idioma'=>'Español','poblacion'=>46400000],
    'Francia' =>
                ['capital'=>'Paris','idioma'=>'Frances','poblacion'=>66415161],
    'Italia' =>
                ['capital'=>'Roma','idioma'=>'Italiano','poblacion'=>59801000]];

 echo $paises['España']['idioma']; // español

 echo "<ul>";
 foreach ($paises as $key => $pais) {
    echo "<li>";
    echo $key;
    echo ":";
    echo "<ul>";
    foreach ($pais as $key =>$campo) {
        echo "<li>";
        echo $key.": ".$campo;
        echo "</li>";
    }
    echo "</ul>";
    echo "</li>";
 }
 echo "</ul>";
 ?>
