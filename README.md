# Laravel this backend l80.ru

### Build and push
```shell
docker build -t breakhack/l80.ru .
docker push breakhack/l80.ru
```

### Run in server
```shell
HOST=l80.ru
docker pull breakhack/l80.ru:latest
docker rm -f $HOST
docker run -d \
  --restart always \
  --name $HOST \
  -v app:/var/www/html/storage/app \
  -e VIRTUAL_HOST=$HOST \
  -e LETSENCRYPT_HOST=$HOST \
  breakhack/l80.ru:latest
docker network connect front $HOST
docker network connect databases $HOST
docker restart $HOST
```
