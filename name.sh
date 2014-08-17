#!/bin/bash
SEARCH=/var/www/html/m
FILE=`find $SEARCH -name "*.md"`

for i in $FILE
do
# we could use this to make all markdown to html
F=`basename $i ".md"` 
D=`dirname $i`
#echo $F
#echo $D
cd $D && touch "$F.html" && cd $OLDPWD # markdown "$F.md" "$F.html"
done
