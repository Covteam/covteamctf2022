#!bin/bash
MATRIX="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz_"
LENGTH="40"
while [ "${n:=1}" -le "$LENGTH" ]
do
       PASS="$PASS${MATRIX:$(($RANDOM%${#MATRIX})):1}"
       let n+=1
done
       
cd /var/www/html
rm -rf flag.php
a='<?php $flag="flag{'
b='}";'
flag="$PASS"
echo "$PASS"
echo $a$flag$b > flag.php
`cat flag.php >> /var/www/html/index.php`

exit 0

