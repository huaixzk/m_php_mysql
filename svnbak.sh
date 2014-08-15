#!/bin/bash
DES=/svn
M=m
TAR=tar.xz
OUT=svn_$M.$TAR
echo $OUT
if [ "$PWD" != "$DES" ];
then
	echo "passed"
	cd $DES
	if [ -d $M ];
	then
	tar -cJf $OUT $M 
	fi
else
echo "already in $DES"
if [ -d $M ];
      then
      tar -cJf $OUT $M
      fi
fi
