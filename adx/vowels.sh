echo type any string
read string
length=$(echo $string |wc -c)
nvowels=0
nconsonants=0
ndigits=0
while [ $length -gt 1 ]
do
length=$((length - 1))
h=$(echo $string | cut -c$length)
case $h in 
[AaEeIiOoUu]) nvowels=$((nvowels + 1));;
[BbCcDdFfGgHhJjKkLlMmNnPpQqRrSsTtVvWwXxYyZz]) nconsonants=$((nconsonants + 1)) ;;
[0-9]) ndigits=$((ndigits + 1 ));;
esac
done
echo no pf vowels : $nvowels
echo no of consonants : $nconsonants
echo no of digits : $ndigits 
