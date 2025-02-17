echo enter the filename
read file
w=`cat $file|wc -w`
c=`cat $file|wc -c`
l=`grep -c "." $file`
echo no of characters in $file is $c
echo no of words in $file is $w
echo no of lines in $file is $l
