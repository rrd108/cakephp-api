<?php
return [
  'Cors' => [
    'AllowOrigin' => '*',
    'AllowMethods' => ['GET', 'POST', 'OPTIONS'],
    'AllowHeaders' => ['Token', 'Content-Type'],
    'MaxAge' => 300,
  ]
];