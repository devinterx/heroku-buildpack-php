location /acp {
	try_files $uri $uri/ /acp.php?$args;
}

location / {
    index  index.php index.html index.htm;
	try_files $uri $uri/ /index.php?$args;
}

# for people with app root as doc root, restrict access to a few things
location ~ ^/(composer\.|Procfile$|<?=getenv('COMPOSER_VENDOR_DIR')?>/|<?=getenv('COMPOSER_BIN_DIR')?>/) {
    deny all;
}
