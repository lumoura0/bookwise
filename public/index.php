<?php
require "../models/Livro.php";
require "../models/Usuario.php";
require "../models/Avaliacao.php";

session_start();

require '../Flash.php';
require "../functions.php";
$config = require '../config.php';
require "../database.php";
require "../Validacao.php";
require "../routes.php";
