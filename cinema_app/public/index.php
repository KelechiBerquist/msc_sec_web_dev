<?php

include __DIR__ . '/routers/Router.php';


session_start();


$repo = require_once __DIR__ . '/repository/Repository.php';

// Routing methods
Router::route();
