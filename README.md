# php-fpm-nginx-mongo-yii2
`docker-compose.yml` file and structure to setup php-fpm, nginx, mongo &amp; yii2 


### Step  
1. check your docker `preferences->file sharing`. make sure you've set your mount volume. Make sure to clone this repo under that particular volume. if not, you wont be able to create mount volume when run `docker-compose up`
![Alt text](/php-fpm-nginx-mongo-yii2/readme/img/sc1.png?raw=true "Docker Preferences")
2. run `docker-compose up -d`
3. default host is `http://www.statsdigital.local` ( frontend ) and `http://admin.statsdigital.local` ( backend ) . make sure to register host on your `/etc/hosts` for mac and linux and `C:\Windows\System32\Drivers\etc\hosts` for windows . 
```sh
127.0.0.1 www.statsdigital.local admin.statsdigital.local
```
4. mongodb access `localhost:27020`
5. to use gii
```sh
http://www.statsdigital.local/gii
http://admin.statsdigital.local/gii
```
6. to stop docker compose
```sh
docker-compose stop
```
