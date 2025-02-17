echo enter your basic salary
read s
da=`expr $s \* 40 / 100`
ha=`expr $s \* 20 / 100`
gsal=`expr $s + $da + $ha`
echo your Basic salary is $s
echo your Dearness allowance is $da
echo your House Rent  is $ha
echo -------------
echo your  gross Salary is $gsal
