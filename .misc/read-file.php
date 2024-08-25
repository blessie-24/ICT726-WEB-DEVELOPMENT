<?php


header('Content-Type: text/plain');

$filePath = $_POST['filePath'];
readfile("../$filePath");