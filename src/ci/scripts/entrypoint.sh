#!/bin/bash

cd /var/www/html && php ci/database.php

source /etc/apache2/envvars
#tail -F /var/log/apache2/* &
exec apache2 -D FOREGROUND