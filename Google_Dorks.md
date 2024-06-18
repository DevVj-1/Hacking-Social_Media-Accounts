# Google Dorking
**Google Dorking**, also known as **Google Hacking,** is a technique used to ***uncover sensitive information*** on the internet by utilizing advanced search techniques with the Google search engine. This involves using specific search ```operators``` and search queries to identify vulnerable websites and servers that may contain exploitable information.

There are two types of google Operators...


## Basic Operators
**Basic operators** are *simple and easy to use*. Here are some examples of basic operators:

No. | Operator | Description
--- | --- | ---
1 | + | Used to include a specific keyword in the search results
2 | - | Used to exclude a specific keyword from the search results
3 | "" | Used to search for an exact phrase
4 | * | Used to match any word in a search query
5 | . | Used to search for a range of numbers
6 | ~ | Used to search for pages that contain similar words
7 | OR | Used to search for pages that contain either one or both keywords

## Advanced Operators
**Advanced operators** are more *specific* and can be used to target your search more effectively. Here are some examples of advanced operators:

| No. | Operator | Description | Usage |
| --- | --- | --- | --- |
| 1 | intitle: | Search for a keyword in the title | intitle:keyword |
| 2 | allintitle: | Search for multiple keywords in the title | allintitle:keyword1 keyword2 |
| 3 | inurl: | Search for a keyword in the URL | inurl:keyword |
| 4 | allinurl: | Search for multiple keywords in the URL | allinurl:keyword1 keyword2 |
| 5 | intext: | Search for a keyword in the body of a page | intext:keyword |
| 6 | allintext: | Search for multiple keywords in the body of a page | allintext:keyword1 keyword2 |
| 7 | filetype: | Search for a specific file type | filetype:pdf |
| 8 | site: | Search for pages on a specific website | site:website.com |
| 9 | cache: | Search for cached pages | cache:website.com |
| 10 | link: | Search for pages that link to a specific page | link:website.com/page.html |
| 11 | related: | Search for pages related to a specific URL | related:website.com/page.html |
| 12 | info: | Display information about a specific web page | info:website.com/page.html |
| 13 | inachor: | Search for a keyword in the anchor text of links to a page | inachor:keyword |



### Rules for using Advanced Operators:
- There should be no space between the operator and the search term.
- Searches are NOT case sensitive.
- Use quotation marks if a search term has a space or use a period instead.
- Combine multiple operators for more specific and targeted search results.

## Dorks Lists...


