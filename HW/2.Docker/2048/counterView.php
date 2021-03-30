<?php

$path = 'countlog.txt';

$file  = fopen( $path, 'r' );
$count = fgets( $file, 1000 );
fclose( $file );
echo "{$count} hits\n";
