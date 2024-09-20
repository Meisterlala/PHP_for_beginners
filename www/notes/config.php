<?php

$default_config = [
    'DATABASE' =>
        [
            'host' => 'localhost',
            'port' => 5432,
            'dbname' => '',
            'user' => '',
            'password' => ''

        ]
];

foreach (array_keys($default_config) as $key) {
    foreach (array_keys($default_config[$key]) as $subkey) {
        $keyname = "{$key}_{$subkey}";
        if (array_key_exists($keyname, $_ENV)) {
            $default_config[$key][$subkey] = $_ENV[$keyname];
        }
    }
}

return $default_config;