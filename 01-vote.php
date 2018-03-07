<?php
$cnt = file_get_contents('./vote.txt');

$cnt += 1;

file_put_contents('./vote.txt',$cnt);

header('HTTP/1.1 204 No Content');