<?php

date_default_timezone_set('Asia/Calcutta');
echo "Current time in India: ".date('d.m.y H:i:s A');
echo '<br>';

date_default_timezone_set('Europe/Berlin');
echo "Current time in Europe: ".date('d.m.y H:i:s A');
echo '<br>';

date_default_timezone_set('Canada/Pacific');
echo "Current time in Canada: ".date('d.m.y H:i:s A');
echo '<br>';



?>