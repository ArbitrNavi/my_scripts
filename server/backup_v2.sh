#!/bin/bash
#P.S. если после переменное идет символ подчеркивания, то она не сработает
#web/dorogie-podarki.com/backup/backup.sh
# если в аргументе присутствует cron то используется путь от начала сервера

# название директории где файл
DIR="video-vr-360.ru"

#имя и логин бд
BDLOGIN="vr360_20.04"

#пароль бд
BDPASS="OLb4S6ZI9mRWtgdb23"

# текущая дата
DATA=$(date +%F_%H-%M-%S)

# проверка указан ли какой ни будь аргумент, лучше указывать cron в будущем думаю допилить его
if [ -n "$1" ]
then
	DIRALL="web/$DIR/backup/$DIR-$DATA"
	DIRSITE="web/$DIR/public_html"
else
	DIRALL="$DIR-$DATA"
	DIRSITE="../public_html"
fi

# проверка
# echo "$DIR"
# echo "$DATA"
# echo "$BDLOGIN"
# echo "$BDPASS"
# echo "$DIRALL"
echo "$DIRSITE"


#создаем директорию
#syomka-s-kvadrokoptera.ru-2018-12-17_15-01
mkdir $DIRALL

# экспорт бд

mysqldump -u$BDLOGIN -p$BDPASS $BDLOGIN > $DIRALL/$BDLOGIN-$DATA.sql

# создать архив в папке с датой
# tar -zcf $DIRALL/$DIR-$DATA.tar.gz web/$DIR/public_html

tar -zcf $DIRALL/$DIR-$DATA.tar.gz $DIRSITE