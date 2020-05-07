# Vagrant DNS Lab

A Bind's DNS lab with Vagrant and Ansible, based on CentOS 7.

# Playground

<code>
    vagrant ssh client
</code>

  * zones: dns.lab, reverse dns.lab and ddns.lab
  * ns01 (192.168.50.10)
    * master, recursive, allows update to ddns.lab
  * client (192.168.50.15)
    * used to test the env, runs rndc and nsupdate
  * client2 (192.168.50.16)
    * used to demonstrate split dns function
  * zone transfer: TSIG key

How to : 
vagrant ssh client 
ping web1.dns.lab (resolved)
ping web2.dns.lab (not resolved)
dig @192.168.50.10 www.newdns.lab (to address 15 and 16)

vagrant ssh client2 
ping web1.dns.lab (resolved)
ping web2.dns.lab (resolved)
dig @192.168.50.10 www.newdns.lab (not resolved )

Цель работы: 

Настроить бинд так, чтобы он отдавал разным клиентам разные данные. 

Решение: 

В bind есть acl и view, решить всё через них.
