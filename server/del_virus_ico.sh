#!/bin/bach
echo `date` >> /var/www/forza.ba/log.virus.txt
grep -rl "^@include.*;$" /var/www/forza.ba/ >> /var/www/forza.ba/log.virus.txt
grep -rl "^@include.*;$" /var/www/forza.ba/ | xargs sed -i "s/^@include.*;$/ /g"
find /var/www/forza.ba/ -name *.ico >> /var/www/forza.ba/log.virus.txt
find /var/www/forza.ba/ -name *.ico  | xargs rm -f