<?php
require_once()
switch ($view) {
    case "all":
        $Oscarrest = new OscarrestKezelo();
        $Oscarrest->getAllOscars();
        break;
    
    case "single";
        $Oscarrest= new OscarrestKezelo();
        $Oscarrest->getOscarsById($_GET["tid"]);
        break;

    default:
    $Oscarrest = new OscarrestKezelo();
}
?>