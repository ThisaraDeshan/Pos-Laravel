<?php
$now = new DateTime("2010-07-28 01:11:50");
$ref = new DateTime("2010-07-30 05:56:40");
$diff = $now->diff($ref);

echo $diff;

?>