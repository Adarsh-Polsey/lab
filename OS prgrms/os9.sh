echo "enter a limit"
read num
a=1
b=0
c=0
n=1
while [ $n -le $num ]
do
echo $c
c=$(($a + $b))
a=$b
b=$c
n=$(($n + 1))
done
