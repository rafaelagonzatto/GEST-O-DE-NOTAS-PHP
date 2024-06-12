<?php

$db = new PDO(dsn: 'sqlite:gestao_notas.db', options:[
    PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,   
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
