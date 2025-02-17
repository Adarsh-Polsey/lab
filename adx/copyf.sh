if [ -e $1 ]
then
if [ -e $2 ]
then
echo File $2 already exits 
else
cp $1$2
fi
else
echo File $2 doesnt exist
fi 
