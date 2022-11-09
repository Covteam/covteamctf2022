#!/bin/bash
service apache2 start
if [ -n "$FLAG" ]
then
        echo $FLAG > /flag
fi
while test "1" = "1"
do
        sleep 1000
done
