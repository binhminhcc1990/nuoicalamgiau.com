<?php

$directorio="list/epay/";
if ($gestor = opendir($directorio))
   
{
    $list=array();
    while (false !== ($arch = readdir($gestor)))
    {
        if ($arch != "." && $arch != "..")
        {
            $list[]=$arch;
        }
    }
    sort($list);
        foreach($list as $fileName)
        {   

        include_once("list/epay/" .$fileName);

        }
    closedir($gestor);


}
?>
