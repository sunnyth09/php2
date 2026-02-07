<?php
return [
    'host' => getenv('HOST') ?: '127.0.0.1',
    'database' => getenv('DATABASE') ?: 'php2',
    'username' => getenv('USERNAME') ?: 'root',
    'password' => getenv('PASSWORD') ?: ''
];
