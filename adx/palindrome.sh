echo enter a string
read a
b=`expr $a | wc -c`
b=`expr $b - 1`
echo number of letter=$b
while test $b -gt 0
do
e=`expr $a | cut -c $b`
d=$d$e
b=`expr $b - 1`
done
echo The reversed string is :$d
if test $a = $d
then 
echo Its a palindrome
else
echo Its not a palindrome
fi
