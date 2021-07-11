<?php
return [
  'Cors' => [
    'AllowOrigin' => true, // accept all origin
    'AllowMethods' => ['GET', 'POST'],
    'AllowHeaders' => ['Token', 'Content-Type'],
    'MaxAge' => 300,
  ]
];
