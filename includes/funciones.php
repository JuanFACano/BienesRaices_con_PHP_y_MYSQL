<?php

require 'app.php';

function incluirTemplate(string $page, bool $inicio = false)
{
 include TEMPLATES_URL . "/{$page}.php";
}
