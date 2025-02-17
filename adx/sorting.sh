for i in {0..4}
do 
echo enter a number 
read a[$i]		
done
for i in {0..3}
do
for j in $(seq $(($i+1)) 4)
do
if [ ${a[$i]} -gt ${a[$j]} ]
then 
temp=${a[$i]}
a[$i]=${a[$j]}
a[$j]=$temp
fi
done
done
echo sorted number
for i in {0..4}
do
echo ${a[$i]}
done
