echo "---student Mark list" 
echo "-----"
echo "enter the student name :"
read name
echo "enter the register number:"
read rno
echo "enter mark 1"
read m1
echo "enter mark 2"
read m2
echo "enter mark 3"
read m3
echo "enter mark 4"
read m4
echo "enter mark 5"
read m5
tot=$(( $m1 + $m2 + $m3 + $m4 + $m5 ))
avg=$(( $tot / 5))
echo "---------------------------"
echo "---student Mark list "
echo "---------------------------"
echo "enter the student name : $name"
echo "enter the register number: $rno"
echo "mark 1 : $m1"
echo "mark 2 : $m2"
echo "mark 3 : $m3"
echo "mark 4 : $m4"
echo "mark 5 : $m5"
echo "Total :  $tot"
echo "Average : $avg"
if [ $avg -ge 90 ]
then
echo "Grade A+"
elif [ $avg -ge 80 ]
then
echo "Grade A"
elif [ $avg -ge 70 ]
then
echo "Grade B"
elif [ $avg -ge 60 ]
then
echo "Grade C "
elif [ $avg -ge 50 ]
then
echo "Grade D"
elif [ $avg -ge 35 ]
then
echo "Grade E"
fi

