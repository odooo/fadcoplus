sudo rm -rf app/cache/*
rm -rf app/logs/*
php app/console cache:clear --env=dev
chmod -R 777 app/cache/
chmod -R 777 app/logs/
