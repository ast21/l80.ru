# Laravel this backend l80.ru

### Run in server
```shell
HOST=laravel.l80.ru
docker pull $HOST
docker rm -f $HOST
docker run -d \
  --restart always \
  --name $HOST \
  -v app:/var/www/html/storage/app \
  -e VIRTUAL_HOST=$HOST \
  breakhack/l80.ru:latest
docker network connect front $HOST
docker network connect databases $HOST
docker restart $HOST
```
