#!/bin/bash
NAME=`ls *.md|awk -F. {'print $1'}`

for i in $NAME
	do
	echo $i.md
	`which markdown` $i.md > $i.html
	echo $i.html
done