| No. | Dork | Description |
| --- | --- | --- |
| 1 | "intitle:index.of" site:. | Search for directory listings on any website |
| 2 | "intitle:Index of /wp-content/uploads" site: | Search for WordPress uploads directory |
| 3 | intitle:"index of /files" site: | Search for files directory |
| 4 | intitle:"index of /Doc" site: | Search for documents directory |
| 5 | allinurl:wp-login.php?action=register | Search for WordPress registration pages |
| 6 | "Apache" intitle:"index.of /dist" | Search for Apache directory listings |
| 7 | inurl: */vendor/ site:. | Search for vendor directory |
| 8 | intitle:"index of /wp-content/plugins" | Search for WordPress plugins directory |
| 9 | intitle:"Index of /dist" | Search for software distribution directories |
| 10 | filetype:txt username password | Search for plain text login credentials |
| 11 | allintitle:"index of /logs" | Search for log files directory |
| 12 | intitle:"index of" /authorize_payment | Search for authorize_payment directory |
| 13 | intitle:"index of" /backup | Search for backup directories |
| 14 | intitle:"index of *password" | Search for password files |
| 15 | intitle:"index of" *username *password filetype:txt | Search for username and password files |
| 16 | intitle:"index.of /database" | Search for database directory |
| 17 | intitle:"index of" database.yml | Search for database configuration files |
| 18 | intitle:"index of */vendor/drupal/console-en/" | Search for Drupal Console directory |
| 19 | intitle:"index of" */admin+password site:.com | Search for admin and password directories on a specific website |
| 20 | intitle:"Index of c:\Windows\" | Search for directory listings in Windows folders |
| 21 | intitle:"index of\" inurl:ftp (pub OR incoming) | Search for FTP directory listings |
| 22 | intitle:index.of passwd passwd.bak | Search for password files |
| 23 | intext:"Index of /" +password.txt | Search for password files in directory listings |
| 24 | intitle:"index of" /private | Search for private directories |
| 25 | intitle:index of */private_key | Search for private key files |
| 26 | intitle:"index of" /wp-includes/ | Search for WordPress includes directory |
| 27 | intitle:"index of" */wp-content/plugins/wp-shopping-cart | Search for WordPress shopping cart plugins directory |
| 28 | inurl:/wp-includes/Requests/ -site:*wordpress.org | Search for WordPress Requests directory |
| 29 | intitle:index.of db | Search for database files |
| 30 | intitle:"index of" *wp-config.php.save | Search for WordPress configuration files |
| 31 | intitle:"index of" *config.inc.php | Search for configuration files |
| 32 | intitle:"index of" "ftp" | Search for FTP servers query 
| 33 | intitle:"index of" /wp-content/plugins/ "documentation" | A search query for finding documentation on specific WordPress plugins
| 34 | intitle:"index of" /wp-content/plugins/ "user guide" | A search query can be helpful in finding user guides or manuals related to specific WordPress plugins
| 35 | intitle:"index of" *.php | Finding directory listings of PHP files 
| 36 | intext:"Index of /" +password.txt | Search Publicly Accessible Password Listings
| 37 | intitle:index of intext:settings.inc.php | Searching for web pages that contain directory listings of files that include the "settings.inc.php" file 
| 38 | inurl:/wp-content intitle:"index of" */passwd | Finding Potentially Sensitive Information in WordPress wp-content Directory Listings

