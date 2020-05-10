# Домашнее задание 28. Patroni cluster. 
### Цель работы: 
Развернуть кластер PostgreSQL из трех нод. Создать тестовую базу - проверить статус репликации - Сделать switchover/failover - Поменять конфигурацию PostgreSQL + с параметром требующим перезагрузки - Настроить клиентские подключения через HAProxy 

### Выполнено: 
#### vagrant up 
#### cd ansible 
#### ansible-playbook ./play 

### Проверка: 
В первую очередь есть веб морда по http://192.168.11.110
Там стaтистика haproxy и сразу видно кто мастер (он подписан UP) 
подключаться к кластеру через 
#### psql -h192.168.11.110 -Upostgres 
#### password : postgres 
Тут можно создавать\удалять базы\таблицы\записи, потом выключать мастера(проверять переключение через haproxy)
и видеть все изменения на новый мастерах 

Проверить статус патрони 
```
09:07 mora@station~/git/otus_learning/twentyeight/ansible# ansible all -b -m shell -a 'systemctl status patroni   '
pgsql2 | CHANGED | rc=0 >>
● patroni.service - Runners to orchestrate a high-availability PostgreSQL
   Loaded: loaded (/etc/systemd/system/patroni.service; disabled; vendor preset: disabled)
   Active: active (running) since Sun 2020-05-10 06:07:38 UTC; 3min 3s ago
 Main PID: 6042 (patroni)
   CGroup: /system.slice/patroni.service
           ├─6042 /usr/bin/python3 /usr/local/bin/patroni /etc/patroni.yml
           ├─6069 /usr/pgsql-9.6/bin/postgres -D /data/patroni --config-file=/data/patroni/postgresql.conf --listen_addresses=192.168.11.102 --port=5432 --cluster_name=pgsql --wal_level=replica --hot_standby=on --max_connections=100 --max_wal_senders=5 --max_prepared_transactions=0 --max_locks_per_transaction=64 --track_commit_timestamp=off --max_replication_slots=5 --max_worker_processes=8 --wal_log_hints=on
           ├─6071 postgres: pgsql: logger process                                                                                                                                                                                                                                                                                                                                                                           
           ├─6072 postgres: pgsql: startup process   recovering 000000010000000000000005                                                                                                                                                                                                                                                                                                                                    
           ├─6076 postgres: pgsql: checkpointer process                                                                                                                                                                                                                                                                                                                                                                     
           ├─6077 postgres: pgsql: writer process                                                                                                                                                                                                                                                                                                                                                                           
           ├─6078 postgres: pgsql: stats collector process                                                                                                                                                                                                                                                                                                                                                                  
           ├─6084 postgres: pgsql: postgres postgres 192.168.11.102(51396) idle                                                                                                                                                                                                                                                                                                                                             
           └─6086 postgres: pgsql: wal receiver process   streaming 0/5000140                                                                                                                                                                                                                                                                                                                                               

May 10 06:10:11 pgsql2 patroni[6042]: 2020-05-10 06:10:11,455 INFO: no action.  i am a secondary and i am following a leader
May 10 06:10:21 pgsql2 patroni[6042]: 2020-05-10 06:10:21,453 INFO: Lock owner: pgsql1; I am pgsql2
May 10 06:10:21 pgsql2 patroni[6042]: 2020-05-10 06:10:21,453 INFO: does not have lock
May 10 06:10:21 pgsql2 patroni[6042]: 2020-05-10 06:10:21,460 INFO: no action.  i am a secondary and i am following a leader
May 10 06:10:31 pgsql2 patroni[6042]: 2020-05-10 06:10:31,452 INFO: Lock owner: pgsql1; I am pgsql2
May 10 06:10:31 pgsql2 patroni[6042]: 2020-05-10 06:10:31,452 INFO: does not have lock
May 10 06:10:31 pgsql2 patroni[6042]: 2020-05-10 06:10:31,458 INFO: no action.  i am a secondary and i am following a leader
May 10 06:10:41 pgsql2 patroni[6042]: 2020-05-10 06:10:41,503 INFO: Lock owner: pgsql1; I am pgsql2
May 10 06:10:41 pgsql2 patroni[6042]: 2020-05-10 06:10:41,503 INFO: does not have lock
May 10 06:10:41 pgsql2 patroni[6042]: 2020-05-10 06:10:41,554 INFO: no action.  i am a secondary and i am following a leader
pgsql1 | CHANGED | rc=0 >>
● patroni.service - Runners to orchestrate a high-availability PostgreSQL
   Loaded: loaded (/etc/systemd/system/patroni.service; disabled; vendor preset: disabled)
   Active: active (running) since Sun 2020-05-10 06:07:28 UTC; 3min 13s ago
 Main PID: 27171 (patroni)
   CGroup: /system.slice/patroni.service
           ├─27171 /usr/bin/python3 /usr/local/bin/patroni /etc/patroni.yml
           ├─27208 /usr/pgsql-9.6/bin/postgres -D /data/patroni --config-file=/data/patroni/postgresql.conf --listen_addresses=192.168.11.101 --port=5432 --cluster_name=pgsql --wal_level=replica --hot_standby=on --max_connections=100 --max_wal_senders=5 --max_prepared_transactions=0 --max_locks_per_transaction=64 --track_commit_timestamp=off --max_replication_slots=5 --max_worker_processes=8 --wal_log_hints=on
           ├─27210 postgres: pgsql: logger process                                                                                                                                                                                                                                                                                                                                                                           
           ├─27215 postgres: pgsql: checkpointer process                                                                                                                                                                                                                                                                                                                                                                     
           ├─27216 postgres: pgsql: writer process                                                                                                                                                                                                                                                                                                                                                                           
           ├─27217 postgres: pgsql: wal writer process                                                                                                                                                                                                                                                                                                                                                                       
           ├─27218 postgres: pgsql: autovacuum launcher process                                                                                                                                                                                                                                                                                                                                                              
           ├─27219 postgres: pgsql: stats collector process                                                                                                                                                                                                                                                                                                                                                                  
           ├─27222 postgres: pgsql: postgres postgres 192.168.11.101(44762) idle                                                                                                                                                                                                                                                                                                                                             
           ├─27231 postgres: pgsql: wal sender process postgres 192.168.11.102(41540) streaming 0/5000140                                                                                                                                                                                                                                                                                                                    
           └─27337 postgres: pgsql: wal sender process postgres 192.168.11.103(42702) streaming 0/5000140                                                                                                                                                                                                                                                                                                                    

May 10 06:10:01 pgsql1 patroni[27171]: 2020-05-10 06:10:01,443 INFO: Lock owner: pgsql1; I am pgsql1
May 10 06:10:01 pgsql1 patroni[27171]: 2020-05-10 06:10:01,451 INFO: no action.  i am the leader with the lock
May 10 06:10:11 pgsql1 patroni[27171]: 2020-05-10 06:10:11,442 INFO: Lock owner: pgsql1; I am pgsql1
May 10 06:10:11 pgsql1 patroni[27171]: 2020-05-10 06:10:11,466 INFO: no action.  i am the leader with the lock
May 10 06:10:21 pgsql1 patroni[27171]: 2020-05-10 06:10:21,442 INFO: Lock owner: pgsql1; I am pgsql1
May 10 06:10:21 pgsql1 patroni[27171]: 2020-05-10 06:10:21,463 INFO: no action.  i am the leader with the lock
May 10 06:10:31 pgsql1 patroni[27171]: 2020-05-10 06:10:31,442 INFO: Lock owner: pgsql1; I am pgsql1
May 10 06:10:31 pgsql1 patroni[27171]: 2020-05-10 06:10:31,458 INFO: no action.  i am the leader with the lock
May 10 06:10:41 pgsql1 patroni[27171]: 2020-05-10 06:10:41,451 INFO: Lock owner: pgsql1; I am pgsql1
May 10 06:10:41 pgsql1 patroni[27171]: 2020-05-10 06:10:41,568 INFO: no action.  i am the leader with the lock
pgsql3 | CHANGED | rc=0 >>
● patroni.service - Runners to orchestrate a high-availability PostgreSQL
   Loaded: loaded (/etc/systemd/system/patroni.service; disabled; vendor preset: disabled)
   Active: active (running) since Sun 2020-05-10 06:10:07 UTC; 33s ago
 Main PID: 6215 (patroni)
   CGroup: /system.slice/patroni.service
           ├─6215 /usr/bin/python3 /usr/local/bin/patroni /etc/patroni.yml
           ├─6230 /usr/pgsql-9.6/bin/postgres -D /data/patroni --config-file=/data/patroni/postgresql.conf --listen_addresses=192.168.11.103 --port=5432 --cluster_name=pgsql --wal_level=replica --hot_standby=on --max_connections=100 --max_wal_senders=5 --max_prepared_transactions=0 --max_locks_per_transaction=64 --track_commit_timestamp=off --max_replication_slots=5 --max_worker_processes=8 --wal_log_hints=on
           ├─6232 postgres: pgsql: logger process                                                                                                                                                                                                                                                                                                                                                                           
           ├─6233 postgres: pgsql: startup process   recovering 000000010000000000000005                                                                                                                                                                                                                                                                                                                                    
           ├─6234 postgres: pgsql: checkpointer process                                                                                                                                                                                                                                                                                                                                                                     
           ├─6235 postgres: pgsql: writer process                                                                                                                                                                                                                                                                                                                                                                           
           ├─6236 postgres: pgsql: stats collector process                                                                                                                                                                                                                                                                                                                                                                  
           ├─6244 postgres: pgsql: postgres postgres 192.168.11.103(38266) idle                                                                                                                                                                                                                                                                                                                                             
           └─6249 postgres: pgsql: wal receiver process   streaming 0/5000140                                                                                                                                                                                                                                                                                                                                               

May 10 06:10:11 pgsql3 patroni[6215]: 2020-05-10 06:10:11,456 INFO: no action.  i am a secondary and i am following a leader
May 10 06:10:21 pgsql3 patroni[6215]: 2020-05-10 06:10:21,450 INFO: Lock owner: pgsql1; I am pgsql3
May 10 06:10:21 pgsql3 patroni[6215]: 2020-05-10 06:10:21,450 INFO: does not have lock
May 10 06:10:21 pgsql3 patroni[6215]: 2020-05-10 06:10:21,457 INFO: no action.  i am a secondary and i am following a leader
May 10 06:10:31 pgsql3 patroni[6215]: 2020-05-10 06:10:31,450 INFO: Lock owner: pgsql1; I am pgsql3
May 10 06:10:31 pgsql3 patroni[6215]: 2020-05-10 06:10:31,450 INFO: does not have lock
May 10 06:10:31 pgsql3 patroni[6215]: 2020-05-10 06:10:31,458 INFO: no action.  i am a secondary and i am following a leader
May 10 06:10:41 pgsql3 patroni[6215]: 2020-05-10 06:10:41,492 INFO: Lock owner: pgsql1; I am pgsql3
May 10 06:10:41 pgsql3 patroni[6215]: 2020-05-10 06:10:41,492 INFO: does not have lock
May 10 06:10:41 pgsql3 patroni[6215]: 2020-05-10 06:10:41,501 INFO: no action.  i am a secondary and i am following a leader
```
