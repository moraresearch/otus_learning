# Домашнее задание 23. Динамический веб контент
### Цель работы: 
#### Развернуть wp/php + flask/python

### Решение: 
#### Статейки в интернетах

Проверка:
#### vagrant up 
#### Зайти через браузер http:192.168.11.101(кое как flask завелся) , http://192.168.11.101:81 (с wp никаких проблем не было, удивила центось которая по дефолту пихает пыху 5.4) 
```
07:12 mora@station~/git/otus_learning/twentythree# vagrant up 
Bringing machine 'flask' up with 'virtualbox' provider...
Bringing machine 'wordpress' up with 'virtualbox' provider...
==> flask: Importing base box 'centos/7'...
==> flask: Matching MAC address for NAT networking...
==> flask: Checking if box 'centos/7' version '1905.1' is up to date...
==> flask: Setting the name of the VM: twentythree_flask_1588911165765_91599
==> flask: Clearing any previously set network interfaces...
==> flask: Preparing network interfaces based on configuration...
    flask: Adapter 1: nat
    flask: Adapter 2: hostonly
==> flask: Forwarding ports...
    flask: 22 (guest) => 2222 (host) (adapter 1)
==> flask: Booting VM...
==> flask: Waiting for machine to boot. This may take a few minutes...
    flask: SSH address: 127.0.0.1:2222
    flask: SSH username: vagrant
    flask: SSH auth method: private key
    flask: 
    flask: Vagrant insecure key detected. Vagrant will automatically replace
    flask: this with a newly generated keypair for better security.
    flask: 
    flask: Inserting generated public key within guest...
    flask: Removing insecure key from the guest if it's present...
    flask: Key inserted! Disconnecting and reconnecting using new SSH key...
==> flask: Machine booted and ready!
==> flask: Checking for guest additions in VM...
    flask: No guest additions were detected on the base box for this VM! Guest
    flask: additions are required for forwarded ports, shared folders, host only
    flask: networking, and more. If SSH fails on this machine, please install
    flask: the guest additions and repackage the box to continue.
    flask: 
    flask: This is not an error message; everything may continue to work properly,
    flask: in which case you may ignore this message.
==> flask: Setting hostname...
==> flask: Configuring and enabling network interfaces...
==> flask: Rsyncing folder: /home/mora/git/otus_learning/twentythree/ => /vagrant
==> flask: Running provisioner: shell...
    flask: Running: inline script
    flask: Loaded plugins: fastestmirror
    flask: Determining fastest mirrors
    flask:  * base: centos.schlundtech.de
    flask:  * extras: ftp.rz.uni-frankfurt.de
    flask:  * updates: linux.darkpenguin.net
    flask: Resolving Dependencies
    flask: --> Running transaction check
    flask: ---> Package epel-release.noarch 0:7-11 will be installed
    flask: --> Finished Dependency Resolution
    flask: 
    flask: Dependencies Resolved
    flask: 
    flask: ================================================================================
    flask:  Package                Arch             Version         Repository        Size
    flask: ================================================================================
    flask: Installing:
    flask:  epel-release           noarch           7-11            extras            15 k
    flask: 
    flask: Transaction Summary
    flask: ================================================================================
    flask: Install  1 Package
    flask: 
    flask: Total download size: 15 k
    flask: Installed size: 24 k
    flask: Downloading packages:
    flask: Public key for epel-release-7-11.noarch.rpm is not installed
    flask: warning: /var/cache/yum/x86_64/7/extras/packages/epel-release-7-11.noarch.rpm: Header V3 RSA/SHA256 Signature, key ID f4a80eb5: NOKEY
    flask: Retrieving key from file:///etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-7
    flask: Importing GPG key 0xF4A80EB5:
    flask:  Userid     : "CentOS-7 Key (CentOS 7 Official Signing Key) <security@centos.org>"
    flask:  Fingerprint: 6341 ab27 53d7 8a78 a7c2 7bb1 24c6 a8a7 f4a8 0eb5
    flask:  Package    : centos-release-7-6.1810.2.el7.centos.x86_64 (@anaconda)
    flask:  From       : /etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-7
    flask: Running transaction check
    flask: Running transaction test
    flask: Transaction test succeeded
    flask: Running transaction
    flask:   Installing : epel-release-7-11.noarch                                     1/1
    flask:  
    flask:   Verifying  : epel-release-7-11.noarch                                     1/1
    flask:  
    flask: 
    flask: Installed:
    flask:   epel-release.noarch 0:7-11                                                    
    flask: 
    flask: Complete!
    flask: Loaded plugins: fastestmirror
    flask: Loading mirror speeds from cached hostfile
    flask:  * base: centos.schlundtech.de
    flask:  * epel: ftp-stud.hs-esslingen.de
    flask:  * extras: ftp.rz.uni-frankfurt.de
    flask:  * updates: linux.darkpenguin.net
    flask: Resolving Dependencies
    flask: --> Running transaction check
    flask: ---> Package centos-release-scl.noarch 0:2-3.el7.centos will be installed
    flask: --> Processing Dependency: centos-release-scl-rh for package: centos-release-scl-2-3.el7.centos.noarch
    flask: --> Running transaction check
    flask: ---> Package centos-release-scl-rh.noarch 0:2-3.el7.centos will be installed
    flask: --> Finished Dependency Resolution
    flask: 
    flask: Dependencies Resolved
    flask: 
    flask: ================================================================================
    flask:  Package                    Arch        Version               Repository   Size
    flask: ================================================================================
    flask: Installing:
    flask:  centos-release-scl         noarch      2-3.el7.centos        extras       12 k
    flask: Installing for dependencies:
    flask:  centos-release-scl-rh      noarch      2-3.el7.centos        extras       12 k
    flask: 
    flask: Transaction Summary
    flask: ================================================================================
    flask: Install  1 Package (+1 Dependent package)
    flask: Total download size: 24 k
    flask: Installed size: 39 k
    flask: Downloading packages:
    flask: --------------------------------------------------------------------------------
    flask: Total                                              115 kB/s |  24 kB  00:00     
    flask: Running transaction check
    flask: Running transaction test
    flask: Transaction test succeeded
    flask: Running transaction
    flask:   Installing : centos-release-scl-rh-2-3.el7.centos.noarch                  1/2
    flask:  
    flask:   Installing : centos-release-scl-2-3.el7.centos.noarch                     2/2
    flask:  
    flask:   Verifying  : centos-release-scl-2-3.el7.centos.noarch                     1/2
    flask:  
    flask:   Verifying  : centos-release-scl-rh-2-3.el7.centos.noarch                  2/2
    flask:  
    flask: 
    flask: Installed:
    flask:   centos-release-scl.noarch 0:2-3.el7.centos                                    
    flask: 
    flask: Dependency Installed:
    flask:   centos-release-scl-rh.noarch 0:2-3.el7.centos                                 
    flask: 
    flask: Complete!
    flask: Loaded plugins: fastestmirror
    flask: Loading mirror speeds from cached hostfile
    flask:  * base: centos.schlundtech.de
    flask:  * centos-sclo-rh: ftp.plusline.net
    flask:  * centos-sclo-sclo: mirror.23media.com
    flask:  * epel: mirror.de.leaseweb.net
    flask:  * extras: ftp.rz.uni-frankfurt.de
    flask:  * updates: linux.darkpenguin.net
    flask: Resolving Dependencies
    flask: --> Running transaction check
    flask: ---> Package nginx.x86_64 1:1.16.1-1.el7 will be installed
    flask: --> Processing Dependency: nginx-all-modules = 1:1.16.1-1.el7 for package: 1:nginx-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: nginx-filesystem = 1:1.16.1-1.el7 for package: 1:nginx-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: nginx-filesystem for package: 1:nginx-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: redhat-indexhtml for package: 1:nginx-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: system-logos for package: 1:nginx-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: libprofiler.so.0()(64bit) for package: 1:nginx-1.16.1-1.el7.x86_64
    flask: ---> Package rh-python36.x86_64 0:2.0-1.el7 will be installed
    flask: --> Processing Dependency: rh-python36-runtime for package: rh-python36-2.0-1.el7.x86_64
    flask: --> Processing Dependency: rh-python36-python for package: rh-python36-2.0-1.el7.x86_64
    flask: --> Processing Dependency: rh-python36-python-pip for package: rh-python36-2.0-1.el7.x86_64
    flask: --> Processing Dependency: rh-python36-python-setuptools for package: rh-python36-2.0-1.el7.x86_64
    flask: --> Processing Dependency: rh-python36-python-virtualenv for package: rh-python36-2.0-1.el7.x86_64
    flask: --> Running transaction check
    flask: ---> Package centos-indexhtml.noarch 0:7-9.el7.centos will be installed
    flask: ---> Package centos-logos.noarch 0:70.0.6-3.el7.centos will be installed
    flask: ---> Package gperftools-libs.x86_64 0:2.6.1-1.el7 will be installed
    flask: ---> Package nginx-all-modules.noarch 1:1.16.1-1.el7 will be installed
    flask: --> Processing Dependency: nginx-mod-http-image-filter = 1:1.16.1-1.el7 for package: 1:nginx-all-modules-1.16.1-1.el7.noarch
    flask: --> Processing Dependency: nginx-mod-http-perl = 1:1.16.1-1.el7 for package: 1:nginx-all-modules-1.16.1-1.el7.noarch
    flask: --> Processing Dependency: nginx-mod-http-xslt-filter = 1:1.16.1-1.el7 for package: 1:nginx-all-modules-1.16.1-1.el7.noarch
    flask: --> Processing Dependency: nginx-mod-mail = 1:1.16.1-1.el7 for package: 1:nginx-all-modules-1.16.1-1.el7.noarch
    flask: --> Processing Dependency: nginx-mod-stream = 1:1.16.1-1.el7 for package: 1:nginx-all-modules-1.16.1-1.el7.noarch
    flask: ---> Package nginx-filesystem.noarch 1:1.16.1-1.el7 will be installed
    flask: ---> Package rh-python36-python.x86_64 0:3.6.9-2.el7 will be installed
    flask: --> Processing Dependency: rh-python36-python-libs(x86-64) = 3.6.9-2.el7 for package: rh-python36-python-3.6.9-2.el7.x86_64
    flask: --> Processing Dependency: libpython3.6m.so.rh-python36-1.0()(64bit) for package: rh-python36-python-3.6.9-2.el7.x86_64
    flask: ---> Package rh-python36-python-pip.noarch 0:9.0.1-2.el7 will be installed
    flask: ---> Package rh-python36-python-setuptools.noarch 0:36.5.0-1.el7 will be installed
    flask: ---> Package rh-python36-python-virtualenv.noarch 0:15.1.0-2.el7 will be installed
    flask: --> Processing Dependency: rh-python36-python-devel for package: rh-python36-python-virtualenv-15.1.0-2.el7.noarch
    flask: ---> Package rh-python36-runtime.x86_64 0:2.0-1.el7 will be installed
    flask: --> Processing Dependency: scl-utils for package: rh-python36-runtime-2.0-1.el7.x86_64
    flask: --> Running transaction check
    flask: ---> Package nginx-mod-http-image-filter.x86_64 1:1.16.1-1.el7 will be installed
    flask: --> Processing Dependency: gd for package: 1:nginx-mod-http-image-filter-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: libgd.so.2()(64bit) for package: 1:nginx-mod-http-image-filter-1.16.1-1.el7.x86_64
    flask: ---> Package nginx-mod-http-perl.x86_64 1:1.16.1-1.el7 will be installed
    flask: --> Processing Dependency: perl >= 5.006001 for package: 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: perl(:MODULE_COMPAT_5.16.3) for package: 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: perl(Exporter) for package: 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: perl(XSLoader) for package: 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: perl(constant) for package: 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: perl(strict) for package: 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: perl(warnings) for package: 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64
    flask: --> Processing Dependency: libperl.so()(64bit) for package: 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64
    flask: ---> Package nginx-mod-http-xslt-filter.x86_64 1:1.16.1-1.el7 will be installed
    flask: ---> Package nginx-mod-mail.x86_64 1:1.16.1-1.el7 will be installed
    flask: ---> Package nginx-mod-stream.x86_64 1:1.16.1-1.el7 will be installed
    flask: ---> Package rh-python36-python-devel.x86_64 0:3.6.9-2.el7 will be installed
    flask: --> Processing Dependency: scl-utils-build for package: rh-python36-python-devel-3.6.9-2.el7.x86_64
    flask: ---> Package rh-python36-python-libs.x86_64 0:3.6.9-2.el7 will be installed
    flask: ---> Package scl-utils.x86_64 0:20130529-19.el7 will be installed
    flask: --> Running transaction check
    flask: ---> Package gd.x86_64 0:2.0.35-26.el7 will be installed
    flask: --> Processing Dependency: libjpeg.so.62(LIBJPEG_6.2)(64bit) for package: gd-2.0.35-26.el7.x86_64
    flask: --> Processing Dependency: libjpeg.so.62()(64bit) for package: gd-2.0.35-26.el7.x86_64
    flask: --> Processing Dependency: libfontconfig.so.1()(64bit) for package: gd-2.0.35-26.el7.x86_64
    flask: --> Processing Dependency: libXpm.so.4()(64bit) for package: gd-2.0.35-26.el7.x86_64
    flask: --> Processing Dependency: libX11.so.6()(64bit) for package: gd-2.0.35-26.el7.x86_64
    flask: ---> Package perl.x86_64 4:5.16.3-295.el7 will be installed
    flask: --> Processing Dependency: perl(Socket) >= 1.3 for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Scalar::Util) >= 1.10 for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl-macros for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(threads::shared) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(threads) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Time::Local) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Time::HiRes) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Storable) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Socket) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Scalar::Util) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Pod::Simple::XHTML) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Pod::Simple::Search) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Getopt::Long) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Filter::Util::Call) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(File::Temp) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(File::Spec::Unix) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(File::Spec::Functions) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(File::Spec) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(File::Path) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Cwd) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: --> Processing Dependency: perl(Carp) for package: 4:perl-5.16.3-295.el7.x86_64
    flask: ---> Package perl-Exporter.noarch 0:5.68-3.el7 will be installed
    flask: ---> Package perl-constant.noarch 0:1.27-2.el7 will be installed
    flask: ---> Package perl-libs.x86_64 4:5.16.3-295.el7 will be installed
    flask: ---> Package scl-utils-build.x86_64 0:20130529-19.el7 will be installed
    flask: --> Processing Dependency: redhat-rpm-config for package: scl-utils-build-20130529-19.el7.x86_64
    flask: --> Processing Dependency: iso-codes for package: scl-utils-build-20130529-19.el7.x86_64
    flask: --> Running transaction check
    flask: ---> Package fontconfig.x86_64 0:2.13.0-4.3.el7 will be installed
    flask: --> Processing Dependency: fontpackages-filesystem for package: fontconfig-2.13.0-4.3.el7.x86_64
    flask: --> Processing Dependency: dejavu-sans-fonts for package: fontconfig-2.13.0-4.3.el7.x86_64
    flask: ---> Package iso-codes.noarch 0:3.46-2.el7 will be installed
    flask: --> Processing Dependency: xml-common for package: iso-codes-3.46-2.el7.noarch
    flask: ---> Package libX11.x86_64 0:1.6.7-2.el7 will be installed
    flask: --> Processing Dependency: libX11-common >= 1.6.7-2.el7 for package: libX11-1.6.7-2.el7.x86_64
    flask: --> Processing Dependency: libxcb.so.1()(64bit) for package: libX11-1.6.7-2.el7.x86_64
    flask: ---> Package libXpm.x86_64 0:3.5.12-1.el7 will be installed
    flask: ---> Package libjpeg-turbo.x86_64 0:1.2.90-8.el7 will be installed
    flask: ---> Package perl-Carp.noarch 0:1.26-244.el7 will be installed
    flask: ---> Package perl-File-Path.noarch 0:2.09-2.el7 will be installed
    flask: ---> Package perl-File-Temp.noarch 0:0.23.01-3.el7 will be installed
    flask: ---> Package perl-Filter.x86_64 0:1.49-3.el7 will be installed
    flask: ---> Package perl-Getopt-Long.noarch 0:2.40-3.el7 will be installed
    flask: --> Processing Dependency: perl(Pod::Usage) >= 1.14 for package: perl-Getopt-Long-2.40-3.el7.noarch
    flask: --> Processing Dependency: perl(Text::ParseWords) for package: perl-Getopt-Long-2.40-3.el7.noarch
    flask: ---> Package perl-PathTools.x86_64 0:3.40-5.el7 will be installed
    flask: ---> Package perl-Pod-Simple.noarch 1:3.28-4.el7 will be installed
    flask: --> Processing Dependency: perl(Pod::Escapes) >= 1.04 for package: 1:perl-Pod-Simple-3.28-4.el7.noarch
    flask: --> Processing Dependency: perl(Encode) for package: 1:perl-Pod-Simple-3.28-4.el7.noarch
    flask: ---> Package perl-Scalar-List-Utils.x86_64 0:1.27-248.el7 will be installed
    flask: ---> Package perl-Socket.x86_64 0:2.010-5.el7 will be installed
    flask: ---> Package perl-Storable.x86_64 0:2.45-3.el7 will be installed
    flask: ---> Package perl-Time-HiRes.x86_64 4:1.9725-3.el7 will be installed
    flask: ---> Package perl-Time-Local.noarch 0:1.2300-2.el7 will be installed
    flask: ---> Package perl-macros.x86_64 4:5.16.3-295.el7 will be installed
    flask: ---> Package perl-threads.x86_64 0:1.87-4.el7 will be installed
    flask: ---> Package perl-threads-shared.x86_64 0:1.43-6.el7 will be installed
    flask: ---> Package redhat-rpm-config.noarch 0:9.1.0-88.el7.centos will be installed
    flask: --> Processing Dependency: dwz >= 0.4 for package: redhat-rpm-config-9.1.0-88.el7.centos.noarch
    flask: --> Processing Dependency: zip for package: redhat-rpm-config-9.1.0-88.el7.centos.noarch
    flask: --> Processing Dependency: python-srpm-macros for package: redhat-rpm-config-9.1.0-88.el7.centos.noarch
    flask: --> Processing Dependency: perl-srpm-macros for package: redhat-rpm-config-9.1.0-88.el7.centos.noarch
    flask: --> Running transaction check
    flask: ---> Package dejavu-sans-fonts.noarch 0:2.33-6.el7 will be installed
    flask: --> Processing Dependency: dejavu-fonts-common = 2.33-6.el7 for package: dejavu-sans-fonts-2.33-6.el7.noarch
    flask: ---> Package dwz.x86_64 0:0.11-3.el7 will be installed
    flask: ---> Package fontpackages-filesystem.noarch 0:1.44-8.el7 will be installed
    flask: ---> Package libX11-common.noarch 0:1.6.7-2.el7 will be installed
    flask: ---> Package libxcb.x86_64 0:1.13-1.el7 will be installed
    flask: --> Processing Dependency: libXau.so.6()(64bit) for package: libxcb-1.13-1.el7.x86_64
    flask: ---> Package perl-Encode.x86_64 0:2.51-7.el7 will be installed
    flask: ---> Package perl-Pod-Escapes.noarch 1:1.04-295.el7 will be installed
    flask: ---> Package perl-Pod-Usage.noarch 0:1.63-3.el7 will be installed
    flask: --> Processing Dependency: perl(Pod::Text) >= 3.15 for package: perl-Pod-Usage-1.63-3.el7.noarch
    flask: --> Processing Dependency: perl-Pod-Perldoc for package: perl-Pod-Usage-1.63-3.el7.noarch
    flask: ---> Package perl-Text-ParseWords.noarch 0:3.29-4.el7 will be installed
    flask: ---> Package perl-srpm-macros.noarch 0:1-8.el7 will be installed
    flask: ---> Package python-srpm-macros.noarch 0:3-32.el7 will be installed
    flask: ---> Package xml-common.noarch 0:0.6.3-39.el7 will be installed
    flask: ---> Package zip.x86_64 0:3.0-11.el7 will be installed
    flask: --> Running transaction check
    flask: ---> Package dejavu-fonts-common.noarch 0:2.33-6.el7 will be installed
    flask: ---> Package libXau.x86_64 0:1.0.8-2.1.el7 will be installed
    flask: ---> Package perl-Pod-Perldoc.noarch 0:3.20-4.el7 will be installed
    flask: --> Processing Dependency: perl(parent) for package: perl-Pod-Perldoc-3.20-4.el7.noarch
    flask: --> Processing Dependency: perl(HTTP::Tiny) for package: perl-Pod-Perldoc-3.20-4.el7.noarch
    flask: ---> Package perl-podlators.noarch 0:2.5.1-3.el7 will be installed
    flask: --> Running transaction check
    flask: ---> Package perl-HTTP-Tiny.noarch 0:0.033-3.el7 will be installed
    flask: ---> Package perl-parent.noarch 1:0.225-244.el7 will be installed
    flask: --> Finished Dependency Resolution
    flask: 
    flask: Dependencies Resolved
    flask: 
    flask: ================================================================================
    flask:  Package                       Arch   Version              Repository      Size
    flask: ================================================================================
    flask: Installing:
    flask:  nginx                         x86_64 1:1.16.1-1.el7       epel           562 k
    flask:  rh-python36                   x86_64 2.0-1.el7            centos-sclo-rh 2.7 k
    flask: Installing for dependencies:
    flask:  centos-indexhtml              noarch 7-9.el7.centos       base            92 k
    flask:  centos-logos                  noarch 70.0.6-3.el7.centos  base            21 M
    flask:  dejavu-fonts-common           noarch 2.33-6.el7           base            64 k
    flask:  dejavu-sans-fonts             noarch 2.33-6.el7           base           1.4 M
    flask:  dwz                           x86_64 0.11-3.el7           base            99 k
    flask:  fontconfig                    x86_64 2.13.0-4.3.el7       base           254 k
    flask:  fontpackages-filesystem       noarch 1.44-8.el7           base           9.9 k
    flask:  gd                            x86_64 2.0.35-26.el7        base           146 k
    flask:  gperftools-libs               x86_64 2.6.1-1.el7          base           272 k
    flask:  iso-codes                     noarch 3.46-2.el7           base           2.7 M
    flask:  libX11                        x86_64 1.6.7-2.el7          base           607 k
    flask:  libX11-common                 noarch 1.6.7-2.el7          base           164 k
    flask:  libXau                        x86_64 1.0.8-2.1.el7        base            29 k
    flask:  libXpm                        x86_64 3.5.12-1.el7         base            55 k
    flask:  libjpeg-turbo                 x86_64 1.2.90-8.el7         base           135 k
    flask:  libxcb                        x86_64 1.13-1.el7           base           214 k
    flask:  nginx-all-modules             noarch 1:1.16.1-1.el7       epel            19 k
    flask:  nginx-filesystem              noarch 1:1.16.1-1.el7       epel            21 k
    flask:  nginx-mod-http-image-filter   x86_64 1:1.16.1-1.el7       epel            30 k
    flask:  nginx-mod-http-perl           x86_64 1:1.16.1-1.el7       epel            39 k
    flask:  nginx-mod-http-xslt-filter    x86_64 1:1.16.1-1.el7       epel            29 k
    flask:  nginx-mod-mail                x86_64 1:1.16.1-1.el7       epel            57 k
    flask:  nginx-mod-stream              x86_64 1:1.16.1-1.el7       epel            84 k
    flask:  perl                          x86_64 4:5.16.3-295.el7     base           8.0 M
    flask:  perl-Carp                     noarch 1.26-244.el7         base            19 k
    flask:  perl-Encode                   x86_64 2.51-7.el7           base           1.5 M
    flask:  perl-Exporter                 noarch 5.68-3.el7           base            28 k
    flask:  perl-File-Path                noarch 2.09-2.el7           base            26 k
    flask:  perl-File-Temp                noarch 0.23.01-3.el7        base            56 k
    flask:  perl-Filter                   x86_64 1.49-3.el7           base            76 k
    flask:  perl-Getopt-Long              noarch 2.40-3.el7           base            56 k
    flask:  perl-HTTP-Tiny                noarch 0.033-3.el7          base            38 k
    flask:  perl-PathTools                x86_64 3.40-5.el7           base            82 k
    flask:  perl-Pod-Escapes              noarch 1:1.04-295.el7       base            51 k
    flask:  perl-Pod-Perldoc              noarch 3.20-4.el7           base            87 k
    flask:  perl-Pod-Simple               noarch 1:3.28-4.el7         base           216 k
    flask:  perl-Pod-Usage                noarch 1.63-3.el7           base            27 k
    flask:  perl-Scalar-List-Utils        x86_64 1.27-248.el7         base            36 k
    flask:  perl-Socket                   x86_64 2.010-5.el7          base            49 k
    flask:  perl-Storable                 x86_64 2.45-3.el7           base            77 k
    flask:  perl-Text-ParseWords          noarch 3.29-4.el7           base            14 k
    flask:  perl-Time-HiRes               x86_64 4:1.9725-3.el7       base            45 k
    flask:  perl-Time-Local               noarch 1.2300-2.el7         base            24 k
    flask:  perl-constant                 noarch 1.27-2.el7           base            19 k
    flask:  perl-libs                     x86_64 4:5.16.3-295.el7     base           689 k
    flask:  perl-macros                   x86_64 4:5.16.3-295.el7     base            44 k
    flask:  perl-parent                   noarch 1:0.225-244.el7      base            12 k
    flask:  perl-podlators                noarch 2.5.1-3.el7          base           112 k
    flask:  perl-srpm-macros              noarch 1-8.el7              base           4.6 k
    flask:  perl-threads                  x86_64 1.87-4.el7           base            49 k
    flask:  perl-threads-shared           x86_64 1.43-6.el7           base            39 k
    flask:  python-srpm-macros            noarch 3-32.el7             base           8.4 k
    flask:  redhat-rpm-config             noarch 9.1.0-88.el7.centos  base            81 k
    flask:  rh-python36-python            x86_64 3.6.9-2.el7          centos-sclo-rh  56 k
    flask:  rh-python36-python-devel      x86_64 3.6.9-2.el7          centos-sclo-rh 841 k
    flask:  rh-python36-python-libs       x86_64 3.6.9-2.el7          centos-sclo-rh 7.6 M
    flask:  rh-python36-python-pip        noarch 9.0.1-2.el7          centos-sclo-rh 1.7 M
    flask:  rh-python36-python-setuptools noarch 36.5.0-1.el7         centos-sclo-rh 566 k
    flask:  rh-python36-python-virtualenv noarch 15.1.0-2.el7         centos-sclo-rh 1.8 M
    flask:  rh-python36-runtime           x86_64 2.0-1.el7            centos-sclo-rh 1.1 M
    flask:  scl-utils                     x86_64 20130529-19.el7      base            24 k
    flask:  scl-utils-build               x86_64 20130529-19.el7      base            18 k
    flask:  xml-common                    noarch 0.6.3-39.el7         base            26 k
    flask:  zip                           x86_64 3.0-11.el7           base           260 k
    flask: 
    flask: Transaction Summary
    flask: ================================================================================
    flask: Install  2 Packages (+64 Dependent packages)
    flask: 
    flask: Total download size: 54 M
    flask: Installed size: 142 M
    flask: Downloading packages:
    flask: Public key for nginx-filesystem-1.16.1-1.el7.noarch.rpm is not installed
    flask: warning: /var/cache/yum/x86_64/7/epel/packages/nginx-filesystem-1.16.1-1.el7.noarch.rpm: Header V3 RSA/SHA256 Signature, key ID 352c64e5: NOKEY
    flask: Public key for rh-python36-2.0-1.el7.x86_64.rpm is not installed
    flask: warning: /var/cache/yum/x86_64/7/centos-sclo-rh/packages/rh-python36-2.0-1.el7.x86_64.rpm: Header V4 RSA/SHA1 Signature, key ID f2ee9d55: NOKEY
    flask: --------------------------------------------------------------------------------
    flask: Total                                              5.5 MB/s |  54 MB  00:09     
    flask: Retrieving key from file:///etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-SIG-SCLo
    flask: Importing GPG key 0xF2EE9D55:
    flask:  Userid     : "CentOS SoftwareCollections SIG (https://wiki.centos.org/SpecialInterestGroup/SCLo) <security@centos.org>"
    flask:  Fingerprint: c4db d535 b1fb ba14 f8ba 64a8 4eb8 4e71 f2ee 9d55
    flask:  Package    : centos-release-scl-rh-2-3.el7.centos.noarch (@extras)
    flask:  From       : /etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-SIG-SCLo
    flask: Retrieving key from file:///etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-7
    flask: Importing GPG key 0x352C64E5:
    flask:  Userid     : "Fedora EPEL (7) <epel@fedoraproject.org>"
    flask:  Fingerprint: 91e9 7d7c 4a5e 96f1 7f3e 888f 6a2f aea2 352c 64e5
    flask:  Package    : epel-release-7-11.noarch (@extras)
    flask:  From       : /etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-7
    flask: Running transaction check
    flask: Running transaction test
    flask: Transaction test succeeded
    flask: Running transaction
    flask:   Installing : fontpackages-filesystem-1.44-8.el7.noarch                   1/66
    flask:  
    flask:   Installing : dejavu-fonts-common-2.33-6.el7.noarch                       2/66
    flask:  
    flask:   Installing : dejavu-sans-fonts-2.33-6.el7.noarch                         3/66
    flask:  
    flask:   Installing : fontconfig-2.13.0-4.3.el7.x86_64                            4/66
    flask:  
    flask:   Installing : 1:perl-parent-0.225-244.el7.noarch                          5/66
    flask:  
    flask:   Installing : perl-HTTP-Tiny-0.033-3.el7.noarch                           6/66
    flask:  
    flask:   Installing : perl-podlators-2.5.1-3.el7.noarch                           7/66
    flask:  
    flask:   Installing : perl-Pod-Perldoc-3.20-4.el7.noarch                          8/66
    flask:  
    flask:   Installing : 1:perl-Pod-Escapes-1.04-295.el7.noarch                      9/66
    flask:  
    flask:   Installing : perl-Text-ParseWords-3.29-4.el7.noarch                     10/66
    flask:  
    flask:   Installing : perl-Encode-2.51-7.el7.x86_64                              11/66
    flask:  
    flask:   Installing : perl-Pod-Usage-1.63-3.el7.noarch                           12/66
    flask:  
    flask:   Installing : 4:perl-libs-5.16.3-295.el7.x86_64                          13/66
    flask:  
    flask:   Installing : 4:perl-macros-5.16.3-295.el7.x86_64                        14/66
    flask:  
    flask:   Installing : 4:perl-Time-HiRes-1.9725-3.el7.x86_64                      15/66
    flask:  
    flask:   Installing : perl-Exporter-5.68-3.el7.noarch                            16/66
    flask:  
    flask:   Installing : perl-Socket-2.010-5.el7.x86_64                             17/66
    flask:  
    flask:   Installing : perl-Carp-1.26-244.el7.noarch                              18/66
    flask:  
    flask:   Installing : perl-PathTools-3.40-5.el7.x86_64                           19/66
    flask:  
    flask:   Installing : perl-Scalar-List-Utils-1.27-248.el7.x86_64                 20/66
    flask:  
    flask:   Installing : perl-Storable-2.45-3.el7.x86_64                            21/66
    flask:  
    flask:   Installing : perl-Time-Local-1.2300-2.el7.noarch                        22/66
    flask:  
    flask:   Installing : perl-constant-1.27-2.el7.noarch                            23/66
    flask:  
    flask:   Installing : perl-File-Temp-0.23.01-3.el7.noarch                        24/66
    flask:  
    flask:   Installing : perl-File-Path-2.09-2.el7.noarch                           25/66
    flask:  
    flask:   Installing : perl-threads-shared-1.43-6.el7.x86_64                      26/66
    flask:  
    flask:   Installing : perl-threads-1.87-4.el7.x86_64                             27/66
    flask:  
    flask:   Installing : perl-Filter-1.49-3.el7.x86_64                              28/66
    flask:  
    flask:   Installing : 1:perl-Pod-Simple-3.28-4.el7.noarch                        29/66
    flask:  
    flask:   Installing : perl-Getopt-Long-2.40-3.el7.noarch                         30/66
    flask:  
    flask:   Installing : 4:perl-5.16.3-295.el7.x86_64                               31/66
    flask:  
    flask:   Installing : gperftools-libs-2.6.1-1.el7.x86_64                         32/66
    flask:  
    flask:   Installing : libXau-1.0.8-2.1.el7.x86_64                                33/66
    flask:  
    flask:   Installing : libxcb-1.13-1.el7.x86_64                                   34/66
    flask:  
    flask:   Installing : centos-indexhtml-7-9.el7.centos.noarch                     35/66
    flask:  
    flask:   Installing : python-srpm-macros-3-32.el7.noarch                         36/66
    flask:  
    flask:   Installing : xml-common-0.6.3-39.el7.noarch                             37/66
    flask:  
    flask:   Installing : iso-codes-3.46-2.el7.noarch                                38/66
    flask:  
    flask:   Installing : libjpeg-turbo-1.2.90-8.el7.x86_64                          39/66
    flask:  
    flask:   Installing : libX11-common-1.6.7-2.el7.noarch                           40/66
    flask:  
    flask:   Installing : libX11-1.6.7-2.el7.x86_64                                  41/66
    flask:  
    flask:   Installing : libXpm-3.5.12-1.el7.x86_64                                 42/66
    flask:  
    flask:   Installing : gd-2.0.35-26.el7.x86_64                                    43/66
    flask:  
    flask:   Installing : dwz-0.11-3.el7.x86_64                                      44/66
    flask:  
    flask:   Installing : perl-srpm-macros-1-8.el7.noarch                            45/66
    flask:  
    flask:   Installing : scl-utils-20130529-19.el7.x86_64                           46/66
    flask:  
    flask:   Installing : rh-python36-runtime-2.0-1.el7.x86_64                       47/66
    flask:  
    flask:   Installing : rh-python36-python-libs-3.6.9-2.el7.x86_64                 48/66
    flask:  
    flask:   Installing : rh-python36-python-3.6.9-2.el7.x86_64                      49/66
    flask:  
    flask:   Installing : rh-python36-python-setuptools-36.5.0-1.el7.noarch          50/66
    flask:  
    flask:   Installing : rh-python36-python-pip-9.0.1-2.el7.noarch                  51/66
    flask:  
    flask:   Installing : centos-logos-70.0.6-3.el7.centos.noarch                    52/66
    flask:  
    flask:   Installing : zip-3.0-11.el7.x86_64                                      53/66
    flask:  
    flask:   Installing : redhat-rpm-config-9.1.0-88.el7.centos.noarch               54/66
    flask:  
    flask:   Installing : scl-utils-build-20130529-19.el7.x86_64                     55/66
    flask:  
    flask:   Installing : rh-python36-python-devel-3.6.9-2.el7.x86_64                56/66
    flask:  
    flask:   Installing : rh-python36-python-virtualenv-15.1.0-2.el7.noarch          57/66
    flask:  
    flask:   Installing : 1:nginx-filesystem-1.16.1-1.el7.noarch                     58/66
    flask:  
    flask:   Installing : 1:nginx-mod-mail-1.16.1-1.el7.x86_64                       59/66
    flask:  
    flask:   Installing : 1:nginx-mod-http-xslt-filter-1.16.1-1.el7.x86_64           60/66
    flask:  
    flask:   Installing : 1:nginx-mod-stream-1.16.1-1.el7.x86_64                     61/66
    flask:  
    flask:   Installing : 1:nginx-mod-http-image-filter-1.16.1-1.el7.x86_64          62/66
    flask:  
    flask:   Installing : 1:nginx-1.16.1-1.el7.x86_64                                63/66
    flask:  
    flask:   Installing : 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64                  64/66
    flask:  
    flask:   Installing : 1:nginx-all-modules-1.16.1-1.el7.noarch                    65/66
    flask:  
    flask:   Installing : rh-python36-2.0-1.el7.x86_64                               66/66
    flask:  
    flask:   Verifying  : rh-python36-runtime-2.0-1.el7.x86_64                        1/66
    flask:  
    flask:   Verifying  : perl-HTTP-Tiny-0.033-3.el7.noarch                           2/66
    flask:  
    flask:   Verifying  : fontconfig-2.13.0-4.3.el7.x86_64                            3/66
    flask:  
    flask:   Verifying  : 1:nginx-filesystem-1.16.1-1.el7.noarch                      4/66
    flask:  
    flask:   Verifying  : perl-Pod-Perldoc-3.20-4.el7.noarch                          5/66
    flask:  
    flask:   Verifying  : perl-threads-shared-1.43-6.el7.x86_64                       6/66
    flask:  
    flask:   Verifying  : 4:perl-Time-HiRes-1.9725-3.el7.x86_64                       7/66
    flask:  
    flask:   Verifying  : 1:perl-Pod-Escapes-1.04-295.el7.noarch                      8/66
    flask:  
    flask:   Verifying  : zip-3.0-11.el7.x86_64                                       9/66
    flask:  
    flask:   Verifying  : perl-Exporter-5.68-3.el7.noarch                            10/66
    flask:  
    flask:   Verifying  : rh-python36-python-3.6.9-2.el7.x86_64                      11/66
    flask:  
    flask:   Verifying  : perl-PathTools-3.40-5.el7.x86_64                           12/66
    flask:  
    flask:   Verifying  : perl-Pod-Usage-1.63-3.el7.noarch                           13/66
    flask:  
    flask:   Verifying  : 1:nginx-mod-mail-1.16.1-1.el7.x86_64                       14/66
    flask:  
    flask:   Verifying  : 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64                  15/66
    flask:  
    flask:   Verifying  : perl-Socket-2.010-5.el7.x86_64                             16/66
    flask:  
    flask:   Verifying  : rh-python36-python-virtualenv-15.1.0-2.el7.noarch          17/66
    flask:  
    flask:   Verifying  : 1:nginx-mod-http-xslt-filter-1.16.1-1.el7.x86_64           18/66
    flask:  
    flask:   Verifying  : centos-logos-70.0.6-3.el7.centos.noarch                    19/66
    flask:  
    flask:   Verifying  : 1:perl-parent-0.225-244.el7.noarch                         20/66
    flask:  
    flask:   Verifying  : rh-python36-2.0-1.el7.x86_64                               21/66
    flask:  
    flask:   Verifying  : scl-utils-20130529-19.el7.x86_64                           22/66
    flask:  
    flask:   Verifying  : fontpackages-filesystem-1.44-8.el7.noarch                  23/66
    flask:  
    flask:   Verifying  : perl-srpm-macros-1-8.el7.noarch                            24/66
    flask:  
    flask:   Verifying  : 4:perl-libs-5.16.3-295.el7.x86_64                          25/66
    flask:  
    flask:   Verifying  : perl-File-Temp-0.23.01-3.el7.noarch                        26/66
    flask:  
    flask:   Verifying  : 1:perl-Pod-Simple-3.28-4.el7.noarch                        27/66
    flask:  
    flask:   Verifying  : dwz-0.11-3.el7.x86_64                                      28/66
    flask:  
    flask:   Verifying  : libX11-1.6.7-2.el7.x86_64                                  29/66
    flask:  
    flask:   Verifying  : libX11-common-1.6.7-2.el7.noarch                           30/66
    flask:  
    flask:   Verifying  : rh-python36-python-pip-9.0.1-2.el7.noarch                  31/66
    flask:  
    flask:   Verifying  : perl-Time-Local-1.2300-2.el7.noarch                        32/66
    flask:  
    flask:   Verifying  : 4:perl-macros-5.16.3-295.el7.x86_64                        33/66
    flask:  
    flask:   Verifying  : 4:perl-5.16.3-295.el7.x86_64                               34/66
    flask:  
    flask:   Verifying  : scl-utils-build-20130529-19.el7.x86_64                     35/66
    flask:  
    flask:   Verifying  : libXpm-3.5.12-1.el7.x86_64                                 36/66
    flask:  
    flask:   Verifying  : 1:nginx-mod-stream-1.16.1-1.el7.x86_64                     37/66
    flask:  
    flask:   Verifying  : perl-Carp-1.26-244.el7.noarch                              38/66
    flask:  
    flask:   Verifying  : libxcb-1.13-1.el7.x86_64                                   39/66
    flask:  
    flask:   Verifying  : rh-python36-python-devel-3.6.9-2.el7.x86_64                40/66
    flask:  
    flask:   Verifying  : dejavu-sans-fonts-2.33-6.el7.noarch                        41/66
    flask:  
    flask:   Verifying  : perl-Scalar-List-Utils-1.27-248.el7.x86_64                 42/66
    flask:  
    flask:   Verifying  : 1:nginx-1.16.1-1.el7.x86_64                                43/66
    flask:  
    flask:   Verifying  : libjpeg-turbo-1.2.90-8.el7.x86_64                          44/66
    flask:  
    flask:   Verifying  : 1:nginx-all-modules-1.16.1-1.el7.noarch                    45/66
    flask:  
    flask:   Verifying  : xml-common-0.6.3-39.el7.noarch                             46/66
    flask:  
    flask:   Verifying  : rh-python36-python-libs-3.6.9-2.el7.x86_64                 47/66
    flask:  
    flask:   Verifying  : python-srpm-macros-3-32.el7.noarch                         48/66
    flask:  
    flask:   Verifying  : centos-indexhtml-7-9.el7.centos.noarch                     49/66
    flask:  
    flask:   Verifying  : 1:nginx-mod-http-image-filter-1.16.1-1.el7.x86_64          50/66
    flask:  
    flask:   Verifying  : perl-Encode-2.51-7.el7.x86_64                              51/66
    flask:  
    flask:   Verifying  : perl-Storable-2.45-3.el7.x86_64                            52/66
    flask:  
    flask:   Verifying  : dejavu-fonts-common-2.33-6.el7.noarch                      53/66
    flask:  
    flask:   Verifying  : perl-podlators-2.5.1-3.el7.noarch                          54/66
    flask:  
    flask:   Verifying  : perl-constant-1.27-2.el7.noarch                            55/66
    flask:  
    flask:   Verifying  : libXau-1.0.8-2.1.el7.x86_64                                56/66
    flask:  
    flask:   Verifying  : perl-File-Path-2.09-2.el7.noarch                           57/66
    flask:  
    flask:   Verifying  : perl-threads-1.87-4.el7.x86_64                             58/66
    flask:  
    flask:   Verifying  : gperftools-libs-2.6.1-1.el7.x86_64                         59/66
    flask:  
    flask:   Verifying  : perl-Filter-1.49-3.el7.x86_64                              60/66
    flask:  
    flask:   Verifying  : perl-Getopt-Long-2.40-3.el7.noarch                         61/66
    flask:  
    flask:   Verifying  : perl-Text-ParseWords-3.29-4.el7.noarch                     62/66
    flask:  
    flask:   Verifying  : iso-codes-3.46-2.el7.noarch                                63/66
    flask:  
    flask:   Verifying  : gd-2.0.35-26.el7.x86_64                                    64/66
    flask:  
    flask:   Verifying  : rh-python36-python-setuptools-36.5.0-1.el7.noarch          65/66
    flask:  
    flask:   Verifying  : redhat-rpm-config-9.1.0-88.el7.centos.noarch               66/66
    flask:  
    flask: 
    flask: Installed:
    flask:   nginx.x86_64 1:1.16.1-1.el7           rh-python36.x86_64 0:2.0-1.el7          
    flask: 
    flask: Dependency Installed:
    flask:   centos-indexhtml.noarch 0:7-9.el7.centos                                      
    flask:   centos-logos.noarch 0:70.0.6-3.el7.centos                                     
    flask:   dejavu-fonts-common.noarch 0:2.33-6.el7                                       
    flask:   dejavu-sans-fonts.noarch 0:2.33-6.el7                                         
    flask:   dwz.x86_64 0:0.11-3.el7                                                       
    flask:   fontconfig.x86_64 0:2.13.0-4.3.el7                                            
    flask:   fontpackages-filesystem.noarch 0:1.44-8.el7                                   
    flask:   gd.x86_64 0:2.0.35-26.el7                                                     
    flask:   gperftools-libs.x86_64 0:2.6.1-1.el7                                          
    flask:   iso-codes.noarch 0:3.46-2.el7                                                 
    flask:   libX11.x86_64 0:1.6.7-2.el7                                                   
    flask:   libX11-common.noarch 0:1.6.7-2.el7                                            
    flask:   libXau.x86_64 0:1.0.8-2.1.el7                                                 
    flask:   libXpm.x86_64 0:3.5.12-1.el7                                                  
    flask:   libjpeg-turbo.x86_64 0:1.2.90-8.el7                                           
    flask:   libxcb.x86_64 0:1.13-1.el7                                                    
    flask:   nginx-all-modules.noarch 1:1.16.1-1.el7                                       
    flask:   nginx-filesystem.noarch 1:1.16.1-1.el7                                        
    flask:   nginx-mod-http-image-filter.x86_64 1:1.16.1-1.el7                             
    flask:   nginx-mod-http-perl.x86_64 1:1.16.1-1.el7                                     
    flask:   nginx-mod-http-xslt-filter.x86_64 1:1.16.1-1.el7                              
    flask:   nginx-mod-mail.x86_64 1:1.16.1-1.el7                                          
    flask:   nginx-mod-stream.x86_64 1:1.16.1-1.el7                                        
    flask:   perl.x86_64 4:5.16.3-295.el7                                                  
    flask:   perl-Carp.noarch 0:1.26-244.el7                                               
    flask:   perl-Encode.x86_64 0:2.51-7.el7                                               
    flask:   perl-Exporter.noarch 0:5.68-3.el7                                             
    flask:   perl-File-Path.noarch 0:2.09-2.el7                                            
    flask:   perl-File-Temp.noarch 0:0.23.01-3.el7                                         
    flask:   perl-Filter.x86_64 0:1.49-3.el7                                               
    flask:   perl-Getopt-Long.noarch 0:2.40-3.el7                                          
    flask:   perl-HTTP-Tiny.noarch 0:0.033-3.el7                                           
    flask:   perl-PathTools.x86_64 0:3.40-5.el7                                            
    flask:   perl-Pod-Escapes.noarch 1:1.04-295.el7                                        
    flask:   perl-Pod-Perldoc.noarch 0:3.20-4.el7                                          
    flask:   perl-Pod-Simple.noarch 1:3.28-4.el7                                           
    flask:   perl-Pod-Usage.noarch 0:1.63-3.el7                                            
    flask:   perl-Scalar-List-Utils.x86_64 0:1.27-248.el7                                  
    flask:   perl-Socket.x86_64 0:2.010-5.el7                                              
    flask:   perl-Storable.x86_64 0:2.45-3.el7                                             
    flask:   perl-Text-ParseWords.noarch 0:3.29-4.el7                                      
    flask:   perl-Time-HiRes.x86_64 4:1.9725-3.el7                                         
    flask:   perl-Time-Local.noarch 0:1.2300-2.el7                                         
    flask:   perl-constant.noarch 0:1.27-2.el7                                             
    flask:   perl-libs.x86_64 4:5.16.3-295.el7                                             
    flask:   perl-macros.x86_64 4:5.16.3-295.el7                                           
    flask:   perl-parent.noarch 1:0.225-244.el7                                            
    flask:   perl-podlators.noarch 0:2.5.1-3.el7                                           
    flask:   perl-srpm-macros.noarch 0:1-8.el7                                             
    flask:   perl-threads.x86_64 0:1.87-4.el7                                              
    flask:   perl-threads-shared.x86_64 0:1.43-6.el7                                       
    flask:   python-srpm-macros.noarch 0:3-32.el7                                          
    flask:   redhat-rpm-config.noarch 0:9.1.0-88.el7.centos                                
    flask:   rh-python36-python.x86_64 0:3.6.9-2.el7                                       
    flask:   rh-python36-python-devel.x86_64 0:3.6.9-2.el7                                 
    flask:   rh-python36-python-libs.x86_64 0:3.6.9-2.el7                                  
    flask:   rh-python36-python-pip.noarch 0:9.0.1-2.el7                                   
    flask:   rh-python36-python-setuptools.noarch 0:36.5.0-1.el7                           
    flask:   rh-python36-python-virtualenv.noarch 0:15.1.0-2.el7                           
    flask:   rh-python36-runtime.x86_64 0:2.0-1.el7                                        
    flask:   scl-utils.x86_64 0:20130529-19.el7                                            
    flask:   scl-utils-build.x86_64 0:20130529-19.el7                                      
    flask:   xml-common.noarch 0:0.6.3-39.el7                                              
    flask:   zip.x86_64 0:3.0-11.el7                                                       
    flask: 
    flask: Complete!
==> wordpress: Importing base box 'centos/7'...
==> wordpress: Matching MAC address for NAT networking...
==> wordpress: Checking if box 'centos/7' version '1905.1' is up to date...
==> wordpress: Setting the name of the VM: twentythree_wordpress_1588911253028_65088
==> wordpress: Fixed port collision for 22 => 2222. Now on port 2200.
==> wordpress: Clearing any previously set network interfaces...
==> wordpress: Preparing network interfaces based on configuration...
    wordpress: Adapter 1: nat
    wordpress: Adapter 2: hostonly
==> wordpress: Forwarding ports...
    wordpress: 22 (guest) => 2200 (host) (adapter 1)
==> wordpress: Booting VM...
==> wordpress: Waiting for machine to boot. This may take a few minutes...
    wordpress: SSH address: 127.0.0.1:2200
    wordpress: SSH username: vagrant
    wordpress: SSH auth method: private key
    wordpress: 
    wordpress: Vagrant insecure key detected. Vagrant will automatically replace
    wordpress: this with a newly generated keypair for better security.
    wordpress: 
    wordpress: Inserting generated public key within guest...
    wordpress: Removing insecure key from the guest if it's present...
    wordpress: Key inserted! Disconnecting and reconnecting using new SSH key...
==> wordpress: Machine booted and ready!
==> wordpress: Checking for guest additions in VM...
    wordpress: No guest additions were detected on the base box for this VM! Guest
    wordpress: additions are required for forwarded ports, shared folders, host only
    wordpress: networking, and more. If SSH fails on this machine, please install
    wordpress: the guest additions and repackage the box to continue.
    wordpress: 
    wordpress: This is not an error message; everything may continue to work properly,
    wordpress: in which case you may ignore this message.
==> wordpress: Setting hostname...
==> wordpress: Configuring and enabling network interfaces...
==> wordpress: Rsyncing folder: /home/mora/git/otus_learning/twentythree/ => /vagrant
==> wordpress: Running provisioner: shell...
    wordpress: Running: inline script
    wordpress: Loaded plugins: fastestmirror
    wordpress: Determining fastest mirrors
    wordpress:  * base: ftp.hosteurope.de
    wordpress:  * extras: ftp.rz.uni-frankfurt.de
    wordpress:  * updates: mirror.imt-systems.com
    wordpress: Resolving Dependencies
    wordpress: --> Running transaction check
    wordpress: ---> Package epel-release.noarch 0:7-11 will be installed
    wordpress: ---> Package yum-utils.noarch 0:1.1.31-50.el7 will be updated
    wordpress: ---> Package yum-utils.noarch 0:1.1.31-53.el7 will be an update
    wordpress: --> Finished Dependency Resolution
    wordpress: 
    wordpress: Dependencies Resolved
    wordpress: 
    wordpress: ================================================================================
    wordpress:  Package              Arch           Version               Repository      Size
    wordpress: ================================================================================
    wordpress: Installing:
    wordpress:  epel-release         noarch         7-11                  extras          15 k
    wordpress: Updating:
    wordpress:  yum-utils            noarch         1.1.31-53.el7         base           122 k
    wordpress: 
    wordpress: Transaction Summary
    wordpress: ================================================================================
    wordpress: Install  1 Package
    wordpress: Upgrade  1 Package
    wordpress: 
    wordpress: Total download size: 136 k
    wordpress: Downloading packages:
    wordpress: No Presto metadata available for base
    wordpress: Public key for epel-release-7-11.noarch.rpm is not installed
    wordpress: warning: /var/cache/yum/x86_64/7/extras/packages/epel-release-7-11.noarch.rpm: Header V3 RSA/SHA256 Signature, key ID f4a80eb5: NOKEY
    wordpress: Public key for yum-utils-1.1.31-53.el7.noarch.rpm is not installed
    wordpress: --------------------------------------------------------------------------------
    wordpress: Total                                              402 kB/s | 136 kB  00:00     
    wordpress: Retrieving key from file:///etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-7
    wordpress: Importing GPG key 0xF4A80EB5:
    wordpress:  Userid     : "CentOS-7 Key (CentOS 7 Official Signing Key) <security@centos.org>"
    wordpress:  Fingerprint: 6341 ab27 53d7 8a78 a7c2 7bb1 24c6 a8a7 f4a8 0eb5
    wordpress:  Package    : centos-release-7-6.1810.2.el7.centos.x86_64 (@anaconda)
    wordpress:  From       : /etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-7
    wordpress: Running transaction check
    wordpress: Running transaction test
    wordpress: Transaction test succeeded
    wordpress: Running transaction
    wordpress:   Installing : epel-release-7-11.noarch                                     1/3
    wordpress:  
    wordpress:   Updating   : yum-utils-1.1.31-53.el7.noarch                               2/3
    wordpress:  
    wordpress:   Cleanup    : yum-utils-1.1.31-50.el7.noarch                               3/3
    wordpress:  
    wordpress:   Verifying  : yum-utils-1.1.31-53.el7.noarch                               1/3
    wordpress:  
    wordpress:   Verifying  : epel-release-7-11.noarch                                     2/3
    wordpress:  
    wordpress:   Verifying  : yum-utils-1.1.31-50.el7.noarch                               3/3
    wordpress:  
    wordpress: 
    wordpress: Installed:
    wordpress:   epel-release.noarch 0:7-11                                                    
    wordpress: 
    wordpress: Updated:
    wordpress:   yum-utils.noarch 0:1.1.31-53.el7                                              
    wordpress: 
    wordpress: Complete!
    wordpress: Loaded plugins: fastestmirror
    wordpress: Loading mirror speeds from cached hostfile
    wordpress:  * base: ftp.hosteurope.de
    wordpress:  * epel: ftp.plusline.net
    wordpress:  * extras: ftp.rz.uni-frankfurt.de
    wordpress:  * updates: mirror.imt-systems.com
    wordpress: Resolving Dependencies
    wordpress: --> Running transaction check
    wordpress: ---> Package mariadb-server.x86_64 1:5.5.65-1.el7 will be installed
    wordpress: --> Processing Dependency: mariadb-libs(x86-64) = 1:5.5.65-1.el7 for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: mariadb(x86-64) = 1:5.5.65-1.el7 for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl-DBI for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl-DBD-MySQL for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl(vars) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl(strict) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl(Sys::Hostname) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl(POSIX) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl(Getopt::Long) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl(File::Temp) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl(File::Path) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl(File::Copy) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl(File::Basename) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl(Data::Dumper) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: perl(DBI) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: libaio.so.1(LIBAIO_0.4)(64bit) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: libaio.so.1(LIBAIO_0.1)(64bit) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: /usr/bin/perl for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: --> Processing Dependency: libaio.so.1()(64bit) for package: 1:mariadb-server-5.5.65-1.el7.x86_64
    wordpress: ---> Package nginx.x86_64 1:1.16.1-1.el7 will be installed
    wordpress: --> Processing Dependency: nginx-all-modules = 1:1.16.1-1.el7 for package: 1:nginx-1.16.1-1.el7.x86_64
    wordpress: --> Processing Dependency: nginx-filesystem = 1:1.16.1-1.el7 for package: 1:nginx-1.16.1-1.el7.x86_64
    wordpress: --> Processing Dependency: nginx-filesystem for package: 1:nginx-1.16.1-1.el7.x86_64
    wordpress: --> Processing Dependency: redhat-indexhtml for package: 1:nginx-1.16.1-1.el7.x86_64
    wordpress: --> Processing Dependency: system-logos for package: 1:nginx-1.16.1-1.el7.x86_64
    wordpress: --> Processing Dependency: libprofiler.so.0()(64bit) for package: 1:nginx-1.16.1-1.el7.x86_64
    wordpress: ---> Package wget.x86_64 0:1.14-18.el7_6.1 will be installed
    wordpress: --> Running transaction check
    wordpress: ---> Package centos-indexhtml.noarch 0:7-9.el7.centos will be installed
    wordpress: ---> Package centos-logos.noarch 0:70.0.6-3.el7.centos will be installed
    wordpress: ---> Package gperftools-libs.x86_64 0:2.6.1-1.el7 will be installed
    wordpress: ---> Package libaio.x86_64 0:0.3.109-13.el7 will be installed
    wordpress: ---> Package mariadb.x86_64 1:5.5.65-1.el7 will be installed
    wordpress: --> Processing Dependency: perl(Exporter) for package: 1:mariadb-5.5.65-1.el7.x86_64
    wordpress: ---> Package mariadb-libs.x86_64 1:5.5.60-1.el7_5 will be updated
    wordpress: ---> Package mariadb-libs.x86_64 1:5.5.65-1.el7 will be an update
    wordpress: ---> Package nginx-all-modules.noarch 1:1.16.1-1.el7 will be installed
    wordpress: --> Processing Dependency: nginx-mod-http-image-filter = 1:1.16.1-1.el7 for package: 1:nginx-all-modules-1.16.1-1.el7.noarch
    wordpress: --> Processing Dependency: nginx-mod-http-perl = 1:1.16.1-1.el7 for package: 1:nginx-all-modules-1.16.1-1.el7.noarch
    wordpress: --> Processing Dependency: nginx-mod-http-xslt-filter = 1:1.16.1-1.el7 for package: 1:nginx-all-modules-1.16.1-1.el7.noarch
    wordpress: --> Processing Dependency: nginx-mod-mail = 1:1.16.1-1.el7 for package: 1:nginx-all-modules-1.16.1-1.el7.noarch
    wordpress: --> Processing Dependency: nginx-mod-stream = 1:1.16.1-1.el7 for package: 1:nginx-all-modules-1.16.1-1.el7.noarch
    wordpress: ---> Package nginx-filesystem.noarch 1:1.16.1-1.el7 will be installed
    wordpress: ---> Package perl.x86_64 4:5.16.3-295.el7 will be installed
    wordpress: --> Processing Dependency: perl-libs = 4:5.16.3-295.el7 for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Socket) >= 1.3 for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Scalar::Util) >= 1.10 for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl-macros for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl-libs for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(threads::shared) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(threads) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(constant) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Time::Local) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Time::HiRes) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Storable) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Socket) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Scalar::Util) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Pod::Simple::XHTML) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Pod::Simple::Search) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Filter::Util::Call) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(File::Spec::Unix) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(File::Spec::Functions) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(File::Spec) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Cwd) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: perl(Carp) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: --> Processing Dependency: libperl.so()(64bit) for package: 4:perl-5.16.3-295.el7.x86_64
    wordpress: ---> Package perl-DBD-MySQL.x86_64 0:4.023-6.el7 will be installed
    wordpress: ---> Package perl-DBI.x86_64 0:1.627-4.el7 will be installed
    wordpress: --> Processing Dependency: perl(RPC::PlServer) >= 0.2001 for package: perl-DBI-1.627-4.el7.x86_64
    wordpress: --> Processing Dependency: perl(RPC::PlClient) >= 0.2000 for package: perl-DBI-1.627-4.el7.x86_64
    wordpress: ---> Package perl-Data-Dumper.x86_64 0:2.145-3.el7 will be installed
    wordpress: ---> Package perl-File-Path.noarch 0:2.09-2.el7 will be installed
    wordpress: ---> Package perl-File-Temp.noarch 0:0.23.01-3.el7 will be installed
    wordpress: ---> Package perl-Getopt-Long.noarch 0:2.40-3.el7 will be installed
    wordpress: --> Processing Dependency: perl(Pod::Usage) >= 1.14 for package: perl-Getopt-Long-2.40-3.el7.noarch
    wordpress: --> Processing Dependency: perl(Text::ParseWords) for package: perl-Getopt-Long-2.40-3.el7.noarch
    wordpress: --> Running transaction check
    wordpress: ---> Package nginx-mod-http-image-filter.x86_64 1:1.16.1-1.el7 will be installed
    wordpress: --> Processing Dependency: gd for package: 1:nginx-mod-http-image-filter-1.16.1-1.el7.x86_64
    wordpress: --> Processing Dependency: libgd.so.2()(64bit) for package: 1:nginx-mod-http-image-filter-1.16.1-1.el7.x86_64
    wordpress: ---> Package nginx-mod-http-perl.x86_64 1:1.16.1-1.el7 will be installed
    wordpress: ---> Package nginx-mod-http-xslt-filter.x86_64 1:1.16.1-1.el7 will be installed
    wordpress: ---> Package nginx-mod-mail.x86_64 1:1.16.1-1.el7 will be installed
    wordpress: ---> Package nginx-mod-stream.x86_64 1:1.16.1-1.el7 will be installed
    wordpress: ---> Package perl-Carp.noarch 0:1.26-244.el7 will be installed
    wordpress: ---> Package perl-Exporter.noarch 0:5.68-3.el7 will be installed
    wordpress: ---> Package perl-Filter.x86_64 0:1.49-3.el7 will be installed
    wordpress: ---> Package perl-PathTools.x86_64 0:3.40-5.el7 will be installed
    wordpress: ---> Package perl-PlRPC.noarch 0:0.2020-14.el7 will be installed
    wordpress: --> Processing Dependency: perl(Net::Daemon) >= 0.13 for package: perl-PlRPC-0.2020-14.el7.noarch
    wordpress: --> Processing Dependency: perl(Net::Daemon::Test) for package: perl-PlRPC-0.2020-14.el7.noarch
    wordpress: --> Processing Dependency: perl(Net::Daemon::Log) for package: perl-PlRPC-0.2020-14.el7.noarch
    wordpress: --> Processing Dependency: perl(Compress::Zlib) for package: perl-PlRPC-0.2020-14.el7.noarch
    wordpress: ---> Package perl-Pod-Simple.noarch 1:3.28-4.el7 will be installed
    wordpress: --> Processing Dependency: perl(Pod::Escapes) >= 1.04 for package: 1:perl-Pod-Simple-3.28-4.el7.noarch
    wordpress: --> Processing Dependency: perl(Encode) for package: 1:perl-Pod-Simple-3.28-4.el7.noarch
    wordpress: ---> Package perl-Pod-Usage.noarch 0:1.63-3.el7 will be installed
    wordpress: --> Processing Dependency: perl(Pod::Text) >= 3.15 for package: perl-Pod-Usage-1.63-3.el7.noarch
    wordpress: --> Processing Dependency: perl-Pod-Perldoc for package: perl-Pod-Usage-1.63-3.el7.noarch
    wordpress: ---> Package perl-Scalar-List-Utils.x86_64 0:1.27-248.el7 will be installed
    wordpress: ---> Package perl-Socket.x86_64 0:2.010-5.el7 will be installed
    wordpress: ---> Package perl-Storable.x86_64 0:2.45-3.el7 will be installed
    wordpress: ---> Package perl-Text-ParseWords.noarch 0:3.29-4.el7 will be installed
    wordpress: ---> Package perl-Time-HiRes.x86_64 4:1.9725-3.el7 will be installed
    wordpress: ---> Package perl-Time-Local.noarch 0:1.2300-2.el7 will be installed
    wordpress: ---> Package perl-constant.noarch 0:1.27-2.el7 will be installed
    wordpress: ---> Package perl-libs.x86_64 4:5.16.3-295.el7 will be installed
    wordpress: ---> Package perl-macros.x86_64 4:5.16.3-295.el7 will be installed
    wordpress: ---> Package perl-threads.x86_64 0:1.87-4.el7 will be installed
    wordpress: ---> Package perl-threads-shared.x86_64 0:1.43-6.el7 will be installed
    wordpress: --> Running transaction check
    wordpress: ---> Package gd.x86_64 0:2.0.35-26.el7 will be installed
    wordpress: --> Processing Dependency: libjpeg.so.62(LIBJPEG_6.2)(64bit) for package: gd-2.0.35-26.el7.x86_64
    wordpress: --> Processing Dependency: libjpeg.so.62()(64bit) for package: gd-2.0.35-26.el7.x86_64
    wordpress: --> Processing Dependency: libfontconfig.so.1()(64bit) for package: gd-2.0.35-26.el7.x86_64
    wordpress: --> Processing Dependency: libXpm.so.4()(64bit) for package: gd-2.0.35-26.el7.x86_64
    wordpress: --> Processing Dependency: libX11.so.6()(64bit) for package: gd-2.0.35-26.el7.x86_64
    wordpress: ---> Package perl-Encode.x86_64 0:2.51-7.el7 will be installed
    wordpress: ---> Package perl-IO-Compress.noarch 0:2.061-2.el7 will be installed
    wordpress: --> Processing Dependency: perl(Compress::Raw::Zlib) >= 2.061 for package: perl-IO-Compress-2.061-2.el7.noarch
    wordpress: --> Processing Dependency: perl(Compress::Raw::Bzip2) >= 2.061 for package: perl-IO-Compress-2.061-2.el7.noarch
    wordpress: ---> Package perl-Net-Daemon.noarch 0:0.48-5.el7 will be installed
    wordpress: ---> Package perl-Pod-Escapes.noarch 1:1.04-295.el7 will be installed
    wordpress: ---> Package perl-Pod-Perldoc.noarch 0:3.20-4.el7 will be installed
    wordpress: --> Processing Dependency: perl(parent) for package: perl-Pod-Perldoc-3.20-4.el7.noarch
    wordpress: --> Processing Dependency: perl(HTTP::Tiny) for package: perl-Pod-Perldoc-3.20-4.el7.noarch
    wordpress: ---> Package perl-podlators.noarch 0:2.5.1-3.el7 will be installed
    wordpress: --> Running transaction check
    wordpress: ---> Package fontconfig.x86_64 0:2.13.0-4.3.el7 will be installed
    wordpress: --> Processing Dependency: fontpackages-filesystem for package: fontconfig-2.13.0-4.3.el7.x86_64
    wordpress: --> Processing Dependency: dejavu-sans-fonts for package: fontconfig-2.13.0-4.3.el7.x86_64
    wordpress: ---> Package libX11.x86_64 0:1.6.7-2.el7 will be installed
    wordpress: --> Processing Dependency: libX11-common >= 1.6.7-2.el7 for package: libX11-1.6.7-2.el7.x86_64
    wordpress: --> Processing Dependency: libxcb.so.1()(64bit) for package: libX11-1.6.7-2.el7.x86_64
    wordpress: ---> Package libXpm.x86_64 0:3.5.12-1.el7 will be installed
    wordpress: ---> Package libjpeg-turbo.x86_64 0:1.2.90-8.el7 will be installed
    wordpress: ---> Package perl-Compress-Raw-Bzip2.x86_64 0:2.061-3.el7 will be installed
    wordpress: ---> Package perl-Compress-Raw-Zlib.x86_64 1:2.061-4.el7 will be installed
    wordpress: ---> Package perl-HTTP-Tiny.noarch 0:0.033-3.el7 will be installed
    wordpress: ---> Package perl-parent.noarch 1:0.225-244.el7 will be installed
    wordpress: --> Running transaction check
    wordpress: ---> Package dejavu-sans-fonts.noarch 0:2.33-6.el7 will be installed
    wordpress: --> Processing Dependency: dejavu-fonts-common = 2.33-6.el7 for package: dejavu-sans-fonts-2.33-6.el7.noarch
    wordpress: ---> Package fontpackages-filesystem.noarch 0:1.44-8.el7 will be installed
    wordpress: ---> Package libX11-common.noarch 0:1.6.7-2.el7 will be installed
    wordpress: ---> Package libxcb.x86_64 0:1.13-1.el7 will be installed
    wordpress: --> Processing Dependency: libXau.so.6()(64bit) for package: libxcb-1.13-1.el7.x86_64
    wordpress: --> Running transaction check
    wordpress: ---> Package dejavu-fonts-common.noarch 0:2.33-6.el7 will be installed
    wordpress: ---> Package libXau.x86_64 0:1.0.8-2.1.el7 will be installed
    wordpress: --> Finished Dependency Resolution
    wordpress: 
    wordpress: Dependencies Resolved
    wordpress: 
    wordpress: ================================================================================
    wordpress:  Package                        Arch      Version                 Repository
    wordpress:                                                                            Size
    wordpress: ================================================================================
    wordpress: Installing:
    wordpress:  mariadb-server                 x86_64    1:5.5.65-1.el7          base     11 M
    wordpress:  nginx                          x86_64    1:1.16.1-1.el7          epel    562 k
    wordpress:  wget                           x86_64    1.14-18.el7_6.1         base    547 k
    wordpress: Installing for dependencies:
    wordpress:  centos-indexhtml               noarch    7-9.el7.centos          base     92 k
    wordpress:  centos-logos                   noarch    70.0.6-3.el7.centos     base     21 M
    wordpress:  dejavu-fonts-common            noarch    2.33-6.el7              base     64 k
    wordpress:  dejavu-sans-fonts              noarch    2.33-6.el7              base    1.4 M
    wordpress:  fontconfig                     x86_64    2.13.0-4.3.el7          base    254 k
    wordpress:  fontpackages-filesystem        noarch    1.44-8.el7              base    9.9 k
    wordpress:  gd                             x86_64    2.0.35-26.el7           base    146 k
    wordpress:  gperftools-libs                x86_64    2.6.1-1.el7             base    272 k
    wordpress:  libX11                         x86_64    1.6.7-2.el7             base    607 k
    wordpress:  libX11-common                  noarch    1.6.7-2.el7             base    164 k
    wordpress:  libXau                         x86_64    1.0.8-2.1.el7           base     29 k
    wordpress:  libXpm                         x86_64    3.5.12-1.el7            base     55 k
    wordpress:  libaio                         x86_64    0.3.109-13.el7          base     24 k
    wordpress:  libjpeg-turbo                  x86_64    1.2.90-8.el7            base    135 k
    wordpress:  libxcb                         x86_64    1.13-1.el7              base    214 k
    wordpress:  mariadb                        x86_64    1:5.5.65-1.el7          base    8.7 M
    wordpress:  nginx-all-modules              noarch    1:1.16.1-1.el7          epel     19 k
    wordpress:  nginx-filesystem               noarch    1:1.16.1-1.el7          epel     21 k
    wordpress:  nginx-mod-http-image-filter    x86_64    1:1.16.1-1.el7          epel     30 k
    wordpress:  nginx-mod-http-perl            x86_64    1:1.16.1-1.el7          epel     39 k
    wordpress:  nginx-mod-http-xslt-filter     x86_64    1:1.16.1-1.el7          epel     29 k
    wordpress:  nginx-mod-mail                 x86_64    1:1.16.1-1.el7          epel     57 k
    wordpress:  nginx-mod-stream               x86_64    1:1.16.1-1.el7          epel     84 k
    wordpress:  perl                           x86_64    4:5.16.3-295.el7        base    8.0 M
    wordpress:  perl-Carp                      noarch    1.26-244.el7            base     19 k
    wordpress:  perl-Compress-Raw-Bzip2        x86_64    2.061-3.el7             base     32 k
    wordpress:  perl-Compress-Raw-Zlib         x86_64    1:2.061-4.el7           base     57 k
    wordpress:  perl-DBD-MySQL                 x86_64    4.023-6.el7             base    140 k
    wordpress:  perl-DBI                       x86_64    1.627-4.el7             base    802 k
    wordpress:  perl-Data-Dumper               x86_64    2.145-3.el7             base     47 k
    wordpress:  perl-Encode                    x86_64    2.51-7.el7              base    1.5 M
    wordpress:  perl-Exporter                  noarch    5.68-3.el7              base     28 k
    wordpress:  perl-File-Path                 noarch    2.09-2.el7              base     26 k
    wordpress:  perl-File-Temp                 noarch    0.23.01-3.el7           base     56 k
    wordpress:  perl-Filter                    x86_64    1.49-3.el7              base     76 k
    wordpress:  perl-Getopt-Long               noarch    2.40-3.el7              base     56 k
    wordpress:  perl-HTTP-Tiny                 noarch    0.033-3.el7             base     38 k
    wordpress:  perl-IO-Compress               noarch    2.061-2.el7             base    260 k
    wordpress:  perl-Net-Daemon                noarch    0.48-5.el7              base     51 k
    wordpress:  perl-PathTools                 x86_64    3.40-5.el7              base     82 k
    wordpress:  perl-PlRPC                     noarch    0.2020-14.el7           base     36 k
    wordpress:  perl-Pod-Escapes               noarch    1:1.04-295.el7          base     51 k
    wordpress:  perl-Pod-Perldoc               noarch    3.20-4.el7              base     87 k
    wordpress:  perl-Pod-Simple                noarch    1:3.28-4.el7            base    216 k
    wordpress:  perl-Pod-Usage                 noarch    1.63-3.el7              base     27 k
    wordpress:  perl-Scalar-List-Utils         x86_64    1.27-248.el7            base     36 k
    wordpress:  perl-Socket                    x86_64    2.010-5.el7             base     49 k
    wordpress:  perl-Storable                  x86_64    2.45-3.el7              base     77 k
    wordpress:  perl-Text-ParseWords           noarch    3.29-4.el7              base     14 k
    wordpress:  perl-Time-HiRes                x86_64    4:1.9725-3.el7          base     45 k
    wordpress:  perl-Time-Local                noarch    1.2300-2.el7            base     24 k
    wordpress:  perl-constant                  noarch    1.27-2.el7              base     19 k
    wordpress:  perl-libs                      x86_64    4:5.16.3-295.el7        base    689 k
    wordpress:  perl-macros                    x86_64    4:5.16.3-295.el7        base     44 k
    wordpress:  perl-parent                    noarch    1:0.225-244.el7         base     12 k
    wordpress:  perl-podlators                 noarch    2.5.1-3.el7             base    112 k
    wordpress:  perl-threads                   x86_64    1.87-4.el7              base     49 k
    wordpress:  perl-threads-shared            x86_64    1.43-6.el7              base     39 k
    wordpress: Updating for dependencies:
    wordpress:  mariadb-libs                   x86_64    1:5.5.65-1.el7          base    759 k
    wordpress: 
    wordpress: Transaction Summary
    wordpress: ================================================================================
    wordpress: Install  3 Packages (+58 Dependent packages)
    wordpress: Upgrade             (  1 Dependent package)
    wordpress: 
    wordpress: Total download size: 60 M
    wordpress: Downloading packages:
    wordpress: No Presto metadata available for base
    wordpress: Public key for nginx-1.16.1-1.el7.x86_64.rpm is not installed
    wordpress: warning: /var/cache/yum/x86_64/7/epel/packages/nginx-1.16.1-1.el7.x86_64.rpm: Header V3 RSA/SHA256 Signature, key ID 352c64e5: NOKEY
    wordpress: --------------------------------------------------------------------------------
    wordpress: Total                                              4.3 MB/s |  60 MB  00:13     
    wordpress: Retrieving key from file:///etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-7
    wordpress: Importing GPG key 0x352C64E5:
    wordpress:  Userid     : "Fedora EPEL (7) <epel@fedoraproject.org>"
    wordpress:  Fingerprint: 91e9 7d7c 4a5e 96f1 7f3e 888f 6a2f aea2 352c 64e5
    wordpress:  Package    : epel-release-7-11.noarch (@extras)
    wordpress:  From       : /etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-7
    wordpress: Running transaction check
    wordpress: Running transaction test
    wordpress: Transaction test succeeded
    wordpress: Running transaction
    wordpress:   Updating   : 1:mariadb-libs-5.5.65-1.el7.x86_64                          1/63
    wordpress:  
    wordpress:   Installing : fontpackages-filesystem-1.44-8.el7.noarch                   2/63
    wordpress:  
    wordpress:   Installing : dejavu-fonts-common-2.33-6.el7.noarch                       3/63
    wordpress:  
    wordpress:   Installing : dejavu-sans-fonts-2.33-6.el7.noarch                         4/63
    wordpress:  
    wordpress:   Installing : fontconfig-2.13.0-4.3.el7.x86_64                            5/63
    wordpress:  
    wordpress:   Installing : 1:perl-parent-0.225-244.el7.noarch                          6/63
    wordpress:  
    wordpress:   Installing : perl-HTTP-Tiny-0.033-3.el7.noarch                           7/63
    wordpress:  
    wordpress:   Installing : perl-podlators-2.5.1-3.el7.noarch                           8/63
    wordpress:  
    wordpress:   Installing : perl-Pod-Perldoc-3.20-4.el7.noarch                          9/63
    wordpress:  
    wordpress:   Installing : 1:perl-Pod-Escapes-1.04-295.el7.noarch                     10/63
    wordpress:  
    wordpress:   Installing : perl-Text-ParseWords-3.29-4.el7.noarch                     11/63
    wordpress:  
    wordpress:   Installing : perl-Encode-2.51-7.el7.x86_64                              12/63
    wordpress:  
    wordpress:   Installing : perl-Pod-Usage-1.63-3.el7.noarch                           13/63
    wordpress:  
    wordpress:   Installing : 4:perl-libs-5.16.3-295.el7.x86_64                          14/63
    wordpress:  
    wordpress:   Installing : 4:perl-macros-5.16.3-295.el7.x86_64                        15/63
    wordpress:  
    wordpress:   Installing : 4:perl-Time-HiRes-1.9725-3.el7.x86_64                      16/63
    wordpress:  
    wordpress:   Installing : perl-Exporter-5.68-3.el7.noarch                            17/63
    wordpress:  
    wordpress:   Installing : perl-constant-1.27-2.el7.noarch                            18/63
    wordpress:  
    wordpress:   Installing : perl-threads-1.87-4.el7.x86_64                             19/63
    wordpress:  
    wordpress:   Installing : perl-Socket-2.010-5.el7.x86_64                             20/63
    wordpress:  
    wordpress:   Installing : perl-Time-Local-1.2300-2.el7.noarch                        21/63
    wordpress:  
    wordpress:   Installing : perl-Carp-1.26-244.el7.noarch                              22/63
    wordpress:  
    wordpress:   Installing : perl-Storable-2.45-3.el7.x86_64                            23/63
    wordpress:  
    wordpress:   Installing : perl-threads-shared-1.43-6.el7.x86_64                      24/63
    wordpress:  
    wordpress:   Installing : perl-PathTools-3.40-5.el7.x86_64                           25/63
    wordpress:  
    wordpress:   Installing : perl-Scalar-List-Utils-1.27-248.el7.x86_64                 26/63
    wordpress:  
    wordpress:   Installing : perl-File-Temp-0.23.01-3.el7.noarch                        27/63
    wordpress:  
    wordpress:   Installing : perl-File-Path-2.09-2.el7.noarch                           28/63
    wordpress:  
    wordpress:   Installing : perl-Filter-1.49-3.el7.x86_64                              29/63
    wordpress:  
    wordpress:   Installing : 1:perl-Pod-Simple-3.28-4.el7.noarch                        30/63
    wordpress:  
    wordpress:   Installing : perl-Getopt-Long-2.40-3.el7.noarch                         31/63
    wordpress:  
    wordpress:   Installing : 4:perl-5.16.3-295.el7.x86_64                               32/63
    wordpress:  
    wordpress:   Installing : perl-Data-Dumper-2.145-3.el7.x86_64                        33/63
    wordpress:  
    wordpress:   Installing : 1:perl-Compress-Raw-Zlib-2.061-4.el7.x86_64                34/63
    wordpress:  
    wordpress:   Installing : perl-Compress-Raw-Bzip2-2.061-3.el7.x86_64                 35/63
    wordpress:  
    wordpress:   Installing : perl-IO-Compress-2.061-2.el7.noarch                        36/63
    wordpress:  
    wordpress:   Installing : perl-Net-Daemon-0.48-5.el7.noarch                          37/63
    wordpress:  
    wordpress:   Installing : perl-PlRPC-0.2020-14.el7.noarch                            38/63
    wordpress:  
    wordpress:   Installing : perl-DBI-1.627-4.el7.x86_64                                39/63
    wordpress:  
    wordpress:   Installing : perl-DBD-MySQL-4.023-6.el7.x86_64                          40/63
    wordpress:  
    wordpress:   Installing : 1:mariadb-5.5.65-1.el7.x86_64                              41/63
    wordpress:  
    wordpress:   Installing : gperftools-libs-2.6.1-1.el7.x86_64                         42/63
    wordpress:  
    wordpress:   Installing : libXau-1.0.8-2.1.el7.x86_64                                43/63
    wordpress:  
    wordpress:   Installing : libxcb-1.13-1.el7.x86_64                                   44/63
    wordpress:  
    wordpress:   Installing : centos-indexhtml-7-9.el7.centos.noarch                     45/63
    wordpress:  
    wordpress:   Installing : libjpeg-turbo-1.2.90-8.el7.x86_64                          46/63
    wordpress:  
    wordpress:   Installing : libX11-common-1.6.7-2.el7.noarch                           47/63
    wordpress:  
    wordpress:   Installing : libX11-1.6.7-2.el7.x86_64                                  48/63
    wordpress:  
    wordpress:   Installing : libXpm-3.5.12-1.el7.x86_64                                 49/63
    wordpress:  
    wordpress:   Installing : gd-2.0.35-26.el7.x86_64                                    50/63
    wordpress:  
    wordpress:   Installing : libaio-0.3.109-13.el7.x86_64                               51/63
    wordpress:  
    wordpress:   Installing : centos-logos-70.0.6-3.el7.centos.noarch                    52/63
    wordpress:  
    wordpress:   Installing : 1:nginx-filesystem-1.16.1-1.el7.noarch                     53/63
    wordpress:  
    wordpress:   Installing : 1:nginx-mod-mail-1.16.1-1.el7.x86_64                       54/63
    wordpress:  
    wordpress:   Installing : 1:nginx-mod-stream-1.16.1-1.el7.x86_64                     55/63
    wordpress:  
    wordpress:   Installing : 1:nginx-mod-http-xslt-filter-1.16.1-1.el7.x86_64           56/63
    wordpress:  
    wordpress:   Installing : 1:nginx-mod-http-image-filter-1.16.1-1.el7.x86_64          57/63
    wordpress:  
    wordpress:   Installing : 1:nginx-1.16.1-1.el7.x86_64                                58/63
    wordpress:  
    wordpress:   Installing : 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64                  59/63
    wordpress:  
    wordpress:   Installing : 1:nginx-all-modules-1.16.1-1.el7.noarch                    60/63
    wordpress:  
    wordpress:   Installing : 1:mariadb-server-5.5.65-1.el7.x86_64                       61/63
    wordpress:  
    wordpress:   Installing : wget-1.14-18.el7_6.1.x86_64                                62/63
    wordpress:  
    wordpress:   Cleanup    : 1:mariadb-libs-5.5.60-1.el7_5.x86_64                       63/63
    wordpress:  
    wordpress:   Verifying  : perl-HTTP-Tiny-0.033-3.el7.noarch                           1/63
    wordpress:  
    wordpress:   Verifying  : 1:mariadb-server-5.5.65-1.el7.x86_64                        2/63
    wordpress:  
    wordpress:   Verifying  : fontconfig-2.13.0-4.3.el7.x86_64                            3/63
    wordpress:  
    wordpress:   Verifying  : 1:nginx-filesystem-1.16.1-1.el7.noarch                      4/63
    wordpress:  
    wordpress:   Verifying  : perl-threads-shared-1.43-6.el7.x86_64                       5/63
    wordpress:  
    wordpress:   Verifying  : 4:perl-Time-HiRes-1.9725-3.el7.x86_64                       6/63
    wordpress:  
    wordpress:   Verifying  : 1:perl-Pod-Escapes-1.04-295.el7.noarch                      7/63
    wordpress:  
    wordpress:   Verifying  : perl-Exporter-5.68-3.el7.noarch                             8/63
    wordpress:  
    wordpress:   Verifying  : perl-constant-1.27-2.el7.noarch                             9/63
    wordpress:  
    wordpress:   Verifying  : perl-PathTools-3.40-5.el7.x86_64                           10/63
    wordpress:  
    wordpress:   Verifying  : perl-threads-1.87-4.el7.x86_64                             11/63
    wordpress:  
    wordpress:   Verifying  : 1:nginx-mod-mail-1.16.1-1.el7.x86_64                       12/63
    wordpress:  
    wordpress:   Verifying  : 1:nginx-mod-http-perl-1.16.1-1.el7.x86_64                  13/63
    wordpress:  
    wordpress:   Verifying  : perl-Socket-2.010-5.el7.x86_64                             14/63
    wordpress:  
    wordpress:   Verifying  : 1:perl-Compress-Raw-Zlib-2.061-4.el7.x86_64                15/63
    wordpress:  
    wordpress:   Verifying  : centos-logos-70.0.6-3.el7.centos.noarch                    16/63
    wordpress:  
    wordpress:   Verifying  : 1:perl-parent-0.225-244.el7.noarch                         17/63
    wordpress:  
    wordpress:   Verifying  : perl-Compress-Raw-Bzip2-2.061-3.el7.x86_64                 18/63
    wordpress:  
    wordpress:   Verifying  : perl-Net-Daemon-0.48-5.el7.noarch                          19/63
    wordpress:  
    wordpress:   Verifying  : libX11-1.6.7-2.el7.x86_64                                  20/63
    wordpress:  
    wordpress:   Verifying  : perl-Pod-Usage-1.63-3.el7.noarch                           21/63
    wordpress:  
    wordpress:   Verifying  : 4:perl-libs-5.16.3-295.el7.x86_64                          22/63
    wordpress:  
    wordpress:   Verifying  : perl-File-Temp-0.23.01-3.el7.noarch                        23/63
    wordpress:  
    wordpress:   Verifying  : 1:perl-Pod-Simple-3.28-4.el7.noarch                        24/63
    wordpress:  
    wordpress:   Verifying  : perl-Time-Local-1.2300-2.el7.noarch                        25/63
    wordpress:  
    wordpress:   Verifying  : 1:mariadb-5.5.65-1.el7.x86_64                              26/63
    wordpress:  
    wordpress:   Verifying  : fontpackages-filesystem-1.44-8.el7.noarch                  27/63
    wordpress:  
    wordpress:   Verifying  : perl-Text-ParseWords-3.29-4.el7.noarch                     28/63
    wordpress:  
    wordpress:   Verifying  : perl-DBI-1.627-4.el7.x86_64                                29/63
    wordpress:  
    wordpress:   Verifying  : libaio-0.3.109-13.el7.x86_64                               30/63
    wordpress:  
    wordpress:   Verifying  : 4:perl-macros-5.16.3-295.el7.x86_64                        31/63
    wordpress:  
    wordpress:   Verifying  : 4:perl-5.16.3-295.el7.x86_64                               32/63
    wordpress:  
    wordpress:   Verifying  : libX11-common-1.6.7-2.el7.noarch                           33/63
    wordpress:  
    wordpress:   Verifying  : libXpm-3.5.12-1.el7.x86_64                                 34/63
    wordpress:  
    wordpress:   Verifying  : 1:nginx-mod-stream-1.16.1-1.el7.x86_64                     35/63
    wordpress:  
    wordpress:   Verifying  : perl-Carp-1.26-244.el7.noarch                              36/63
    wordpress:  
    wordpress:   Verifying  : libxcb-1.13-1.el7.x86_64                                   37/63
    wordpress:  
    wordpress:   Verifying  : perl-Data-Dumper-2.145-3.el7.x86_64                        38/63
    wordpress:  
    wordpress:   Verifying  : perl-Storable-2.45-3.el7.x86_64                            39/63
    wordpress:  
    wordpress:   Verifying  : dejavu-sans-fonts-2.33-6.el7.noarch                        40/63
    wordpress:  
    wordpress:   Verifying  : perl-Scalar-List-Utils-1.27-248.el7.x86_64                 41/63
    wordpress:  
    wordpress:   Verifying  : 1:nginx-1.16.1-1.el7.x86_64                                42/63
    wordpress:  
    wordpress:   Verifying  : libjpeg-turbo-1.2.90-8.el7.x86_64                          43/63
    wordpress:  
    wordpress:   Verifying  : perl-PlRPC-0.2020-14.el7.noarch                            44/63
    wordpress:  
    wordpress:   Verifying  : 1:nginx-all-modules-1.16.1-1.el7.noarch                    45/63
    wordpress:  
    wordpress:   Verifying  : 1:nginx-mod-http-xslt-filter-1.16.1-1.el7.x86_64           46/63
    wordpress:  
    wordpress:   Verifying  : perl-IO-Compress-2.061-2.el7.noarch                        47/63
    wordpress:  
    wordpress:   Verifying  : centos-indexhtml-7-9.el7.centos.noarch                     48/63
    wordpress:  
    wordpress:   Verifying  : 1:nginx-mod-http-image-filter-1.16.1-1.el7.x86_64          49/63
    wordpress:  
    wordpress:   Verifying  : perl-Encode-2.51-7.el7.x86_64                              50/63
    wordpress:  
    wordpress:   Verifying  : perl-Pod-Perldoc-3.20-4.el7.noarch                         51/63
    wordpress:  
    wordpress:   Verifying  : perl-podlators-2.5.1-3.el7.noarch                          52/63
    wordpress:  
    wordpress:   Verifying  : libXau-1.0.8-2.1.el7.x86_64                                53/63
    wordpress:  
    wordpress:   Verifying  : perl-File-Path-2.09-2.el7.noarch                           54/63
    wordpress:  
    wordpress:   Verifying  : perl-DBD-MySQL-4.023-6.el7.x86_64                          55/63
    wordpress:  
    wordpress:   Verifying  : gperftools-libs-2.6.1-1.el7.x86_64                         56/63
    wordpress:  
    wordpress:   Verifying  : perl-Filter-1.49-3.el7.x86_64                              57/63
    wordpress:  
    wordpress:   Verifying  : perl-Getopt-Long-2.40-3.el7.noarch                         58/63
    wordpress:  
    wordpress:   Verifying  : 1:mariadb-libs-5.5.65-1.el7.x86_64                         59/63
    wordpress:  
    wordpress:   Verifying  : wget-1.14-18.el7_6.1.x86_64                                60/63
    wordpress:  
    wordpress:   Verifying  : gd-2.0.35-26.el7.x86_64                                    61/63
    wordpress:  
    wordpress:   Verifying  : dejavu-fonts-common-2.33-6.el7.noarch                      62/63
    wordpress:  
    wordpress:   Verifying  : 1:mariadb-libs-5.5.60-1.el7_5.x86_64                       63/63
    wordpress:  
    wordpress: 
    wordpress: Installed:
    wordpress:   mariadb-server.x86_64 1:5.5.65-1.el7        nginx.x86_64 1:1.16.1-1.el7       
    wordpress:   wget.x86_64 0:1.14-18.el7_6.1              
    wordpress: 
    wordpress: Dependency Installed:
    wordpress:   centos-indexhtml.noarch 0:7-9.el7.centos                                      
    wordpress:   centos-logos.noarch 0:70.0.6-3.el7.centos                                     
    wordpress:   dejavu-fonts-common.noarch 0:2.33-6.el7                                       
    wordpress:   dejavu-sans-fonts.noarch 0:2.33-6.el7                                         
    wordpress:   fontconfig.x86_64 0:2.13.0-4.3.el7                                            
    wordpress:   fontpackages-filesystem.noarch 0:1.44-8.el7                                   
    wordpress:   gd.x86_64 0:2.0.35-26.el7                                                     
    wordpress:   gperftools-libs.x86_64 0:2.6.1-1.el7                                          
    wordpress:   libX11.x86_64 0:1.6.7-2.el7                                                   
    wordpress:   libX11-common.noarch 0:1.6.7-2.el7                                            
    wordpress:   libXau.x86_64 0:1.0.8-2.1.el7                                                 
    wordpress:   libXpm.x86_64 0:3.5.12-1.el7                                                  
    wordpress:   libaio.x86_64 0:0.3.109-13.el7                                                
    wordpress:   libjpeg-turbo.x86_64 0:1.2.90-8.el7                                           
    wordpress:   libxcb.x86_64 0:1.13-1.el7                                                    
    wordpress:   mariadb.x86_64 1:5.5.65-1.el7                                                 
    wordpress:   nginx-all-modules.noarch 1:1.16.1-1.el7                                       
    wordpress:   nginx-filesystem.noarch 1:1.16.1-1.el7                                        
    wordpress:   nginx-mod-http-image-filter.x86_64 1:1.16.1-1.el7                             
    wordpress:   nginx-mod-http-perl.x86_64 1:1.16.1-1.el7                                     
    wordpress:   nginx-mod-http-xslt-filter.x86_64 1:1.16.1-1.el7                              
    wordpress:   nginx-mod-mail.x86_64 1:1.16.1-1.el7                                          
    wordpress:   nginx-mod-stream.x86_64 1:1.16.1-1.el7                                        
    wordpress:   perl.x86_64 4:5.16.3-295.el7                                                  
    wordpress:   perl-Carp.noarch 0:1.26-244.el7                                               
    wordpress:   perl-Compress-Raw-Bzip2.x86_64 0:2.061-3.el7                                  
    wordpress:   perl-Compress-Raw-Zlib.x86_64 1:2.061-4.el7                                   
    wordpress:   perl-DBD-MySQL.x86_64 0:4.023-6.el7                                           
    wordpress:   perl-DBI.x86_64 0:1.627-4.el7                                                 
    wordpress:   perl-Data-Dumper.x86_64 0:2.145-3.el7                                         
    wordpress:   perl-Encode.x86_64 0:2.51-7.el7                                               
    wordpress:   perl-Exporter.noarch 0:5.68-3.el7                                             
    wordpress:   perl-File-Path.noarch 0:2.09-2.el7                                            
    wordpress:   perl-File-Temp.noarch 0:0.23.01-3.el7                                         
    wordpress:   perl-Filter.x86_64 0:1.49-3.el7                                               
    wordpress:   perl-Getopt-Long.noarch 0:2.40-3.el7                                          
    wordpress:   perl-HTTP-Tiny.noarch 0:0.033-3.el7                                           
    wordpress:   perl-IO-Compress.noarch 0:2.061-2.el7                                         
    wordpress:   perl-Net-Daemon.noarch 0:0.48-5.el7                                           
    wordpress:   perl-PathTools.x86_64 0:3.40-5.el7                                            
    wordpress:   perl-PlRPC.noarch 0:0.2020-14.el7                                             
    wordpress:   perl-Pod-Escapes.noarch 1:1.04-295.el7                                        
    wordpress:   perl-Pod-Perldoc.noarch 0:3.20-4.el7                                          
    wordpress:   perl-Pod-Simple.noarch 1:3.28-4.el7                                           
    wordpress:   perl-Pod-Usage.noarch 0:1.63-3.el7                                            
    wordpress:   perl-Scalar-List-Utils.x86_64 0:1.27-248.el7                                  
    wordpress:   perl-Socket.x86_64 0:2.010-5.el7                                              
    wordpress:   perl-Storable.x86_64 0:2.45-3.el7                                             
    wordpress:   perl-Text-ParseWords.noarch 0:3.29-4.el7                                      
    wordpress:   perl-Time-HiRes.x86_64 4:1.9725-3.el7                                         
    wordpress:   perl-Time-Local.noarch 0:1.2300-2.el7                                         
    wordpress:   perl-constant.noarch 0:1.27-2.el7                                             
    wordpress:   perl-libs.x86_64 4:5.16.3-295.el7                                             
    wordpress:   perl-macros.x86_64 4:5.16.3-295.el7                                           
    wordpress:   perl-parent.noarch 1:0.225-244.el7                                            
    wordpress:   perl-podlators.noarch 0:2.5.1-3.el7                                           
    wordpress:   perl-threads.x86_64 0:1.87-4.el7                                              
    wordpress:   perl-threads-shared.x86_64 0:1.43-6.el7                                       
    wordpress: 
    wordpress: Dependency Updated:
    wordpress:   mariadb-libs.x86_64 1:5.5.65-1.el7                                            
    wordpress: 
    wordpress: Complete!
    wordpress: --2020-05-08 04:15:24--  http://rpms.remirepo.net/enterprise/remi-release-7.rpm
    wordpress: Resolving rpms.remirepo.net (rpms.remirepo.net)... 
    wordpress: 195.154.241.117, 2001:bc8:33a1:100::1
    wordpress: Connecting to rpms.remirepo.net (rpms.remirepo.net)|195.154.241.117|:80... 
    wordpress: connected.
    wordpress: HTTP request sent, awaiting response... 
    wordpress: 200 OK
    wordpress: Length: 20440 (20K) [application/x-rpm]
    wordpress: Saving to: ‘remi-release-7.rpm’
    wordpress: 
    wordpress:      0K .......... ..
    wordpress: .......                                  100%  240K=0.08s
    wordpress: 
    wordpress: 2020-05-08 04:15:25 (240 KB/s) - ‘remi-release-7.rpm’ saved [20440/20440]
    wordpress: warning: remi-release-7.rpm: Header V4 DSA/SHA1 Signature, key ID 00f97f56: NOKEY
    wordpress: Preparing...                          ########################################
    wordpress: Updating / installing...
    wordpress: remi-release-7.7-2.el7.remi           #####################
    wordpress: ###################
    wordpress: Loaded plugins: fastestmirror
    wordpress: Loading mirror speeds from cached hostfile
    wordpress:  * base: ftp.hosteurope.de
    wordpress:  * epel: mirror.de.leaseweb.net
    wordpress:  * extras: ftp.rz.uni-frankfurt.de
    wordpress:  * remi: mirror.23media.com
    wordpress:  * remi-php71: mirror.23media.com
    wordpress:  * remi-safe: mirror.23media.com
    wordpress:  * updates: mirror.imt-systems.com
    wordpress: Resolving Dependencies
    wordpress: --> Running transaction check
    wordpress: ---> Package php-common.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: --> Processing Dependency: php-json(x86-64) = 7.1.33-7.el7.remi for package: php-common-7.1.33-7.el7.remi.x86_64
    wordpress: ---> Package php-fpm.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: --> Running transaction check
    wordpress: ---> Package php-json.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: --> Finished Dependency Resolution
    wordpress: 
    wordpress: Dependencies Resolved
    wordpress: 
    wordpress: ================================================================================
    wordpress:  Package          Arch         Version                   Repository        Size
    wordpress: ================================================================================
    wordpress: Installing:
    wordpress:  php-common       x86_64       7.1.33-7.el7.remi         remi-php71       1.0 M
    wordpress:  php-fpm          x86_64       7.1.33-7.el7.remi         remi-php71       1.6 M
    wordpress: Installing for dependencies:
    wordpress:  php-json         x86_64       7.1.33-7.el7.remi         remi-php71        64 k
    wordpress: 
    wordpress: Transaction Summary
    wordpress: ================================================================================
    wordpress: Install  2 Packages (+1 Dependent package)
    wordpress: 
    wordpress: Total download size: 2.6 M
    wordpress: Installed size: 13 M
    wordpress: Downloading packages:
    wordpress: Public key for php-common-7.1.33-7.el7.remi.x86_64.rpm is not installed
    wordpress: warning: /var/cache/yum/x86_64/7/remi-php71/packages/php-common-7.1.33-7.el7.remi.x86_64.rpm: Header V4 DSA/SHA1 Signature, key ID 00f97f56: NOKEY
    wordpress: --------------------------------------------------------------------------------
    wordpress: Total                                              2.9 MB/s | 2.6 MB  00:00     
    wordpress: Retrieving key from file:///etc/pki/rpm-gpg/RPM-GPG-KEY-remi
    wordpress: Importing GPG key 0x00F97F56:
    wordpress:  Userid     : "Remi Collet <RPMS@FamilleCollet.com>"
    wordpress:  Fingerprint: 1ee0 4cce 88a4 ae4a a29a 5df5 004e 6f47 00f9 7f56
    wordpress:  Package    : remi-release-7.7-2.el7.remi.noarch (installed)
    wordpress:  From       : /etc/pki/rpm-gpg/RPM-GPG-KEY-remi
    wordpress: Running transaction check
    wordpress: Running transaction test
    wordpress: Transaction test succeeded
    wordpress: Running transaction
    wordpress: Warning: RPMDB altered outside of yum.
    wordpress:   Installing : php-common-7.1.33-7.el7.remi.x86_64                          1/3
    wordpress:  
    wordpress:   Installing : php-json-7.1.33-7.el7.remi.x86_64                            2/3
    wordpress:  
    wordpress:   Installing : php-fpm-7.1.33-7.el7.remi.x86_64                             3/3
    wordpress:  
    wordpress: =====================================================================
    wordpress: 
    wordpress:   WARNING : PHP 7.1 have reached its "End of Life" in
    wordpress:   December 2019. Even, if this package includes some of
    wordpress:   the important security fix, backported from 7.2, the
    wordpress:   UPGRADE to a maintained version is very strongly RECOMMENDED.
    wordpress: 
    wordpress: =====================================================================
    wordpress:   Verifying  : php-fpm-7.1.33-7.el7.remi.x86_64                             1/3
    wordpress:  
    wordpress:   Verifying  : php-json-7.1.33-7.el7.remi.x86_64                            2/3
    wordpress:  
    wordpress:   Verifying  : php-common-7.1.33-7.el7.remi.x86_64                          3/3
    wordpress:  
    wordpress: 
    wordpress: Installed:
    wordpress:   php-common.x86_64 0:7.1.33-7.el7.remi    php-fpm.x86_64 0:7.1.33-7.el7.remi   
    wordpress: 
    wordpress: Dependency Installed:
    wordpress:   php-json.x86_64 0:7.1.33-7.el7.remi                                           
    wordpress: 
    wordpress: Complete!
    wordpress: Loaded plugins: fastestmirror
    wordpress: Loading mirror speeds from cached hostfile
    wordpress:  * base: ftp.hosteurope.de
    wordpress:  * epel: mirror.de.leaseweb.net
    wordpress:  * extras: ftp.rz.uni-frankfurt.de
    wordpress:  * remi: mirror.23media.com
    wordpress:  * remi-php71: mirror.23media.com
    wordpress:  * remi-safe: mirror.23media.com
    wordpress:  * updates: mirror.imt-systems.com
    wordpress: Resolving Dependencies
    wordpress: --> Running transaction check
    wordpress: ---> Package php-cli.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: ---> Package php-gd.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: --> Processing Dependency: gd-last(x86-64) >= 2.1.1 for package: php-gd-7.1.33-7.el7.remi.x86_64
    wordpress: --> Processing Dependency: libgd.so.3()(64bit) for package: php-gd-7.1.33-7.el7.remi.x86_64
    wordpress: ---> Package php-mbstring.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: ---> Package php-mcrypt.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: --> Processing Dependency: libmcrypt.so.4()(64bit) for package: php-mcrypt-7.1.33-7.el7.remi.x86_64
    wordpress: ---> Package php-mysqlnd.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: ---> Package php-opcache.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: ---> Package php-pdo.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: ---> Package php-pear.noarch 1:1.10.12-1.el7.remi will be installed
    wordpress: --> Processing Dependency: php-composer(fedora/autoloader) for package: 1:php-pear-1.10.12-1.el7.remi.noarch
    wordpress: --> Processing Dependency: php-posix for package: 1:php-pear-1.10.12-1.el7.remi.noarch
    wordpress: ---> Package php-pecl-apcu.x86_64 0:5.1.18-1.el7.remi.7.1 will be installed
    wordpress: ---> Package php-pecl-memcache.x86_64 0:4.0.5.2-1.el7.remi.7.1 will be installed
    wordpress: ---> Package php-pecl-memcached.x86_64 0:3.1.5-1.el7.remi.7.1 will be installed
    wordpress: --> Processing Dependency: fastlz(x86-64) for package: php-pecl-memcached-3.1.5-1.el7.remi.7.1.x86_64
    wordpress: --> Processing Dependency: libmemcached-opt-libs(x86-64) for package: php-pecl-memcached-3.1.5-1.el7.remi.7.1.x86_64
    wordpress: --> Processing Dependency: php-pecl-igbinary(x86-64) for package: php-pecl-memcached-3.1.5-1.el7.remi.7.1.x86_64
    wordpress: --> Processing Dependency: php-pecl-msgpack(x86-64) for package: php-pecl-memcached-3.1.5-1.el7.remi.7.1.x86_64
    wordpress: ---> Package php-pecl-mongodb.x86_64 0:1.7.4-1.el7.remi.7.1 will be installed
    wordpress: --> Processing Dependency: libicudata.so.62()(64bit) for package: php-pecl-mongodb-1.7.4-1.el7.remi.7.1.x86_64
    wordpress: --> Processing Dependency: libicuuc.so.62()(64bit) for package: php-pecl-mongodb-1.7.4-1.el7.remi.7.1.x86_64
    wordpress: --> Processing Dependency: libsnappy.so.1()(64bit) for package: php-pecl-mongodb-1.7.4-1.el7.remi.7.1.x86_64
    wordpress: ---> Package php-pecl-redis.x86_64 0:3.1.6-1.el7.remi.7.1 will be installed
    wordpress: ---> Package php-pgsql.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: --> Processing Dependency: libpq.so.5()(64bit) for package: php-pgsql-7.1.33-7.el7.remi.x86_64
    wordpress: ---> Package php-xml.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: --> Running transaction check
    wordpress: ---> Package fastlz.x86_64 0:0.1.0-0.1.20070619svnrev12.el7.remi will be installed
    wordpress: ---> Package gd-last.x86_64 0:2.3.0-1.el7.remi will be installed
    wordpress: --> Processing Dependency: libtiff.so.5(LIBTIFF_4.0)(64bit) for package: gd-last-2.3.0-1.el7.remi.x86_64
    wordpress: --> Processing Dependency: libraqm.so.0()(64bit) for package: gd-last-2.3.0-1.el7.remi.x86_64
    wordpress: --> Processing Dependency: libtiff.so.5()(64bit) for package: gd-last-2.3.0-1.el7.remi.x86_64
    wordpress: --> Processing Dependency: libwebp.so.7()(64bit) for package: gd-last-2.3.0-1.el7.remi.x86_64
    wordpress: ---> Package libicu62.x86_64 0:62.2-1.el7.remi will be installed
    wordpress: ---> Package libmcrypt.x86_64 0:2.5.8-13.el7 will be installed
    wordpress: ---> Package libmemcached-opt-libs.x86_64 0:1.0.18-2.el7.remi will be installed
    wordpress: ---> Package php-fedora-autoloader.noarch 0:1.0.1-2.el7.remi will be installed
    wordpress: ---> Package php-pecl-igbinary.x86_64 0:3.1.2-1.el7.remi.7.1 will be installed
    wordpress: ---> Package php-pecl-msgpack.x86_64 0:2.1.0-1.el7.remi.7.1 will be installed
    wordpress: ---> Package php-process.x86_64 0:7.1.33-7.el7.remi will be installed
    wordpress: ---> Package postgresql-libs.x86_64 0:9.2.24-2.el7_7 will be installed
    wordpress: ---> Package snappy.x86_64 0:1.1.0-3.el7 will be installed
    wordpress: --> Running transaction check
    wordpress: ---> Package libraqm.x86_64 0:0.7.0-4.el7 will be installed
    wordpress: --> Processing Dependency: libfribidi.so.0()(64bit) for package: libraqm-0.7.0-4.el7.x86_64
    wordpress: --> Processing Dependency: libharfbuzz.so.0()(64bit) for package: libraqm-0.7.0-4.el7.x86_64
    wordpress: ---> Package libtiff.x86_64 0:4.0.3-32.el7 will be installed
    wordpress: --> Processing Dependency: libjbig.so.2.0()(64bit) for package: libtiff-4.0.3-32.el7.x86_64
    wordpress: ---> Package libwebp7.x86_64 0:1.0.3-1.el7.remi will be installed
    wordpress: --> Running transaction check
    wordpress: ---> Package fribidi.x86_64 0:1.0.2-1.el7_7.1 will be installed
    wordpress: ---> Package harfbuzz.x86_64 0:1.7.5-2.el7 will be installed
    wordpress: --> Processing Dependency: libgraphite2.so.3()(64bit) for package: harfbuzz-1.7.5-2.el7.x86_64
    wordpress: ---> Package jbigkit-libs.x86_64 0:2.0-11.el7 will be installed
    wordpress: --> Running transaction check
    wordpress: ---> Package graphite2.x86_64 0:1.3.10-1.el7_3 will be installed
    wordpress: --> Finished Dependency Resolution
    wordpress: 
    wordpress: Dependencies Resolved
    wordpress: 
    wordpress: ================================================================================
    wordpress:  Package               Arch   Version                          Repository  Size
    wordpress: ================================================================================
    wordpress: Installing:
    wordpress:  php-cli               x86_64 7.1.33-7.el7.remi                remi-php71 4.6 M
    wordpress:  php-gd                x86_64 7.1.33-7.el7.remi                remi-php71  78 k
    wordpress:  php-mbstring          x86_64 7.1.33-7.el7.remi                remi-php71 581 k
    wordpress:  php-mcrypt            x86_64 7.1.33-7.el7.remi                remi-php71  62 k
    wordpress:  php-mysqlnd           x86_64 7.1.33-7.el7.remi                remi-php71 233 k
    wordpress:  php-opcache           x86_64 7.1.33-7.el7.remi                remi-php71 245 k
    wordpress:  php-pdo               x86_64 7.1.33-7.el7.remi                remi-php71 127 k
    wordpress:  php-pear              noarch 1:1.10.12-1.el7.remi             remi       362 k
    wordpress:  php-pecl-apcu         x86_64 5.1.18-1.el7.remi.7.1            remi-php71  75 k
    wordpress:  php-pecl-memcache     x86_64 4.0.5.2-1.el7.remi.7.1           remi-php71  90 k
    wordpress:  php-pecl-memcached    x86_64 3.1.5-1.el7.remi.7.1             remi-php71  87 k
    wordpress:  php-pecl-mongodb      x86_64 1.7.4-1.el7.remi.7.1             remi-php71 628 k
    wordpress:  php-pecl-redis        x86_64 3.1.6-1.el7.remi.7.1             remi-php71 179 k
    wordpress:  php-pgsql             x86_64 7.1.33-7.el7.remi                remi-php71 125 k
    wordpress:  php-xml               x86_64 7.1.33-7.el7.remi                remi-php71 212 k
    wordpress: Installing for dependencies:
    wordpress:  fastlz                x86_64 0.1.0-0.1.20070619svnrev12.el7.remi
    wordpress:                                                                remi       8.8 k
    wordpress:  fribidi               x86_64 1.0.2-1.el7_7.1                  base        79 k
    wordpress:  gd-last               x86_64 2.3.0-1.el7.remi                 remi       135 k
    wordpress:  graphite2             x86_64 1.3.10-1.el7_3                   base       115 k
    wordpress:  harfbuzz              x86_64 1.7.5-2.el7                      base       267 k
    wordpress:  jbigkit-libs          x86_64 2.0-11.el7                       base        46 k
    wordpress:  libicu62              x86_64 62.2-1.el7.remi                  remi       8.8 M
    wordpress:  libmcrypt             x86_64 2.5.8-13.el7                     epel        99 k
    wordpress:  libmemcached-opt-libs x86_64 1.0.18-2.el7.remi                remi       127 k
    wordpress:  libraqm               x86_64 0.7.0-4.el7                      epel        15 k
    wordpress:  libtiff               x86_64 4.0.3-32.el7                     base       171 k
    wordpress:  libwebp7              x86_64 1.0.3-1.el7.remi                 remi       266 k
    wordpress:  php-fedora-autoloader noarch 1.0.1-2.el7.remi                 remi       9.1 k
    wordpress:  php-pecl-igbinary     x86_64 3.1.2-1.el7.remi.7.1             remi-php71  90 k
    wordpress:  php-pecl-msgpack      x86_64 2.1.0-1.el7.remi.7.1             remi-php71  58 k
    wordpress:  php-process           x86_64 7.1.33-7.el7.remi                remi-php71  81 k
    wordpress:  postgresql-libs       x86_64 9.2.24-2.el7_7                   updates    234 k
    wordpress:  snappy                x86_64 1.1.0-3.el7                      base        40 k
    wordpress: 
    wordpress: Transaction Summary
    wordpress: ================================================================================
    wordpress: Install  15 Packages (+18 Dependent packages)
    wordpress: 
    wordpress: Total download size: 18 M
    wordpress: Installed size: 63 M
    wordpress: Downloading packages:
    wordpress: --------------------------------------------------------------------------------
    wordpress: Total                                              5.5 MB/s |  18 MB  00:03     
    wordpress: Running transaction check
    wordpress: Running transaction test
    wordpress: Transaction test succeeded
    wordpress: Running transaction
    wordpress:   Installing : php-pdo-7.1.33-7.el7.remi.x86_64                            1/33
    wordpress:  
    wordpress:   Installing : php-pecl-igbinary-3.1.2-1.el7.remi.7.1.x86_64               2/33
    wordpress:  
    wordpress:   Installing : php-cli-7.1.33-7.el7.remi.x86_64                            3/33
    wordpress:  
    wordpress:   Installing : libwebp7-1.0.3-1.el7.remi.x86_64                            4/33
    wordpress:  
    wordpress:   Installing : graphite2-1.3.10-1.el7_3.x86_64                             5/33
    wordpress:  
    wordpress:   Installing : harfbuzz-1.7.5-2.el7.x86_64                                 6/33
    wordpress:  
    wordpress:   Installing : php-process-7.1.33-7.el7.remi.x86_64                        7/33
    wordpress:  
    wordpress:   Installing : jbigkit-libs-2.0-11.el7.x86_64                              8/33
    wordpress:  
    wordpress:   Installing : libtiff-4.0.3-32.el7.x86_64                                 9/33
    wordpress:  
    wordpress:   Installing : php-pecl-msgpack-2.1.0-1.el7.remi.7.1.x86_64               10/33
    wordpress:  
    wordpress:   Installing : postgresql-libs-9.2.24-2.el7_7.x86_64                      11/33
    wordpress:  
    wordpress:   Installing : libmemcached-opt-libs-1.0.18-2.el7.remi.x86_64             12/33
    wordpress:  
    wordpress:   Installing : fribidi-1.0.2-1.el7_7.1.x86_64                             13/33
    wordpress:  
    wordpress:   Installing : libraqm-0.7.0-4.el7.x86_64                                 14/33
    wordpress:  
    wordpress:   Installing : gd-last-2.3.0-1.el7.remi.x86_64                            15/33
    wordpress:  
    wordpress:   Installing : fastlz-0.1.0-0.1.20070619svnrev12.el7.remi.x86_64          16/33
    wordpress:  
    wordpress:   Installing : snappy-1.1.0-3.el7.x86_64                                  17/33
    wordpress:  
    wordpress:   Installing : libmcrypt-2.5.8-13.el7.x86_64                              18/33
    wordpress:  
    wordpress:   Installing : php-xml-7.1.33-7.el7.remi.x86_64                           19/33
    wordpress:  
    wordpress:   Installing : libicu62-62.2-1.el7.remi.x86_64                            20/33
    wordpress:  
    wordpress:   Installing : php-fedora-autoloader-1.0.1-2.el7.remi.noarch              21/33
    wordpress:  
    wordpress:   Installing : 1:php-pear-1.10.12-1.el7.remi.noarch                       22/33
    wordpress:  
    wordpress:   Installing : php-pecl-mongodb-1.7.4-1.el7.remi.7.1.x86_64               23/33
    wordpress:  
    wordpress:   Installing : php-mcrypt-7.1.33-7.el7.remi.x86_64                        24/33
    wordpress:  
    wordpress:   Installing : php-pecl-memcached-3.1.5-1.el7.remi.7.1.x86_64             25/33
    wordpress:  
    wordpress:   Installing : php-gd-7.1.33-7.el7.remi.x86_64                            26/33
    wordpress:  
    wordpress:   Installing : php-pgsql-7.1.33-7.el7.remi.x86_64                         27/33
    wordpress:  
    wordpress:   Installing : php-pecl-redis-3.1.6-1.el7.remi.7.1.x86_64                 28/33
    wordpress:  
    wordpress:   Installing : php-mysqlnd-7.1.33-7.el7.remi.x86_64                       29/33
    wordpress:  
    wordpress:   Installing : php-mbstring-7.1.33-7.el7.remi.x86_64                      30/33
    wordpress:  
    wordpress:   Installing : php-pecl-memcache-4.0.5.2-1.el7.remi.7.1.x86_64            31/33
    wordpress:  
    wordpress:   Installing : php-opcache-7.1.33-7.el7.remi.x86_64                       32/33
    wordpress:  
    wordpress:   Installing : php-pecl-apcu-5.1.18-1.el7.remi.7.1.x86_64                 33/33
    wordpress:  
    wordpress:   Verifying  : 1:php-pear-1.10.12-1.el7.remi.noarch                        1/33
    wordpress:  
    wordpress:   Verifying  : php-fedora-autoloader-1.0.1-2.el7.remi.noarch               2/33
    wordpress:  
    wordpress:   Verifying  : libicu62-62.2-1.el7.remi.x86_64                             3/33
    wordpress:  
    wordpress:   Verifying  : php-mcrypt-7.1.33-7.el7.remi.x86_64                         4/33
    wordpress:  
    wordpress:   Verifying  : php-pecl-apcu-5.1.18-1.el7.remi.7.1.x86_64                  5/33
    wordpress:  
    wordpress:   Verifying  : php-pecl-memcached-3.1.5-1.el7.remi.7.1.x86_64              6/33
    wordpress:  
    wordpress:   Verifying  : php-xml-7.1.33-7.el7.remi.x86_64                            7/33
    wordpress:  
    wordpress:   Verifying  : libmcrypt-2.5.8-13.el7.x86_64                               8/33
    wordpress:  
    wordpress:   Verifying  : php-pgsql-7.1.33-7.el7.remi.x86_64                          9/33
    wordpress:  
    wordpress:   Verifying  : php-gd-7.1.33-7.el7.remi.x86_64                            10/33
    wordpress:  
    wordpress:   Verifying  : php-opcache-7.1.33-7.el7.remi.x86_64                       11/33
    wordpress:  
    wordpress:   Verifying  : php-pecl-igbinary-3.1.2-1.el7.remi.7.1.x86_64              12/33
    wordpress:  
    wordpress:   Verifying  : snappy-1.1.0-3.el7.x86_64                                  13/33
    wordpress:  
    wordpress:   Verifying  : php-pdo-7.1.33-7.el7.remi.x86_64                           14/33
    wordpress:  
    wordpress:   Verifying  : fastlz-0.1.0-0.1.20070619svnrev12.el7.remi.x86_64          15/33
    wordpress:  
    wordpress:   Verifying  : fribidi-1.0.2-1.el7_7.1.x86_64                             16/33
    wordpress:  
    wordpress:   Verifying  : php-mysqlnd-7.1.33-7.el7.remi.x86_64                       17/33
    wordpress:  
    wordpress:   Verifying  : php-pecl-redis-3.1.6-1.el7.remi.7.1.x86_64                 18/33
    wordpress:  
    wordpress:   Verifying  : libmemcached-opt-libs-1.0.18-2.el7.remi.x86_64             19/33
    wordpress:  
    wordpress:   Verifying  : harfbuzz-1.7.5-2.el7.x86_64                                20/33
    wordpress:  
    wordpress:   Verifying  : postgresql-libs-9.2.24-2.el7_7.x86_64                      21/33
    wordpress:  
    wordpress:   Verifying  : php-pecl-msgpack-2.1.0-1.el7.remi.7.1.x86_64               22/33
    wordpress:  
    wordpress:   Verifying  : jbigkit-libs-2.0-11.el7.x86_64                             23/33
    wordpress:  
    wordpress:   Verifying  : libraqm-0.7.0-4.el7.x86_64                                 24/33
    wordpress:  
    wordpress:   Verifying  : gd-last-2.3.0-1.el7.remi.x86_64                            25/33
    wordpress:  
    wordpress:   Verifying  : php-process-7.1.33-7.el7.remi.x86_64                       26/33
    wordpress:  
    wordpress:   Verifying  : libtiff-4.0.3-32.el7.x86_64                                27/33
    wordpress:  
    wordpress:   Verifying  : php-pecl-memcache-4.0.5.2-1.el7.remi.7.1.x86_64            28/33
    wordpress:  
    wordpress:   Verifying  : graphite2-1.3.10-1.el7_3.x86_64                            29/33
    wordpress:  
    wordpress:   Verifying  : php-mbstring-7.1.33-7.el7.remi.x86_64                      30/33
    wordpress:  
    wordpress:   Verifying  : php-pecl-mongodb-1.7.4-1.el7.remi.7.1.x86_64               31/33
    wordpress:  
    wordpress:   Verifying  : libwebp7-1.0.3-1.el7.remi.x86_64                           32/33
    wordpress:  
    wordpress:   Verifying  : php-cli-7.1.33-7.el7.remi.x86_64                           33/33
    wordpress:  
    wordpress: 
    wordpress: Installed:
    wordpress:   php-cli.x86_64 0:7.1.33-7.el7.remi                                            
    wordpress:   php-gd.x86_64 0:7.1.33-7.el7.remi                                             
    wordpress:   php-mbstring.x86_64 0:7.1.33-7.el7.remi                                       
    wordpress:   php-mcrypt.x86_64 0:7.1.33-7.el7.remi                                         
    wordpress:   php-mysqlnd.x86_64 0:7.1.33-7.el7.remi                                        
    wordpress:   php-opcache.x86_64 0:7.1.33-7.el7.remi                                        
    wordpress:   php-pdo.x86_64 0:7.1.33-7.el7.remi                                            
    wordpress:   php-pear.noarch 1:1.10.12-1.el7.remi                                          
    wordpress:   php-pecl-apcu.x86_64 0:5.1.18-1.el7.remi.7.1                                  
    wordpress:   php-pecl-memcache.x86_64 0:4.0.5.2-1.el7.remi.7.1                             
    wordpress:   php-pecl-memcached.x86_64 0:3.1.5-1.el7.remi.7.1                              
    wordpress:   php-pecl-mongodb.x86_64 0:1.7.4-1.el7.remi.7.1                                
    wordpress:   php-pecl-redis.x86_64 0:3.1.6-1.el7.remi.7.1                                  
    wordpress:   php-pgsql.x86_64 0:7.1.33-7.el7.remi                                          
    wordpress:   php-xml.x86_64 0:7.1.33-7.el7.remi                                            
    wordpress: 
    wordpress: Dependency Installed:
    wordpress:   fastlz.x86_64 0:0.1.0-0.1.20070619svnrev12.el7.remi                           
    wordpress:   fribidi.x86_64 0:1.0.2-1.el7_7.1                                              
    wordpress:   gd-last.x86_64 0:2.3.0-1.el7.remi                                             
    wordpress:   graphite2.x86_64 0:1.3.10-1.el7_3                                             
    wordpress:   harfbuzz.x86_64 0:1.7.5-2.el7                                                 
    wordpress:   jbigkit-libs.x86_64 0:2.0-11.el7                                              
    wordpress:   libicu62.x86_64 0:62.2-1.el7.remi                                             
    wordpress:   libmcrypt.x86_64 0:2.5.8-13.el7                                               
    wordpress:   libmemcached-opt-libs.x86_64 0:1.0.18-2.el7.remi                              
    wordpress:   libraqm.x86_64 0:0.7.0-4.el7                                                  
    wordpress:   libtiff.x86_64 0:4.0.3-32.el7                                                 
    wordpress:   libwebp7.x86_64 0:1.0.3-1.el7.remi                                            
    wordpress:   php-fedora-autoloader.noarch 0:1.0.1-2.el7.remi                               
    wordpress:   php-pecl-igbinary.x86_64 0:3.1.2-1.el7.remi.7.1                               
    wordpress:   php-pecl-msgpack.x86_64 0:2.1.0-1.el7.remi.7.1                                
    wordpress:   php-process.x86_64 0:7.1.33-7.el7.remi                                        
    wordpress:   postgresql-libs.x86_64 0:9.2.24-2.el7_7                                       
    wordpress:   snappy.x86_64 0:1.1.0-3.el7                                                   
    wordpress: 
    wordpress: Complete!
    wordpress: --2020-05-08 04:15:54--  http://wordpress.org/latest.tar.gz
    wordpress: Resolving wordpress.org (wordpress.org)... 
    wordpress: 198.143.164.252
    wordpress: Connecting to wordpress.org (wordpress.org)|198.143.164.252|:80... 
    wordpress: connected.
    wordpress: HTTP request sent, awaiting response... 
    wordpress: 301 Moved Permanently
    wordpress: Location: https://wordpress.org/latest.tar.gz [following]
    wordpress: --2020-05-08 04:15:54--  https://wordpress.org/latest.tar.gz
    wordpress: Connecting to wordpress.org (wordpress.org)|198.143.164.252|:443... 
    wordpress: connected.
    wordpress: HTTP request sent, awaiting response... 
    wordpress: 200 OK
    wordpress: Length: 12234700 (12M) [application/octet-stream]
    wordpress: Saving to: ‘latest.tar.gz’
    wordpress: 
    wordpress:      0K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ...  0%  189K 63s
    wordpress:     50K .......... ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: .....  0%  567K 42s
    wordpress:    100K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: .......  1%  680K 34s
    wordpress:    150K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: .........  1%  935K 28s
    wordpress:    200K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . ..........  2% 1.09M 25s
    wordpress:    250K .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... ..........  2% 1.28M 22s
    wordpress:    300K ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... ..........  2% 1.89M 19s
    wordpress:    350K .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: .  3% 1.50M 18s
    wordpress:    400K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ...  3% 2.06M 16s
    wordpress:    450K .......... ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: .....  4% 2.40M 15s
    wordpress:    500K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: .......  4% 2.11M 14s
    wordpress:    550K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: .........  5% 4.15M 13s
    wordpress:    600K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . ..........  5% 3.00M 12s
    wordpress:    650K .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... ..........  5% 3.42M 12s
    wordpress:    700K ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... ..........  6% 3.67M 11s
    wordpress:    750K .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: .  6% 2.68M 11s
    wordpress:    800K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ...  7% 5.17M 10s
    wordpress:    850K .......... ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: .....  7% 2.67M 10s
    wordpress:    900K .......... .......... .......... .......... ...
    wordpress: .......  7% 16.0M 9s
    wordpress:    950K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: .........  8% 4.95M 9s
    wordpress:   1000K .......
    wordpress: ... .......... ...
    wordpress: ....... .......... ..........  8% 4.12M 8s
    wordpress:   1050K .....
    wordpress: ..... .......... .......... .......
    wordpress: ... ..........  9% 7.68M 8s
    wordpress:   1100K ...
    wordpress: ....... .......... .......... .......... ..........  9% 4.51M 8s
    wordpress:   1150K .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . 10% 5.21M 8s
    wordpress:   1200K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... 10% 5.76M 7s
    wordpress:   1250K .......... ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... 10% 4.15M 7s
    wordpress:   1300K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... 11% 9.74M 7s
    wordpress:   1350K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 11% 13.6M 7s
    wordpress:   1400K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . .......... 12% 7.28M 6s
    wordpress:   1450K .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... .......... 12% 7.44M 6s
    wordpress:   1500K ...
    wordpress: ....... .......... .......... .....
    wordpress: ..... .......... 12% 7.90M 6s
    wordpress:   1550K .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . 13% 4.36M 6s
    wordpress:   1600K .......... .......... .......... .
    wordpress: ......... .......
    wordpress: ... 13% 14.5M 6s
    wordpress:   1650K .......... ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... 14% 9.84M 5s
    wordpress:   1700K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... 14% 6.68M 5s
    wordpress:   1750K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 15% 8.61M 5s
    wordpress:   1800K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . .......... 15% 11.4M 5s
    wordpress:   1850K .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... .......... 15% 6.08M 5s
    wordpress:   1900K ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... .......... 16% 7.03M 5s
    wordpress:   1950K .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... .......... 16% 4.54M 5s
    wordpress:   2000K .......... .......... .......... .......... .......... 17% 93.3M 5s
    wordpress:   2050K .......... .......... .........
    wordpress: . .......... .....
    wordpress: ..... 17% 16.0M 4s
    wordpress:   2100K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... 17% 11.4M 4s
    wordpress:   2150K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 18% 7.52M 4s
    wordpress:   2200K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . .......... 18% 8.51M 4s
    wordpress:   2250K .......... .......... .
    wordpress: ......... .......
    wordpress: ... .......... 19% 16.4M 4s
    wordpress:   2300K ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... .......... 19% 2.71M 4s
    wordpress:   2350K .......... .......... .......... .......... .......... 20%  104M 4s
    wordpress:   2400K .......... .......... .......... .......... .......
    wordpress: ... 20% 26.6M 4s
    wordpress:   2450K .......... ...
    wordpress: ....... .......... .......... .....
    wordpress: ..... 20% 11.5M 4s
    wordpress:   2500K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... 21% 10.2M 4s
    wordpress:   2550K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 21% 12.4M 4s
    wordpress:   2600K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . .......... 22% 6.23M 4s
    wordpress:   2650K .......... .......... .
    wordpress: ......... .......... .......... 22% 32.1M 3s
    wordpress:   2700K ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... .......... 23% 8.30M 3s
    wordpress:   2750K .......... .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . 23% 13.9M 3s
    wordpress:   2800K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... 23% 11.3M 3s
    wordpress:   2850K .......... ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... 24% 8.72M 3s
    wordpress:   2900K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... 24% 12.8M 3s
    wordpress:   2950K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 25% 4.54M 3s
    wordpress:   3000K .......... .......... .......... .......... .......... 25%  129M 3s
    wordpress:   3050K .......... .......... .
    wordpress: ......... .......
    wordpress: ... .......... 25% 12.2M 3s
    wordpress:   3100K ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... .......... 26% 6.32M 3s
    wordpress:   3150K .
    wordpress: ......... .......
    wordpress: ... .......... .......... .........
    wordpress: . 26% 6.23M 3s
    wordpress:   3200K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... 27% 13.5M 3s
    wordpress:   3250K .......... ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... 27% 7.97M 3s
    wordpress:   3300K .......... .......... .......
    wordpress: ... .......... ...
    wordpress: ....... 28% 10.9M 3s
    wordpress:   3350K .......... .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 28% 20.0M 3s
    wordpress:   3400K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . .......... 28% 10.8M 3s
    wordpress:   3450K .....
    wordpress: ..... .......... .
    wordpress: ......... .......... .......... 29% 9.51M 3s
    wordpress:   3500K ...
    wordpress: ....... .......... .......... .....
    wordpress: ..... .......... 29% 8.92M 3s
    wordpress:   3550K .......... .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . 30% 11.9M 3s
    wordpress:   3600K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... 30% 11.8M 3s
    wordpress:   3650K .......... ...
    wordpress: ....... .......... .......... .....
    wordpress: ..... 30% 11.3M 2s
    wordpress:   3700K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... 31% 11.4M 2s
    wordpress:   3750K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 31% 11.4M 2s
    wordpress:   3800K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . .......... 32% 9.31M 2s
    wordpress:   3850K .....
    wordpress: ..... .......... .......... .......
    wordpress: ... .......... 32% 7.88M 2s
    wordpress:   3900K ...
    wordpress: ....... .........
    wordpress: . .......... .......... .......... 33% 3.71M 2s
    wordpress:   3950K .......... .......... .......... .......... .........
    wordpress: . 33% 25.8M 2s
    wordpress:   4000K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... 33% 8.91M 2s
    wordpress:   4050K .......... ...
    wordpress: ....... .......... .......... .......... 34% 4.71M 2s
    wordpress:   4100K .......... .......... .......... .......... .......... 34%  108M 2s
    wordpress:   4150K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 35% 13.2M 2s
    wordpress:   4200K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . .......... 35% 7.09M 2s
    wordpress:   4250K .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... .......... 35% 10.2M 2s
    wordpress:   4300K ...
    wordpress: ....... .......... .......... .....
    wordpress: ..... .......... 36% 81.9K 3s
    wordpress:   4350K .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . 36% 12.4K 10s
    wordpress:   4400K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... 37% 9.62K 19s
    wordpress:   4450K .......... ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... 37%  180K 19s
    wordpress:   4500K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... 38% 5.17M 18s
    wordpress:   4550K .........
    wordpress: . .......... .......... .......... .
    wordpress: ......... 38% 6.66M 18s
    wordpress:   4600K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . .......... 38% 5.31M 18s
    wordpress:   4650K .....
    wordpress: ..... .......... .
    wordpress: ......... .......... .......... 39% 9.44M 17s
    wordpress:   4700K ...
    wordpress: ....... .........
    wordpress: . .......... .......... .......... 39% 6.03M 17s
    wordpress:   4750K .......... .......
    wordpress: ... .......... .......... .........
    wordpress: . 40% 17.2M 17s
    wordpress:   4800K .......... .....
    wordpress: ..... .......... .......... .......
    wordpress: ... 40% 12.0M 17s
    wordpress:   4850K .......... ...
    wordpress: ....... .......... .......... .......... 41% 35.0M 16s
    wordpress:   4900K .......... .......... .......... .......... .......... 41% 81.6M 16s
    wordpress:   4950K .......... .......... .......... .......... .......... 41%  275M 16s
    wordpress:   5000K .......... .......... .......... .......... .......... 42%  317M 15s
    wordpress:   5050K .......... .......... .......... .......... .......... 42%  260M 15s
    wordpress:   5100K .......... .......... .......... .......... .......... 43%  311M 15s
    wordpress:   5150K .......... .......... .......... ...
    wordpress: ....... .........
    wordpress: . 43% 1.66M 15s
    wordpress:   5200K .......... .....
    wordpress: ..... .......... .......... .......
    wordpress: ... 43% 11.1M 15s
    wordpress:   5250K .......... ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... 44% 10.9M 14s
    wordpress:   5300K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... 44% 9.56M 14s
    wordpress:   5350K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 45% 50.3K 15s
    wordpress:   5400K .......... .......... .......... .......... .......... 45% 51.6M 15s
    wordpress:   5450K .......... .......... .......... .......... .......... 46% 68.7M 15s
    wordpress:   5500K .......... .......... .......... .......... .......... 46%  311M 14s
    wordpress:   5550K .......... .......... .......... .......... .......... 46%  290M 14s
    wordpress:   5600K .......... .......... .......... .......... .......... 47%  343M 14s
    wordpress:   5650K .......... .......... .......... .......... .....
    wordpress: ..... 47%  357K 14s
    wordpress:   5700K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... 48% 9.51M 13s
    wordpress:   5750K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .......... 48% 10.1M 13s
    wordpress:   5800K .......
    wordpress: ... .......... ...
    wordpress: ....... .......... .......... 48% 10.7M 13s
    wordpress:   5850K .....
    wordpress: ..... .......... .......... .......... .......... 49% 14.9M 13s
    wordpress:   5900K .......... .......... .......... .......... .......... 49%  289M 13s
    wordpress:   5950K .......... .......... .......... .......... .......... 50%  250M 12s
    wordpress:   6000K .......... .......... .......... .
    wordpress: ......... .......... 50% 3.06M 12s
    wordpress:   6050K .......... .......... .......... .......... .......... 51%  176M 12s
    wordpress:   6100K .......... .......... .......... .......... .......... 51%  269M 12s
    wordpress:   6150K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 51%  419K 12s
    wordpress:   6200K .......... .......... .......... .......... .......... 52% 58.6M 12s
    wordpress:   6250K .......... .......... .......... .......... .......... 52%  327M 11s
    wordpress:   6300K .......... .......... .......... .......... .......... 53%  340M 11s
    wordpress:   6350K .......... .......... .......... .......... .......... 53%  292M 11s
    wordpress:   6400K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... 53% 2.06M 11s
    wordpress:   6450K .......... ...
    wordpress: ....... .......... .......... .......... 54% 6.01M 11s
    wordpress:   6500K .......... .......... .......... .......... ...
    wordpress: ....... 54% 17.3M 10s
    wordpress:   6550K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 55% 10.4M 10s
    wordpress:   6600K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . .......... 55% 10.3M 10s
    wordpress:   6650K .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... .......... 56% 15.1M 10s
    wordpress:   6700K ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... .......... 56% 6.50M 10s
    wordpress:   6750K .......... .......... .......... .......... .......... 56% 22.7M 10s
    wordpress:   6800K .......... .......... .......... .......... .......... 57% 35.8M 9s
    wordpress:   6850K .......... .......... .......... .......... .......... 57% 36.2M 9s
    wordpress:   6900K .......... .......... .......... .......... .......... 58% 41.5M 9s
    wordpress:   6950K .......... .......... .......... .......... .......... 58%  173M 9s
    wordpress:   7000K .......... .......... .......... .......... .......... 59%  232M 9s
    wordpress:   7050K .......... .......... .......... .......... .......... 59%  275M 9s
    wordpress:   7100K .......... .......... .......... .......... .......... 59%  292M 9s
    wordpress:   7150K .......... .......... .......... .......... .........
    wordpress: . 60% 17.1M 8s
    wordpress:   7200K .......... .......... .......... .......... .......... 60%  175M 8s
    wordpress:   7250K .......... .......... .......... .......... .......... 61%  311M 8s
    wordpress:   7300K .......... .......... .......... .......... .......... 61%  305M 8s
    wordpress:   7350K .......... .......... .......... .......... .......... 61%  217M 8s
    wordpress:   7400K .......... .......... .......... .......... .......... 62%  336M 8s
    wordpress:   7450K .......... .......... .......... .......... .......... 62%  346M 8s
    wordpress:   7500K ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... .......... 63%  400K 7s
    wordpress:   7550K .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . 63% 7.44M 7s
    wordpress:   7600K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... 64% 9.28M 7s
    wordpress:   7650K .......... ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... 64% 11.7K 9s
    wordpress:   7700K .......... .......... .......... .......... .......... 64% 45.9M 9s
    wordpress:   7750K .......... .......... .......... .......... .......... 65%  197M 9s
    wordpress:   7800K .......... .......... .......... .........
    wordpress: . .......... 65% 91.0K 9s
    wordpress:   7850K .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... .......... 66% 14.5K 11s
    wordpress:   7900K ...
    wordpress: ....... .........
    wordpress: . .......... .......... .......... 66% 54.4K 11s
    wordpress:   7950K .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . 66% 5.67M 11s
    wordpress:   8000K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... 67% 5.58M 11s
    wordpress:   8050K .......... .......... .......... .......... .......... 67% 67.6M 10s
    wordpress:   8100K .......... .......... .......
    wordpress: ... .......... ...
    wordpress: ....... 68% 14.6M 10s
    wordpress:   8150K .......... .......... .......... .......... .......... 68% 33.8M 10s
    wordpress:   8200K .......... .......... .......... .......... .......... 69% 79.4M 10s
    wordpress:   8250K .......... .......... .......... .......... .......... 69%  323M 10s
    wordpress:   8300K .......... .......... .......... .......... .......... 69%  298M 10s
    wordpress:   8350K .......... .......... .......... .......... .......... 70%  247M 9s
    wordpress:   8400K .......... .......... .......... .......... .......... 70%  320M 9s
    wordpress:   8450K .......... .......... .......... .......... .......... 71%  238M 9s
    wordpress:   8500K .......... .......... .......
    wordpress: ... .......... .......... 71% 35.3M 9s
    wordpress:   8550K .......... .......... .......... .......... .......... 71% 67.6M 9s
    wordpress:   8600K .......... .......... .......... .......... .......... 72%  327M 8s
    wordpress:   8650K .......... .......... .......... .......... .......... 72%  337M 8s
    wordpress:   8700K .......... .......... .......... .......... .......... 73%  348M 8s
    wordpress:   8750K .......... .......
    wordpress: ... .......... .......... .......... 73%  737K 8s
    wordpress:   8800K .......... .......... .......... .......... .......... 74% 37.8M 8s
    wordpress:   8850K .......... .......... .......... .......... .......... 74% 48.4M 8s
    wordpress:   8900K .......... .......... .......... .......... .......... 74% 25.8M 7s
    wordpress:   8950K .......... .......... .......... .......... .......... 75% 33.8M 7s
    wordpress:   9000K .......... .......... .......... .......... .......... 75% 65.7M 7s
    wordpress:   9050K .......... .......... .......... .......... .......... 76% 39.0M 7s
    wordpress:   9100K .......... .........
    wordpress: . .......... .......... .......... 76% 30.1M 7s
    wordpress:   9150K .......... .......... .......... .......... .......... 77%  221M 7s
    wordpress:   9200K .......... .......... .......... .......... .......... 77% 44.3M 6s
    wordpress:   9250K .......... .......... .......... .......... .......... 77% 54.2M 6s
    wordpress:   9300K .......... .......... .......... .......... .......... 78% 57.8M 6s
    wordpress:   9350K .......... .......... .......... .......... .......... 78%  201M 6s
    wordpress:   9400K .......... .......... .......... .......... .......... 79%  316M 6s
    wordpress:   9450K .......... .......... .......... .......... .......... 79%  293M 6s
    wordpress:   9500K .......... .......... .......... .......... .......... 79%  222M 6s
    wordpress:   9550K .......... .......... .......... .......... .......... 80%  267M 5s
    wordpress:   9600K .......... .......... .......... .......... .......... 80%  213M 5s
    wordpress:   9650K .......... .......... .......... .......... .......... 81%  316M 5s
    wordpress:   9700K .......... .......... .......... .......... .......... 81%  266M 5s
    wordpress:   9750K .......... .......... .......... .......... .......... 82%  240M 5s
    wordpress:   9800K .......... .......... .......... .......... .......... 82%  337M 5s
    wordpress:   9850K .......... .......... .......... .......... .......... 82%  333M 5s
    wordpress:   9900K .......... .......... .......... .......... .......... 83%  314M 4s
    wordpress:   9950K .......... .......... .......... .......... .......... 83%  245M 4s
    wordpress:  10000K .......... .......... .......... .......... .......... 84%  329M 4s
    wordpress:  10050K .......... .......... .......... .......... .......... 84%  318M 4s
    wordpress:  10100K .......... .......... .......... .......... .......... 84%  336M 4s
    wordpress:  10150K .......... .......... .......... .......... .......... 85%  295M 4s
    wordpress:  10200K .......... .......... .......... .......... .......... 85%  237M 4s
    wordpress:  10250K .......... .......... .......... .......... .......... 86%  293M 4s
    wordpress:  10300K .......... .......... .......... .......... .......... 86%  316M 3s
    wordpress:  10350K .......... .......... .......... .......... .......... 87%  289M 3s
    wordpress:  10400K .......... .......... .......... .......... .......... 87%  337M 3s
    wordpress:  10450K .......... .......... .......... .......... .......... 87%  352M 3s
    wordpress:  10500K .......... .......... .......... .......... .......... 88%  348M 3s
    wordpress:  10550K .......... .......... .......... .......... .......... 88%  304M 3s
    wordpress:  10600K .......... .......... .......... .......... .......... 89%  199M 3s
    wordpress:  10650K .......... .......... .......... .......... .......... 89%  327M 3s
    wordpress:  10700K .......... .......... .......... .....
    wordpress: ..... .......... 89% 75.4K 3s
    wordpress:  10750K .......... .......... .......... ...
    wordpress: ....... .........
    wordpress: . 90%  345K 2s
    wordpress:  10800K .......... .......... .......... .......... .......... 90% 76.5M 2s
    wordpress:  10850K .......... ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... 91%  375K 2s
    wordpress:  10900K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... 91% 9.60M 2s
    wordpress:  10950K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 92% 8.53M 2s
    wordpress:  11000K .......
    wordpress: ... .......... ...
    wordpress: ....... .......... .......... 92% 4.56M 2s
    wordpress:  11050K .......... .......... .......... .......... .......... 92% 44.6M 2s
    wordpress:  11100K .......... .......... .......... .....
    wordpress: ..... .......... 93% 38.9M 2s
    wordpress:  11150K .
    wordpress: ......... .......
    wordpress: ... .......... .......... .......... 93% 3.73M 2s
    wordpress:  11200K .......... .......... .......... .......... .......... 94%  179M 1s
    wordpress:  11250K .......... .......... .......... .......... .....
    wordpress: ..... 94% 58.8M 1s
    wordpress:  11300K .......... .
    wordpress: ......... .......
    wordpress: ... .......... ...
    wordpress: ....... 94% 11.4M 1s
    wordpress:  11350K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 95%  541K 1s
    wordpress:  11400K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . .......... 95% 10.4M 1s
    wordpress:  11450K .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... .......... 96% 9.11M 1s
    wordpress:  11500K ...
    wordpress: ....... .........
    wordpress: . .......... .....
    wordpress: ..... .......... 96% 9.80M 1s
    wordpress:  11550K .
    wordpress: ......... .......... .......... ...
    wordpress: ....... .........
    wordpress: . 97% 8.99M 1s
    wordpress:  11600K .......... .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... 97% 6.96M 1s
    wordpress:  11650K .......... .......... .........
    wordpress: . .......... .....
    wordpress: ..... 97% 20.7M 0s
    wordpress:  11700K .......... .
    wordpress: ......... .......... .......... .......... 98% 5.98M 0s
    wordpress:  11750K .........
    wordpress: . .......... .....
    wordpress: ..... .......... .
    wordpress: ......... 98% 14.9M 0s
    wordpress:  11800K .......
    wordpress: ... .......... ...
    wordpress: ....... .........
    wordpress: . .......... 99% 5.76M 0s
    wordpress:  11850K .....
    wordpress: ..... .......... .
    wordpress: ......... .......
    wordpress: ... .......... 99% 11.1M 0s
    wordpress:  11900K ...
    wordpress: ....... .........
    wordpress: . .......... .......... .......   100% 11.9M=23s
    wordpress: 
    wordpress: 2020-05-08 04:16:18 (512 KB/s) - ‘latest.tar.gz’ saved [12234700/12234700]
```
