<?php

$recepient = $email
$sitename = "Agrieye";

$name = trim($_POST["name"]);
$text = trim($_POST["message"]);
$message = "Имя: $name \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");