cat wp-config.php
if ! [ "$?" -ne "0" ]
then
  # setup wordpress database
  sed -i "s/database_name_here/$WORDPRESS_DB_NAME/g" /var/www/html/wp-config.php
  sed -i "s/username_here/$WORDPRESS_DB_USER/g" /var/www/html/wp-config.php
  sed -i "s/password_here/$WORDPRESS_DB_PASSWORD/g" /var/www/html/wp-config.php
  sed -i "s/localhost/$WORDPRESS_DB_HOST/g" /var/www/html/wp-config.php


  # install wordpress with wp-cli
  sudo -u www-data wp core install --url=$WEBSITE_URI --title=$TITLE --admin_user=$WORDPRESS_ADMIN --admin_password=$WORDPRESS_ADMIN_PASSWORD --admin_email=$WORDPRESS_ADMIN_EMAIL
  sudo -u www-data wp user create ${WORDPRESS_USER} ${WORDPRESS_USER_EMAIL} --user_pass=${WORDPRESS_USER_PASSWORD} --role=author
  sudo -u www-data wp theme install raft --activate

fi