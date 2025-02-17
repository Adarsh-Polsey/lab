echo enter a number
read n
s=0
p=$n
while [ $n -gt 0 ]
do
r=$(($n % 10))
s=$(($s + $r))
n=$(($n / 10))
done
echo "Sum of the digits of number  $p is $s "

