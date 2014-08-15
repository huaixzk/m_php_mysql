#!/bin/bash
DES=/svn
DES0=/var/www/html
M=m
TO=/var/ftp/svn

CP=`which cp`
TAR=`which tar`

if [ -e /bin/xz ]
then
FLAGS=-cJf
TAR=tar.xz
else
FLAGS=-cjf
TAR=tar.bz2
fi
OUT=svn_$M.$TAR
#echo $OUT debug

if [ "$PWD" != "$DES" ];
then
	echo "passed"
	cd $DES
	if [ -d $M ];
	then
	tar $FLAGS $OUT $M 
	fi
else
echo "already in $DES"
if [ -d $M ];
      then
      tar $FlAGS $OUT $M
      fi
fi

if [ -e $OUT ];
then 
	$CP $OUT $TO
	if [ $? == '0' ];
		then 
		echo "$CP $OUT to $TO successed"
	else
		echo "$CP $OUT failed , check on it, dude ."
	fi
fi

# without svn, then tar all source not repo.
#  done

BAK=php_mysql.$TAR
cd /var/www/html
tar $FLAGS $BAK $M 

if [ $? == '0' ];
then 
	$CP $BAK $TO && echo "$CP $BAK to $TO successed"
else 
	echo "Tar $BAK failed, check it , dude !!"
fi
