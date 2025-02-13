echo "Enter a number"
read n
if [ ` expr $n % 2 ` -eq 0 ]
then
echo "Given number $n is even"
else
echo "Given number $n is Odd"
fi
