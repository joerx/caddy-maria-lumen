<pre>
<?php

$mariaDbPort = parse_url(getenv('MARIADB_PORT'));
var_dump($mariaDbPort);