| Dorks |
|   --- |
intitle:"index of" /*source=*
intitle:"index of" ".ssh"
intitle:"index of" "config.php"
intitle:"index of" "wp-config.php"
intitle:"index of" ".htpasswd"
intitle:"index of" ".git"
intitle:"index of" "wp-admin"
intitle:"index of" "db.php"
intitle:"index of" "database.php"
intitle:"index of" "wp-config.bak"
intitle:"index of" "wp-config.old"
intitle:"index of" "wp-config.txt"
intitle:"index of" "wp-config.php~"
intitle:"index of" "wp-config.bak~"
intitle:"index of" "wp-config.old~"
filetype:env intext:APP_ENV
filetype:env intext:DB_PASSWORD
filetype:env intext:DB_USERNAME
filetype:env intext:AWS_ACCESS_KEY_ID
filetype:env intext:AWS_SECRET_ACCESS_KEY
filetype:env intext:DB_HOST
filetype:env intext:DB_NAME
filetype:log inurl:"access.log" intext:"POST /wp-login.php"
filetype:log inurl:"access.log" intext:"POST /login.php"
site:github.com "password" filename:.env
site:github.com "api_key" filename:.env
site:github.com "client_secret" filename:.env
site:github.com "secret_key" filename:.env
site:github.com "username" filename:.env
site:github.com "password" filename:.yml
site:github.com "api_key" filename:.yml
site:github.com "client_secret" filename:.yml
site:github.com "secret_key" filename:.yml
site:github.com "username" filename:.yml
intitle:"index of" intext:"logins.json"
intitle:"index of" intext:"config.yml"
intitle:"index of" intext:"config.json"
intitle:"index of" intext:"application.properties"
intitle:"index of" intext:"application.yml"
intitle:"index of" intext:"application.json"
intitle:"index of" intext:"appsettings.json"
intitle:"index of" intext:"appsettings.yml"
intitle:"index of" intext:"secrets.yml"
intitle:"index of" intext:"secrets.json"
inurl:"/wp-admin/" intitle:"login"
inurl:"/wp-login.php"
intext:"error establishing a database connection"
inurl:"/wp-admin/" filetype:log
inurl:"/wp-admin/" filetype:php
inurl:"/wp-admin/" filetype:sql
inurl:"/wp-admin/" filetype:txt
inurl:"/wp-admin/" filetype:xml
inurl:"/wp-admin/" intitle:"index of"
inurl:"/wp-includes/" intitle:"index of"
inurl:"/wp-content/plugins/" intitle:"index of"
filetype:env DB_USERNAME
inurl:/wp-config.php
inurl:config.php intext:DB_USERNAME
intext:"DB_PASSWORD" filetype:env
intitle:"index of" ".ssh"
inurl:admin inurl:userlist
filetype:sql "insert into" (pass|passwd|password)
inurl:/config/ "root:" "admin:" "user:" OR "password:"
intitle:"index of" "config.yml" OR "config.toml" OR "config.ini"
inurl:proftpdpasswd
intitle:"index of" "auth.json"
intitle:"index of" "wallet.dat"
inurl:web.config "Password"
inurl:admin.php intext:"password" -stackoverflow -quora
intext:"@gmail.com" OR "@yahoo.com" OR "@hotmail.com" OR "@rediffmail.com" filetype:txt
intext:"List of users" intext:"password" filetype:xls
intitle:"index of" ".git/config"
intitle:"index of" ".npmrc"
intitle:"index of" ".env"
intitle:"index of" "sftp-config.json"
intitle:"index of" "composer.json"
intitle:"index of" "credentials.json"
intitle:"index of" "secrets.yml"
intitle:"index of" "secrets.json"
intitle:"index of" "aws.yml"
intitle:"index of" "docker-compose.yml"
intitle:"index of" "jenkinsfile"
intitle:"index of" "config.inc.php"
intitle:"index of" "db.php"
intitle:"index of" "mysql.php"
intitle:"index of" "mysqli_connect"
intitle:"index of" "wp-config.php"
intitle:"index of" "wp-config-sample.php"
intitle:"index of" "wp-config.bak"
intitle:"index of" "wp-config.old"
intitle:"index of" "wp-config.php~"
intitle:"index of" "wp-config.php.save"
intitle:"index of" "wp-config.php.bak"
intitle:"index of" "wp-config.php.old"
intitle:"index of" "wp-config.php.orig"
intitle:"index of" "wp-config.php.txt"
intitle:"index of" "wp-config.php.swp"
intitle:"index of" "wp-config.php.swo"
intitle:"index of" "wp-config.php.dist"
intitle:"index of" "wp-config.php.example"
intitle:"index of" "wp-config.php.sample"
intitle:"index of" "wp-config.php.default"
intitle:"index of" "wp-config.php.example"
intitle:"index of" "wp-config.php.orig"
intitle:"index of" "wp-config.php.new"
intitle:"index of" "wp-config.php.original"
intitle:"index of" "wp-config.php.install"
intitle:"index of" "wp-config.php.dist-sample"
intitle:"index of" "wp-config.php.dist.bak"
intitle:"index of" "wp-config.php.dist.old"
intitle:"index of" "wp-config.php.dist.txt"
intitle:"index of" "wp-config.php.dist.swp"
intitle:"index of" "wp-config.php.dist.swo"
filetype:env DB_USERNAME NOT homestead
intitle:"index of" intext:"config.yml"
inurl:"/wp-content/" "wp-config.php"
"password" site:example.com
site:example.com ext:sql | ext:dbf | ext:mdb
site:example.com ext:sql | ext:dbf | ext:mdb | ext:log
site:example.com ext:php intext:"$dbpassword"
site:example.com ext:php intitle:"Login" intext:"password"
site:example.com ext:php intitle:"phpinfo" "PHP Version"
site:example.com ext:xml | ext:conf | ext:cnf | ext:reg | ext:inf | ext:rdp | ext:cfg | ext:txt | ext:ora | ext:ini
site:example.com ext:log
site:example.com inurl:"config.php"
site:example.com intitle:"index of" "wp-content/uploads"
site:example.com intitle:"index of" "config.php"
site:example.com intitle:"index of" dbconnect.php
site:example.com intitle:"index of" wp-config.php
site:example.com intitle:"phpinfo" "PHP Version"
site:example.com intitle:"index of" ".env"
site:example.com intitle:"index of" "db.sqlite"
site:example.com intitle:"index of" "wp-content/uploads"
site:example.com intitle:"index of" "sftp-config.json"
site:example.com intitle:"index of" ".ftpconfig"
site:example.com intitle:"index of" ".remote-sync.json"
site:example.com intitle:"index of" ".s3cfg"
site:example.com intitle:"index of" ".npmrc"
site:example.com intitle:"index of" ".env"
site:example.com intitle:"index of" ".gitconfig"
site:example.com intitle:"index of" ".dockerconfig"
site:example.com intitle:"index of" ".dockercfg"
site:example.com intitle:"index of" ".bash_history"
site:example.com intitle:"index of" ".bashrc"
site:example.com intitle:"index of" ".zshrc"
site:example.com intitle:"index of" ".zsh_history"
site:example.com intitle:"index of" ".viminfo"
site:example.com intitle:"index of" ".ssh"
site:example.com intitle:"index of" ".aws"
site:example.com intitle:"index of" ".credentials"
site:example.com intitle:"index of" ".pgpass"
site:example.com intitle:"index of" ".my.cnf"
site:example.com intitle:"index of" ".bashrc"
site:example.com intitle:"index of" ".mysql_history"
site:example.com intitle:"index of" ".htpasswd"
site:example.com intitle:"index of" ".htaccess"
site:example.com intitle:"index of" ".git-credentials"
site:example.com intitle:"index of" ".dockercfg"
site:example.com intitle:"index of" ".DS_Store"
site:example.com intitle:"index of" "composer.json"
site:example.com intitle:"index of" ".env.backup"
site:example.com int
filetype:env DB_PASSWORD
inurl:wp-config.php DB_PASSWORD
inurl:config/database.yml
inurl:config/database.yml intext:password
inurl:wp-config.php
intext:"db_password" filetype:env
inurl:connections/ OR inurl:db/ OR inurl:sql/
intext:"mongodb://"
intext:"redis://"
intitle:"index of" ".env"
intext:"TWILIO_ACCOUNT_SID" OR "TWILIO_AUTH_TOKEN"
intext:"AWS_ACCESS_KEY_ID" OR "AWS_SECRET_ACCESS_KEY"
intext:"s3.amazonaws.com" accessKeyId
intext:"s3.amazonaws.com" secretAccessKey
inurl:config/paypal.yml
intitle:"index of" ".ssh"
intitle:"index of" "id_rsa"
intitle:"index of" "id_dsa"
intitle:"index of" "known_hosts"
intext:"PRIVATE KEY" -inurl:git
intext:"BEGIN RSA PRIVATE KEY" -inurl:git
intext:"BEGIN DSA PRIVATE KEY" -inurl:git
inurl:wp-config.php.bak
inurl:wp-config.php.save
inurl:wp-config.php.swp
inurl:wp-config.php~
inurl:config.php.bak
inurl:config.php.save
inurl:config.php.swp
inurl:config.php~
inurl:config.php.old
inurl:config.php.orig
intext:"Joomla! License Guidelines" inurl:administrator
inurl:"/admin/config.php" intext:"password" -github.com
intext:"SNMPv2-SMI::mib-2" inurl:"/snmp.php"
intitle:"index of" ".git"
inurl:admin.php inurl:login.php
intext:"Certificate Information" intext:"Certificate Policies" intext:"Certification Authority"
intext:"username=" AND "password=" site:edu
inurl:/phpmyadmin/index.php intitle:phpmyadmin
intext:"Powered by phpMyAdmin" intitle:"phpMyAdmin Setup"
intext:"Welcome to phpMyAdmin" intitle:"phpMyAdmin Setup"
intitle:phpMyAdmin "Welcome to phpMyAdmin *"
intext:"mysql dump" filetype:sql
intext:"BEGIN WordPress" filetype:txt
intitle:"index of" "wp-config.php" -git
intitle:"index of" "config.php" -git
inurl:wp-config.php.bak
inurl:wp-config.php.save
inurl:wp-config.php.swp
inurl:wp-config.php~
inurl:config.php.bak
inurl:config.php.save
inurl:config.php.swp
inurl:config.php~
inurl:config.php.old
inurl:config.php.orig
inurl:env
inurl:properties
inurl:application.properties
inurl:database.yml
intext:"-----BEGIN PRIVATE KEY-----" site:example.com
intext:"-----BEGIN CERTIFICATE-----" site:example.com
intext:"-----BEGIN CERTIFICATE REQUEST-----" site:example.com
intitle:"index of" "*.pem"
site:[website URL] filetype:sql (to find SQL database dumps)
intext:"username=" password (to find login credentials)
intitle:"Index of" db.key OR server.key OR ftp.key OR ssh.key OR "secret.key" OR "secrets.yml" OR "secrets.json" OR "secrets.xml" (to find private keys and secret files)
intext:"BEGIN RSA PRIVATE KEY" filetype:key (to find RSA private keys)
intitle:"Index of" "config.yml" OR "database.yml" OR "secrets.yml" (to find configuration files)
intitle:"Index of" "wp-config.php" (to find WordPress configuration files)
site:[website URL] inurl:wp-content/uploads/ (to find uploaded files)
intitle:"index of" inurl:config (to find configuration files)
intitle:"Index of" "wp-includes" OR "wp-content" (to find WordPress files)
site:[website URL] ext:log (to find log files)
site:[website URL] ext:sql (to find SQL database dumps)
intext:"password" ext:conf OR ext:cnf OR ext:ini (to find configuration files with passwords)
intext:"root:" ext:log (to find logs with references to root accounts)
intitle:"index of" .env (to find .env files)
intitle:"index of" .htpasswd (to find htpasswd files)
intitle:"index of" db_key OR private_key OR server_key OR ssh_key OR "secrets.yml" OR "secrets.json" OR "secrets.xml" (to find secret files)
intext:"password" filetype:txt OR filetype:log OR filetype:cfg (to find text files with passwords)
intext:"apikey" OR intext:"api_key" OR intext:"api token" filetype:env (to find environment files with API keys)
filetype:sql intext:password
inurl:wp-config.php
intitle:index.of wallet.dat
intitle:index.of .ssh
intitle:index.of id_rsa
intitle:index.of aws_keys
intitle:index.of google_drive_private_key
intitle:index.of oauth
intitle:index.of aws-config.php
intitle:index.of aws-credentials
intitle:index.of s3cfg
intitle:index.of .env
intitle:index.of .env.bak
intitle:index.of .gitconfig
intitle:index.of database
intitle:index.of .htpasswd
intitle:index.of jenkins
intitle:index.of config
intitle:index.of access.log
intitle:index.of error.log
intitle:index.of appsettings.json
intitle:index.of web.config
intitle:index.of application.properties
intitle:index.of application.yml
intitle:index.of secrets.yml
intitle:index.of service-account.json
intitle:index.of client_secret.json
intitle:index.of .npmrc
intitle:index.of .yarnrc
intitle:index.of .dockerconfigjson
intitle:index.of .dockercfg
intitle:index.of .gemrc
intitle:index.of .bash_history
intitle:index.of .bashrc
intitle:index.of .bash_profile
intitle:index.of .zshrc
intitle:index.of .zsh_history
intitle:index.of .zshrc_history
intitle:index.of .aws
intitle:index.of .aws/credentials
intitle:index.of .aws/config
intitle:index.of .aws/credentials.csv
intitle:index.of .aws/credentials.txt
intitle:index.of .aws/credentials.yml
intitle:index.of .aws/credentials.yaml
intitle:index.of .aws/credentials.json
intitle:index.of .aws/config.csv
intitle:index.of .aws/config.txt
intitle:index.of .aws/config.yml
intitle:index.of .aws/config.yaml
intitle:index.of .aws/config.json
intitle:index.of .aws/accounts
intitle:index.of .aws/accounts.csv
intitle:index.of .aws/accounts.txt
intitle:index.of .aws/accounts.yml
intitle:index.of .aws/accounts.yaml
intitle:index.of .aws/accounts.json
intitle:"index of" db_passwords
intitle:"index of" admin password
intitle:"index of" ".ssh" OR "ssh_config" OR "ssh_known_hosts" OR "authorized_keys" OR "id_rsa" OR "id_dsa"
intitle:"index of" "sftp-config.json"
intitle:"index of" "wp-config.php"
intitle:"index of" ".git" OR ".gitignore"
intitle:"index of" ".svn"
intitle:"index of" "filezilla.xml" OR "filezilla.xml.bak"
intitle:"index of" "phpmyadmin" OR "dbadmin"
intitle:"index of" ".htpasswd" OR ".htaccess"
intitle:"index of" "config.yml"
intitle:"index of" "deploy.rake"
intitle:"index of" "jenkins.config.xml"
intitle:"index of" "jenkins.plugins.publish_over_ssh.BapSshPublisherPlugin.xml"
intitle:"index of" "credentials.xml"
intitle:"index of" "vncpasswd"
intitle:"index of" "my.cnf" OR "mysql.cnf" OR "mysql.conf" OR "mysql-config.cnf" OR "mysql_config.cnf"
intitle:"index of" "web.config" OR "applicationHost.config" OR "machine.config" OR "redirection.config" OR "global.asax" OR "packages.config"
intitle:"index of" "config.inc.php" OR "config.php"
intitle:"index of" "configuration.php"
intitle:"index of" "secrets.yml"
intitle:"index of" "docker-compose.yml" OR "docker-compose.yaml" OR "docker-compose.json"
intitle:"index of" "dockerfile"
intitle:"index of" "makefile"
intitle:"index of" ".npmrc" OR ".yarnrc" OR ".bower.rc" OR ".bowerrc"
intitle:"index of" ".env" OR ".env.local" OR ".env.development" OR ".env.test" OR ".env.production"
intitle:"index of" "composer.json" OR "composer.lock"
intitle:"index of" "package.json" OR "package-lock.json" OR "yarn.lock"
intitle:"index of" "nuget.config"
intitle:"index of" "gradle.properties" OR "gradlew"
intitle:"index of" "local.settings.json"
intitle:"index of" "secrets.json"
intitle:"index of" "appsettings.json" OR "appsettings.production.json" OR "appsettings.development.json" OR "appsettings.staging.json"
intitle:"index of" "secrets.properties"
intitle:"index of" "application.properties" OR "application-dev.properties" OR "application-test.properties" OR "application-prod.properties"
intitle:"index of" "server.xml" OR "context.xml" OR "web.xml" OR "tomcat-users.xml" OR "tomcat-users.xsd" OR "tomcat-users.dtd" OR "catalina.properties" OR "catalina.policy" OR "logging.properties"
intitle:"index of" "security.properties" OR "oim-config.xml" OR "oim-config-env.xml" OR "jps-config.xml"
intitle:"index of" intext:credentials OR passwords OR usernames
filetype:sql intext:password
intitle:"index of" intext:db.inc
inurl:/wp-content/uploads/ intitle:index.of intext:config
inurl:"wp-config.php" intext:DB_PASSWORD -stackoverflow -github
intitle:"index of" intext:.env
intext:"-----BEGIN PRIVATE KEY-----" filetype:key
inurl:wp-config-backups/ intitle:index.of "wp-config.php"
filetype:json inurl:config.json password -github
inurl:admin intitle:"admin panel" +intext:"username" +intext:"password"
intitle:"index of" intext:"secring.skr" | intext:"pubring.pkr" | intext:"secring.gpg" | intext:"pubring.gpg"
intitle:"index of" "secrets.yml" OR "secrets.json" OR "secrets.yaml"
inurl:"auth.json" ext:json
intitle:"index of" intext:web.config
intitle:"index of" "application.properties" OR "application.yml" OR "application.yaml"
intitle:"index of" "serviceAccount.json"
filetype:pem "PRIVATE KEY" -github
inurl:admin intitle:index.of config.php
intitle:"index of" intext:firebase.json
