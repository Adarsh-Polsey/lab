
h=`date +%H`
if [ $h -lt 12 ]
then
echo "Good Morning"
elif [ $h -lt 16 ]
then
echo " Good Afternoon"
elif [ $h -lt 20 ]
then
echo "Good Evening"
else
echo "Good Night"
fi


