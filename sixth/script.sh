#! /bin/bash
head1='head -'$1
head2='head -'$2
logpath='/opt/git/otus_learning/sixth/access.log'
temppath='/opt/git/otus_learning/sixth/temp'
done='/opt/git/otus_learning/sixth/done'
tempcase=`ls $temppath 2> /dev/null | wc -l`
if [[ $tempcase -ne "0" ]]
   then
	echo 'Someone running this script'
   else 
	touch $temppath
	begin=`cat $logpath | awk '{print $4 $5}' | head -1`
	end=`cat $logpath | awk '{print $4 $5}' | tail -n 1`
	echo log from $begin to $end
	cat $logpath | awk '/GET \/ HTTP/{ ipcount[$1]++ } END { for (i in ipcount) { printf " %3s times IP:"i" \n" , ipcount[i] } }'  | sort -rn | $head1
	echo ''
	cat $logpath | awk '/GET/{ pathcount[$7]++ } END { for (p in pathcount) { printf "%4s times PATH: %s \n", pathcount[p], p } }'  | sort -rn  | $head2
	echo ''
	echo 'Errors:'
	echo '403'
	cat $logpath | grep ' 403 '
	echo '404'
	cat $logpath | grep ' 404 '
	echo '500'
	cat $logpath | grep ' 500 '
	echo ''
	cat $logpath | awk '/GET/{ codecount[$9]++ } END { for (c in codecount) { printf "%4s times CODE: %s \n", codecount[c], c } }'  | sort -rn
	cat $logpath >> $done 
	echo :> $logpath
	rm $temppath
fi
