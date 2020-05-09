# Домашнее задание 27. Postgresql 
### Цели работы: 
- Настроить hot_standby репликацию с использованием слотов
- Настроить правильное резервное копирование
### Проверка: 
#### vagrant up 
#### vagrant ssh master 
#### sudo su 
#### sudo -u postgres psql -c 'SELECT * FROM pg_stat_replication s;'
```
[root@master vagrant]# sudo -u postgres psql -c 'SELECT * FROM pg_stat_replication s;'
could not change directory to "/home/vagrant": Permission denied
 pid  | usesysid |   usename   | application_name |  client_addr   | client_hostname | client_port |         backend_start         | backend_xmin |   state   | sent_lsn  | write_lsn | flush_lsn | replay_lsn | write_lag | flush_lag | repla
y_lag | sync_priority | sync_state 
------+----------+-------------+------------------+----------------+-----------------+-------------+-------------------------------+--------------+-----------+-----------+-----------+-----------+------------+-----------+-----------+------
------+---------------+------------
 5452 |    16384 | replication | walreceiver      | 192.168.11.102 |                 |       32984 | 2020-05-09 09:50:38.038362+00 |              | streaming | 0/3000060 | 0/3000060 | 0/3000060 | 0/3000060  |           |           |      
      |             0 | async
(1 row)

```
#### Так проверяется коннект к мастеру
#### vagrant ssh slave 
#### ls /backup 
```
[root@slave vagrant]# ls /backup/
mydb.sql
```
#### Скрипт в кроне раз в минуту делает бэкап базы mydb 
