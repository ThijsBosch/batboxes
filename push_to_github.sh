cd code/vleermuizen
svn up
cd ../..
rm -Rfv prepare
rsync --exclude 'web/runtime/logs/app.log' --exclude '.sass-cache' --exclude '.svn' --exclude '.settings' --exclude '.project' --exclude 'composer.lock' --exclude '.bowerrc' --exclude '.buildpath' -axv code/vleermuizen prepare
cp replace/db.php prepare/vleermuizen/config/db.php
cp replace/README.md prepare
mkdir prepare/db
PGPASSWORD="b^288mJJu" /usr/bin/pg_dump --no-privileges -s -h psqldev3.czetmkr1kos1.eu-west-1.rds.amazonaws.com -U vleermuizen vleermuizen > prepare/db/db.sql
cd prepare
/usr/bin/git init
/usr/bin/git add .
/usr/bin/git commit
/usr/bin/git remote add origin https://github.com/bjornhij/batboxes
/usr/bin/git pull origin master
/usr/bin/git push origin master


