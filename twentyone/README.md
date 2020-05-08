
# Домашнее задание 21. BIND
### Цель работы: 
настраиваем split-dns
взять стенд https://github.com/erlong15/vagrant-bind
добавить еще один сервер client2
завести в зоне dns.lab
имена
web1 - смотрит на клиент1
web2 смотрит на клиент2

### Выполено : 
vagrant ssh client 
ping web1.dns.lab (resolved)
ping web2.dns.lab (not resolved)
dig @192.168.50.10 www.newdns.lab (to address 15 and 16)

vagrant ssh client2 
ping web1.dns.lab (resolved)
ping web2.dns.lab (resolved)
dig @192.168.50.10 www.newdns.lab (not resolved )
```
06:39 mora@station~/git/otus_learning/twentyone# vagrant ssh client 
DEPRECATION: The 'sudo' option for the Ansible provisioner is deprecated.
Please use the 'become' option instead.
The 'sudo' option will be removed in a future release of Vagrant.

Last login: Fri May  8 03:38:01 2020 from 10.0.2.2
### Welcome to the DNS lab! ###

- Use this client to test the enviroment, with dig or nslookup.
    dig @192.168.50.10 ns01.dns.lab
    dig @192.168.50.11 -x 192.168.50.10

- nsupdate is available in the ddns.lab zone. Ex:
    nsupdate -k /etc/named.zonetransfer.key
    server 192.168.50.10
    zone ddns.lab 
    update add www.ddns.lab. 60 A 192.168.50.15
    send

- rndc is also available to manage the servers
    rndc -c ~/rndc.conf reload

Enjoy!
[vagrant@client ~]$ ping web1.dns.lab
PING web1.dns.lab (192.168.50.15) 56(84) bytes of data.
64 bytes from client (192.168.50.15): icmp_seq=1 ttl=64 time=0.020 ms
64 bytes from client (192.168.50.15): icmp_seq=2 ttl=64 time=0.031 ms
^C
--- web1.dns.lab ping statistics ---
2 packets transmitted, 2 received, 0% packet loss, time 1002ms
rtt min/avg/max/mdev = 0.020/0.025/0.031/0.007 ms
[vagrant@client ~]$ ping web2.dns.lab
ping: web2.dns.lab: Name or service not known
[vagrant@client ~]$ dig @192.168.50.10 www.newdns.lab

; <<>> DiG 9.11.4-P2-RedHat-9.11.4-16.P2.el7_8.2 <<>> @192.168.50.10 www.newdns.lab
; (1 server found)
;; global options: +cmd
;; Got answer:
;; ->>HEADER<<- opcode: QUERY, status: NOERROR, id: 29435
;; flags: qr aa rd ra; QUERY: 1, ANSWER: 2, AUTHORITY: 2, ADDITIONAL: 3

;; OPT PSEUDOSECTION:
; EDNS: version: 0, flags:; udp: 4096
;; QUESTION SECTION:
;www.newdns.lab.			IN	A

;; ANSWER SECTION:
www.newdns.lab.		3600	IN	A	192.168.50.16
www.newdns.lab.		3600	IN	A	192.168.50.15

;; AUTHORITY SECTION:
newdns.lab.		3600	IN	NS	ns01.newdns.lab.
newdns.lab.		3600	IN	NS	ns02.newdns.lab.

;; ADDITIONAL SECTION:
ns01.newdns.lab.	3600	IN	A	192.168.50.10
ns02.newdns.lab.	3600	IN	A	192.168.50.11

;; Query time: 0 msec
;; SERVER: 192.168.50.10#53(192.168.50.10)
;; WHEN: Fri May 08 03:43:14 UTC 2020
;; MSG SIZE  rcvd: 145

[vagrant@client ~]$ exit
logout
Connection to 127.0.0.1 closed.
06:43 mora@station~/git/otus_learning/twentyone# vagrant ssh client2
DEPRECATION: The 'sudo' option for the Ansible provisioner is deprecated.
Please use the 'become' option instead.
The 'sudo' option will be removed in a future release of Vagrant.

Last login: Fri May  8 03:39:28 2020 from 10.0.2.2
### Welcome to the DNS lab! ###

- Use this client to test the enviroment, with dig or nslookup.
    dig @192.168.50.10 ns01.dns.lab
    dig @192.168.50.11 -x 192.168.50.10

- nsupdate is available in the ddns.lab zone. Ex:
    nsupdate -k /etc/named.zonetransfer.key
    server 192.168.50.10
    zone ddns.lab 
    update add www.ddns.lab. 60 A 192.168.50.15
    send

- rndc is also available to manage the servers
    rndc -c ~/rndc.conf reload

Enjoy!
[vagrant@client2 ~]$ ping web1.dns.lab
PING web1.dns.lab (192.168.50.15) 56(84) bytes of data.
64 bytes from 192.168.50.15 (192.168.50.15): icmp_seq=1 ttl=64 time=1.49 ms
64 bytes from 192.168.50.15 (192.168.50.15): icmp_seq=2 ttl=64 time=0.236 ms
^C
--- web1.dns.lab ping statistics ---
2 packets transmitted, 2 received, 0% packet loss, time 1008ms
rtt min/avg/max/mdev = 0.236/0.864/1.492/0.628 ms
[vagrant@client2 ~]$ ping web2.dns.lab
PING web2.dns.lab (192.168.50.16) 56(84) bytes of data.
64 bytes from client2 (192.168.50.16): icmp_seq=1 ttl=64 time=0.019 ms
64 bytes from client2 (192.168.50.16): icmp_seq=2 ttl=64 time=0.043 ms
^C
--- web2.dns.lab ping statistics ---
2 packets transmitted, 2 received, 0% packet loss, time 1005ms
rtt min/avg/max/mdev = 0.019/0.031/0.043/0.012 ms
[vagrant@client2 ~]$ dig @192.168.50.10 www.newdns.lab

; <<>> DiG 9.11.4-P2-RedHat-9.11.4-16.P2.el7_8.2 <<>> @192.168.50.10 www.newdns.lab
; (1 server found)
;; global options: +cmd
;; Got answer:
;; ->>HEADER<<- opcode: QUERY, status: NXDOMAIN, id: 16463
;; flags: qr rd ra; QUERY: 1, ANSWER: 0, AUTHORITY: 1, ADDITIONAL: 1

;; OPT PSEUDOSECTION:
; EDNS: version: 0, flags:; udp: 4096
;; QUESTION SECTION:
;www.newdns.lab.			IN	A

;; AUTHORITY SECTION:
.			10800	IN	SOA	a.root-servers.net. nstld.verisign-grs.com. 2020050702 1800 900 604800 86400

;; Query time: 241 msec
;; SERVER: 192.168.50.10#53(192.168.50.10)
;; WHEN: Fri May 08 03:43:41 UTC 2020
;; MSG SIZE  rcvd: 118
```

### Решение: 

В bind есть acl и view, решить всё через них.
```
acl "client1" {192.168.50.15/32;};
acl "client2" {192.168.50.16/32;};
view "client1" {

        // К этому виду имеют доступ все

        match-clients {"client1"; };
// lab's zone
zone "dns.lab" {
    type master;
    allow-transfer { key "zonetransfer.key"; };
    file "/etc/named/named.dns.lab.client1";
};
// new lab's zone
zone "newdns.lab" {
    type master;
    allow-transfer { key "zonetransfer.key"; };
    file "/etc/named/named.newdns.lab";
};
};
view "client2" {

        // К этому виду имеют доступ все

        match-clients {"client2"; };

// lab's zone
zone "dns.lab" {
    type master;
    allow-transfer { key "zonetransfer.key"; };
    file "/etc/named/named.dns.lab";
};
```
