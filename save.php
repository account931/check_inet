<?php

 $fn = $_REQUEST['fn'];
 $data = $_REQUEST['data'];

 file_put_contents("path/$fn", $data);
?>