#! /bin/bash
proc=`ls /proc | grep -s "^[0-9]*[0-9]$"`
while IFS= read -r line;
do 
term=`ls -la  /proc/$line/fd/1 2> /dev/null | cut -d' ' -f11`
status=`cat /proc/$line/status 2> /dev/null | grep State | cut -d':' -f2`
temp=`ls /proc/$line/cmdline 2> /dev/null | wc -l`
if [[ $temp != "0" ]]
	then
		cmdline=$(cat 2>/dev/null /proc/$line/cmdline | awk '{print $0}')
		echo $line $term $status $cmdline
	else 
		cmdline='0'
fi
#echo $line $term $status $cmdline 
done <<< $proc 
