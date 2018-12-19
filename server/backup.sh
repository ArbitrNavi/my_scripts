#!/bin/bash
#P.S. если после переменное идет символ подчеркивания, то она не сработает


# название директории где файл
DIR="syomka-s-kvadrokoptera.ru"

#имя и логин бд
BDLOGIN="kvadrokopter_b"

#пароль бд
BDPASS="T5h6Kdp3Gd"



# текущая дата
DATA=$(date +%F_%H-%M)

#полный путь к папке
DIRALL="web/$DIR/backup/$DIR-$DATA"

# проверка
# echo "$DIR"
# echo "$DATA"
# echo "$BDLOGIN"
# echo "$BDPASS"


#создаем директорию
#syomka-s-kvadrokoptera.ru-2018-12-17_15-01
mkdir $DIRALL

# создать архив в папке с датой
tar -zcf $DIRALL/$DIR-$DATA.tar.gz web/$DIR/public_shtml

# экспорт бд
mysqldump -u$BDLOGIN -p$BDPASS $BDLOGIN > $DIRALL/$BDLOGIN-$DATA.sql