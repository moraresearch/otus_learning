# Домашнее задание 26. Развернуть InnoDB кластер в dockеr.

### Цель работы: 
в качестве ДЗ принимает репозиторий с docker-compose
который по кнопке разворачивает кластер и выдает порт наружу

### Выполнено: 
Поднимается стенд с вагрантом
#### vagrant up 
Переход в директорию с docker-compose.yml 
#### cd /vargrant 
Запуск docker-compose 
#### docker-compose up -d 
```
[root@docker vagrant]# docker-compose up -d 
Creating network "vagrant_front_net" with the default driver
Pulling node1 (hauptmedia/mariadb:10.1)...
10.1: Pulling from hauptmedia/mariadb
10a267c67f42: Pull complete
3f0e584500ba: Pull complete
aec8ad0b3a5b: Pull complete
00c66fbe9679: Pull complete
7eb06059bb28: Pull complete
1a1c1ecaf78c: Pull complete
9c5d5b4707d7: Pull complete
7676871d0bc4: Pull complete
3091c85d47f8: Pull complete
Digest: sha256:6cb22ae31007c23db18dbeaebaed538a9d555f3ac99b1d5a7cdcf30fc128b7e3
Status: Downloaded newer image for hauptmedia/mariadb:10.1
Creating node1 ... done
Creating node2 ... done
Creating node3 ... done
[root@docker vagrant]# docker ps 
CONTAINER ID        IMAGE                     COMMAND                  CREATED             STATUS              PORTS                                             NAMES
fe6529ef391b        hauptmedia/mariadb:10.1   "/entrypoint.sh mysq…"   9 seconds ago       Up 5 seconds        4444/tcp, 4567-4568/tcp, 0.0.0.0:2306->3306/tcp   node2
14ac0f9e90d1        hauptmedia/mariadb:10.1   "/entrypoint.sh mysq…"   9 seconds ago       Up 5 seconds        4444/tcp, 0.0.0.0:3306->3306/tcp, 4567-4568/tcp   node3
a282dd85c8da        hauptmedia/mariadb:10.1   "/entrypoint.sh --ws…"   9 seconds ago       Up 5 seconds        4444/tcp, 4567-4568/tcp, 0.0.0.0:1306->3306/tcp   node1
```
