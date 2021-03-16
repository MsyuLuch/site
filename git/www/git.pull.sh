#!/bin/bash
HOST=$1
NOW=$(date +"%m-%d-%Y")
DIR=/var/www/site.ru/tmp/autopull/$HOST/
if [ ! -d "$DIR" ]; then
    mkdir -p $DIR
fi
echo " " >> $DIR/git_update_$NOW.log 2>&1
echo `date` $HOST >> $DIR/git_update_$NOW.log 2>&1
HOME=/var/www/site.ru/
export HOME
cd $HOME
git reset --hard origin/master >> $DIR/git_update_$NOW.log 2>&1
echo " " >> $DIR/git_update_$NOW.log 2>&1
git pull origin master >> $DIR/git_update_$NOW.log 2>&1
echo " " >> $DIR/git_update_$NOW.log 2>&1