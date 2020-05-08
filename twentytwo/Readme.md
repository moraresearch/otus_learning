# Домашнее задание 22. docker + ddos
### Цели работы: 
Разобраться в базовых принципах конфигурирования nginx. Рассмотреть хорошие\плохие практики конфигурирования, настройки ssl.
### Выполнено: 
docker run -d -p 80:80 moraresearch/22 ; curl http://localhost/otus.txt
```
[root@docker vagrant]# docker run -d -p 80:80 moraresearch/22 ; curl http://localhost/otus.txt
Unable to find image 'moraresearch/22:latest' locally
latest: Pulling from moraresearch/22
cbdbe7a5bc2a: Pull complete 
c554c602ff32: Pull complete 
4e70434b442a: Pull complete 
3fc9f1cdd0dd: Pull complete 
d1155bf10dea: Pull complete 
Digest: sha256:535625940ea5c6d4cf380d228869e37fd4539ab0e5f27797af2a33f51cc1a177
Status: Downloaded newer image for moraresearch/22:latest
3d540602271e66cc0451bced36775f9fcd5e7a6f87564ed121806178502b9777
<html>
<head><title>302 Found</title></head>
<body>
<center><h1>302 Found</h1></center>
<hr><center>nginx/1.17.10</center>
</body>
</html>
[root@docker vagrant]# docker ps 
CONTAINER ID        IMAGE               COMMAND                  CREATED             STATUS              PORTS                NAMES
3d540602271e        moraresearch/22     "nginx -g 'daemon of…"   56 seconds ago      Up 55 seconds       0.0.0.0:80->80/tcp   mystifying_chaum

```

