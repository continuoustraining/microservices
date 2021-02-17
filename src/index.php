<?php

if(isset($_GET['swagger'])) {
  echo file_get_contents('./specs/views-api.yaml');
  die();
}

echo "invalid route";
die();