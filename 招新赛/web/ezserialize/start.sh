#!/usr/bin/env bash
service apache2 start
echo $FLAG > /flag
chmod 444 /flag
export FLAG=not_flag
FLAG=not_flag
while test "1" = "1"
do
sleep 1000
done
/usr/bin/tail -f /dev/null