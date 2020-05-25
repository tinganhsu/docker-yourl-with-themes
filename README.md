# docker-yourl-with-themes
利用官方yourls docker為基礎增加主題分別為inifinty和sleeky

官方yourls docker變數
```
-e YOURLS_DB_HOST=... (defaults to the IP and port of the linked mysql container)
-e YOURLS_DB_USER=... (defaults to "root")
-e YOURLS_DB_PASS=... (defaults to the value of the MYSQL_ROOT_PASSWORD environment variable from the linked mysql container)
-e YOURLS_DB_NAME=... (defaults to "yourls")
-e YOURLS_DB_PREFIX=... (defaults to "yourls_", only set this when you need to override the default table prefix)
-e YOURLS_COOKIEKEY=... (default to unique random SHA1s)
-e YOURLS_SITE=... (yourls instance url)
-e YOURLS_USER=... (yourls instance user name)
-e YOURLS_PASS=... (yourls instance user password)
```
----
##inifinty設定
環境變數
```
WEB_NAME=...(網頁標題)
RECAPTCHA_SITE_KEY_V2=...(google recaptcha v2版本的site key)
RECAPTCHA_SECERT_KEY_V2=...(google recaptcha v2版本的secert key)
```

=====
##sleeky設定
環境變數
```
-e WEB_NAME=....(web titile) 
-e WEB_SHORT_NAME=...(left down cornor short name) 
-e DESCRIPTION=...(web description at homepage) 
-e BG_COLOR=#24936E(backgroud color) 
-e RECAPTCHA_ENABLE=true or false(enable recaptcha with sleeky) 
-e RECAPTCHA_SITE_KEY_V3=...(recaptcha v3 site key) 
-e RECAPTCHA_SECERT_KEY_V3=...(recaptcha v3 secert key)
```
