location / {
    index index.html index.php;
	try_files $uri $uri/ /index.php?$args;
}

location ~ /acp/(.*) {
	index acp.php;
	try_files /$uri /$uri/ /acp.php?$args;
}

# for people with app root as doc root, restrict access to a few things
location ~ ^/(composer\.|Procfile$|<?=getenv('COMPOSER_VENDOR_DIR')?>/|<?=getenv('COMPOSER_BIN_DIR')?>/) {
    deny all;
}

location ~ /\.(ht|htaccess|svn|git) {
	deny all;
}
		
		
