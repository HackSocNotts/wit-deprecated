server {
	listen 80;
	server_name inspirewit.com www.inspirewit.com;
	return 301 $scheme://2017.inspirewit.com$request_uri;
}

server {
	listen 80;

	root /srv/www/inspirewit.com/inspirewit.com/production/current;
	index index.php index.html;

	server_name 2017.inspirewit.com current.inspirewit.com;

	include /etc/nginx/include.d/inspirewit.com-common;
}

server {
	listen 80;

	root /srv/www/inspirewit.com/inspirewit.com/staging/current;
	index index.php index.html;

	server_name staging.inspirewit.com;

	include /etc/nginx/include.d/inspirewit.com-common;
}

server {
	listen 80;

	root /srv/www/inspirewit.com/inspirewit.com/2016;
	index index.php index.html;

	server_name 2016.inspirewit.com;

	include /etc/nginx/include.d/inspirewit.com-common;
}

server {
	listen 80;

	root /srv/www/inspirewit.com/inspirewit.com/2014;
	index index.php index.html;

	server_name 2014.inspirewit.com 2015.inspirewit.com;

	include /etc/nginx/include.d/inspirewit.com-common;
}
