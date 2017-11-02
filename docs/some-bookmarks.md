# Some bookmarks

---

## Chrome

* Chrome links and notes, *copy/past into the URL bar *
  - ```chrome://net-internals/#dns```    // usefull do delete chrome's dns cache
  - ```chrome://chrome-urls/```

---

## IT and Cyber Security

### links

* https://www.krackattacks.com/
* [https://www.wonderhowto.com/](https://www.wonderhowto.com/)


## Some usefull Linux commands and best practices

* https://stackoverflow.com/questions/4922943/test-from-shell-script-if-remote-tcp-port-is-open

```bash

  nc -z -v -w5 <host> <port>
  
  timeout 1 bash -c 'cat < /dev/null > /dev/tcp/google.com/80'
  echo $?

```

### curl

```shell
curl -k -X TRACE https://ipinfo.io/

# if is allowed, please disabled it

vim /etc/httpd/conf/httpd.conf
   TraceEnable Off
    
```


### hardenight httpd

```shell

httpd -V

Options -Indexes

ServerTokens Prod

ServerSignature Off

```

### using SSLScan
* [https://www.youtube.com/watch?v=VgaF5Ev2VW0](https://www.youtube.com/watch?v=VgaF5Ev2VW0)
* https://github.com/rbsec/sslscan

```shell

yum install sslscan

yum install git gcc openssl-devel

sslscan www.YOURSITE.com:443

sslscan https://www.YOURSITE.com:443


## check what others are using

sslscan https://www.google.com


## change httpd.config 

vim  /etc/httpd/conf.d/ssl.conf

SSLProtocol -ALL +TLSv1 +TLSv1.1 +TLSv1.2

# or

SSLProtocol all -SSLv2 -SSLv3

```


### Working with files Linux Command Linux

* [Youtube - Practical Linux Commands For Real Life](https://www.youtube.com/watch?v=08Tg1aTouMA)

```shell

ls -al !(*.txt|*.java)

# also works with rm ....


find / -xdev -type f -size +100M -exec du -sh {} ';' | sort -r | head -n 10


pkill -f httpd


yum history all

yum history info 4

yum history undo 4










