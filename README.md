
### todo

```
$ docker-compose up -d app
$ docker-compose run app bash
```

```
root@3c7bb332c8be:/# cd app/
root@3c7bb332c8be:/app# ./composer.phar update
root@3c7bb332c8be:/app# ./vendor/bin/codecept run unit
```

### memo

```
root@3c7bb332c8be:/app# ./vendor/bin/codecept bootstrap
```

```
root@3c7bb332c8be:/app# vendor/bin/codecept generate:test unit Sample
```

