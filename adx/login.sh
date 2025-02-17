u=$(whoami)
d=$(date +"%D") 
t=$(date +"%T") 
echo "today is $d"
echo "current time is $t"
echo "as of now $(who | wc -l) user(s) are logged into system"
echo "my details........."
echo "user name $u"
echo "login date is $d"
echo "current login time is $t"
