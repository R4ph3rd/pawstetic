sudo systemctl start mysqld.service
sudo systemctl start httpd.service

php -S localhost:8000 -t public
