<?php

return [
    'url' => env('PRESTASHOP_URL', 'http://prestashop.url'),
    'token' => env('PRESTASHOP_TOKEN', ''),
    'debug' => env('PRESTASHOP_DEBUG', env('APP_DEBUG', false))
];
