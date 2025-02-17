hours=`date +%H`
if [ $hours -lt 12 ]
then
echo Good morning
elif [ $hours -lt 16 ]
then
echo Good Afternoon
elif [ $hours -lt 20 ] 
then
echo Good Evening
else 
echo Good Night
fi

