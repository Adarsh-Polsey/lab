echo "Enter your basic salary"
read sal
da=`expr $sal \* 40 / 100`
ha=`expr $sal \* 20 / 100`
Nsal=`expr $sal + $da + $ha`
echo "your Basic Salary $sal"
echo "Your Dearnes Allowance $da"
echo "Your House rent $ha"
echo "       ......."
echo "Your Net Salary is Rs.$Nsal"
