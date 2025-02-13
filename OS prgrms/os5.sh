clear
echo "Enter First Number"
read a
echo "Enter second Number"
read b
echo "Enter Third Number"
read c
m=$((($a + $b + $c )/ 3))
p=`expr $a - $m`
q=`expr $b - $m`
r=`expr $c - $m`
d=$((($p * $p + $q * $q + $r * $r )/ 3))
w=$(echo "sqrt($d)" |bc -l)
echo "Mean of $a $b $c is $m"
echo "standard deviation is $w"
