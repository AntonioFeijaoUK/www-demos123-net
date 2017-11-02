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


### commands

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
