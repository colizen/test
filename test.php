<?php
echo 'hello world';
header('Content-Type: text/json; charset=utf-8');
exit(json_encode(['sd'=>'sdsfds']));
