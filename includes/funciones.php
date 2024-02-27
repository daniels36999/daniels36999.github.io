<?php

require 'app.php';
include ICON_URL;

function incluirTemplate( string  $nombre, bool $inicio = false ) {
    include TEMPLATES_URL."/"."$nombre".".php"; 
}

function incluirIcono(string  $icon_name = 'error') {
    return get_icon($icon_name);
}

