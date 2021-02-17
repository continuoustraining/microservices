<?php

if(isset($_GET('swagger'))) {
  echo file_get_contents('./specs/views.yml');
  die();
}

echo "invalid route";
die();