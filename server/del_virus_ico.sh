#!/bin/bach
DIR_WWW="/var/www"
#DIR_SITE="$DIR_WWW/forza.ba"
DIR_SITE="$DIR_WWW/forza.mk"
#DIR_SITE="$DIR_WWW/kreddy.ba"
#DIR_SITE="$DIR_WWW/kreddy.mk"
echo `date` >> $DIR_DIR_SITE/log.virus.txt
grep -rl "^@include.*;$" $DIR_DIR_SITE/ >> $DIR_DIR_SITE/log.virus.txt
grep -rl "^@include.*;$" $DIR_DIR_SITE/ | xargs sed -i "s/^@include.*;$/ /g"
find $DIR_DIR_SITE/ -name *.ico  >> $DIR_DIR_SITE/log.virus.txt
find $DIR_DIR_SITE/ -name *.ico  | xargs rm -f

