<!--//date-->
<?php

date_default_timezone_set('UTC');


echo date("l");

echo date('l jS \of F Y h:i:s A');

echo "september 2, 2020 is on a " . date("l", mktime(0, 0, 0, 9, 2, 2020));

echo date(DATE_RFC2822);

echo date(DATE_ATOM, mktime(0, 0, 0, 9, 2, 2020));

?>
