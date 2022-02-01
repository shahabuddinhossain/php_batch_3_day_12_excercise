<?php

require_once 'vendor/autoload.php';
use App\classes\Series;

if ( isset($_POST['submit']) )
{
    $series = new Series($_POST);
    $result = $series->series();
    include 'index.php';
} else
{
    header("Location: index.php");
}