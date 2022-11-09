
echo $FLAG > /flag.txt
export FLAG=not_flag
FLAG=not_flag
/etc/init.d/xinetd start;
sleep infinity;
