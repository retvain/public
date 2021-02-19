<?php

function template($name, $vars) {

    extract($vars);

    include ("template/$name.php");

}
