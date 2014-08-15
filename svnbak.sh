#!/bin/bash
DES=/svn
M=m
if [ -e /bin/xz ]
then
FLAGS=-cJf
TAR=tar.xz
else
FLAGS=-cjf
TAR=tar.bz2
fi
OUT=svn_$M.$TAR
echo $OUT
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
