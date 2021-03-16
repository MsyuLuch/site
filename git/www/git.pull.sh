#!/bin/bash
HOST=$1
NOW=$(date +"%m-%d-%Y")
DIR=/var/www/site.ru/tmp/autopull/
if [ ! -d "$DIR" ]; then
    mkdir -p $DIR
fi
echo " " >> $DIR/git_update_$NOW.log 2>&1
echo `date` $HOST >> $DIR/git_update_$NOW.log 2>&1
HOME=/var/www/site.ru/
export HOME
cd $HOME
git reset --hard origin/main >> $DIR/git_update_$NOW.log 2>&1
echo " " >> $DIR/git_update_$NOW.log 2>&1
git pull origin main >> $DIR/git_update_$NOW.log 2>&1
echo " " >> $DIR/git_update_$NOW.log 2>&1
