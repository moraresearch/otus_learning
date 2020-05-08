# Домашнее задание 29. Строим файловое хранилище на основе Linux
### Цель работы: 
Hастроить самбу и подключить автомонтирование к клиенту 

### Решение: развернуть две ноды(клиент сервер) 
    сервер) установить samba и настроить smb.conf 
    клиент) подключить автомонтирование через fstab 

### Проверка: 
####  1 vagrant up 
####  2 vagrant ssh client 
####  3 sudo su
####  4 df -h 
```
[root@client vagrant]# df -h 
Filesystem             Size  Used Avail Use% Mounted on
/dev/sda1               40G  2.9G   38G   8% /
devtmpfs               236M     0  236M   0% /dev
tmpfs                  244M     0  244M   0% /dev/shm
tmpfs                  244M  4.5M  240M   2% /run
tmpfs                  244M     0  244M   0% /sys/fs/cgroup
tmpfs                   49M     0   49M   0% /run/user/1000
//192.168.11.101/otus   40G  2.9G   38G   8% /mnt
```
####  5 cd /mnt/uploads
####  6 touch test 
```
[root@client vagrant]# touch /mnt/uploads/test 
[root@client vagrant]# ls /mnt/uploads/test 
/mnt/uploads/test
```

####  7 shutdown -r now 
####  8 vagrant ssh client 
####  9 df -h 
```
[root@client vagrant]# df -h 
Filesystem             Size  Used Avail Use% Mounted on
/dev/sda1               40G  2.9G   38G   8% /
devtmpfs               236M     0  236M   0% /dev
tmpfs                  244M     0  244M   0% /dev/shm
tmpfs                  244M  4.5M  240M   2% /run
tmpfs                  244M     0  244M   0% /sys/fs/cgroup
tmpfs                   49M     0   49M   0% /run/user/1000
//192.168.11.101/otus   40G  2.9G   38G   8% /mnt
``` 

### Так проверяется примонтирована ли самба (4) 
### проверяется можно ли в неё писать (6) и 
### монтируется ли она после перезагрузки (9)
