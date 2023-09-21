<?php 

/* 
	Descripción: funciones Gestión Vehículos   
	Examen 


*/



 //Ordenar Array por Campos

 function array_sort_by(&$arrIni, $col, $order = SORT_ASC) 
{
    $arrAux = array();
    foreach ($arrIni as $key=> $row) 
    {
        $arrAux[$key] = is_object($row) ? $arrAux[$key] = $row->$col : $row[$col];
        $arrAux[$key] = strtolower($arrAux[$key]);
    }
    array_multisort($arrAux, $order, $arrIni);
}

?>
