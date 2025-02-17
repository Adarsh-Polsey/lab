echo enter the limit
read l
a=0
b=1
echo fibonacci  series upto $l :
echo $a
echo $b
while [ $((a+b)) -le $l ] 
do
c=$((a+b))
echo $c
a=$b
b=$c
done

