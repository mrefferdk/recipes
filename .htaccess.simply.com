# Simply.com way to specify PHP version
AddType application/x-httpd-php80 .php
FileETag MTime Size
<IfModule mod_expires.c>
  <FilesMatch "\.(jpg|gif|png|css|js)$">
       ExpiresActive on
       ExpiresDefault "access plus 1 year"
   </FilesMatch>
</IfModule>

RewriteEngine on

RewriteCond %{HTTP_HOST} ^opskrifter.effersoe.net$ [NC,OR]
RewriteCond %{HTTP_HOST} ^www.opskrifter.effersoe.net$
RewriteCond %{REQUEST_URI} !public/
RewriteRule (.*) /public/$1 [L]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /index.php