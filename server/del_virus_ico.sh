#!/bin/bach
#var DIR_SITE - site folder

#DIR_SITE="forza.ba"
DIR_SITE="forza.mk"
#DIR_SITE="kreddy.ba"
#DIR_SITE="kreddy.mk"

DIR_ALL="/var/www/$DIR_SITE"

echo "---" >> $DIR_ALL/log.virus.txt
echo `date` >> $DIR_ALL/log.virus.txt
echo "$DIR_SITE" >> $DIR_ALL/log.virus.txt
grep -rl "^@include.*;$" $DIR_ALL/ >> $DIR_ALL/log.virus.txt
grep -rl "^@include.*;$" $DIR_ALL/ | xargs sed -i "s/^@include.*;$/ /g"
find $DIR_ALL/ -name *.ico  >> $DIR_ALL/log.virus.txt
find $DIR_ALL/ -name *.ico  | xargs rm -f