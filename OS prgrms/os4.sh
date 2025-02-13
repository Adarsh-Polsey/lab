echo "Enter First Number"
read a
echo "Enter second Number"
read b
echo "Enter Third Number"
read c
l=$a
if [ $b -gt $l ]
then
l=$b
fi
if [ $c -gt $l ]
then
l=$c
fi
echo Lagest of $a $b $c is $l
