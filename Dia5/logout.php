<?php

session_start();
session_destroy();
header("Location: formulario.html");//use for the redirection to some page

?>