### Цель работы: 
Понять принцип работы multicast
Настраивать статическую и динамическую маршрутизацию
Понять принципы работы протоколов OSPF и BGP
Получить навыки настройки протоколов динамической маршрутизации в программных маршрутизаторах Quagga, FRR и BIRD

#### 1) настроить симметричный ospf 
#### 2) настроить ассиметричный ospf 
#### 3) настроить симметричный ospf с разной стоимостью  

### Решение: 
#### 1) настроить quagga c равными cost 
#### 2) настроить quagga с уеличенным cost на одном из "тоннелей"
#### 3) настроить quagga с не сильно отличающейся стоимостью 


### Результаты

После занятия участники смогут настроить статическую и динамическую маршрутизацию между сетями

### Проверка: 
#### 1) ip r (на каждой машине чтобы увидеть что добавились маршруты и ospf завелся); cat /etc/quagga/ospfd.conf (так же на каждой машине чтобы увидеть что косты везде одни)
```
06:28 mora@station~/git/otus_learning/twenty/first# vagrant ssh r1 
[vagrant@r1 ~]$ ip r 
default via 10.0.2.2 dev eth0 proto dhcp metric 100 
10.0.2.0/24 dev eth0 proto kernel scope link src 10.0.2.15 metric 100 
10.10.1.0/24 dev eth1 proto kernel scope link src 10.10.1.11 metric 101 
10.10.2.0/24 dev eth2 proto kernel scope link src 10.10.2.11 metric 102 
10.10.3.0/24 proto zebra metric 60 
	nexthop via 10.10.1.13 dev eth1 weight 1 
	nexthop via 10.10.2.12 dev eth2 weight 1 
[vagrant@r1 ~]$ exit
logout
Connection to 127.0.0.1 closed.
06:29 mora@station~/git/otus_learning/twenty/first# vagrant ssh r2
[vagrant@r2 ~]$ ip r 
default via 10.0.2.2 dev eth0 proto dhcp metric 100 
10.0.2.0/24 dev eth0 proto kernel scope link src 10.0.2.15 metric 100 
10.10.1.0/24 proto zebra metric 60 
	nexthop via 10.10.2.11 dev eth1 weight 1 
	nexthop via 10.10.3.13 dev eth2 weight 1 
10.10.2.0/24 dev eth1 proto kernel scope link src 10.10.2.12 metric 101 
10.10.3.0/24 dev eth2 proto kernel scope link src 10.10.3.12 metric 102 
[vagrant@r2 ~]$ exit
logout
Connection to 127.0.0.1 closed.
06:29 mora@station~/git/otus_learning/twenty/first# vagrant ssh r3
[vagrant@r3 ~]$ ip r 
default via 10.0.2.2 dev eth0 proto dhcp metric 100 
10.0.2.0/24 dev eth0 proto kernel scope link src 10.0.2.15 metric 100 
10.10.1.0/24 dev eth1 proto kernel scope link src 10.10.1.13 metric 101 
10.10.2.0/24 proto zebra metric 60 
	nexthop via 10.10.1.11 dev eth1 weight 1 
	nexthop via 10.10.3.12 dev eth2 weight 1 
10.10.3.0/24 dev eth2 proto kernel scope link src 10.10.3.13 metric 102 
[vagrant@r3 ~]$ exit
logout
```
#### 2) то же самое что в 1) только косты на одном из тоннелей будут увеличены
#### 3) проверка такая же
