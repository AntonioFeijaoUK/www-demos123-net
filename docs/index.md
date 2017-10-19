# Demos123.net

---

## About

> About [Demos123.net](http://demos123.net)

* This website is for **my own private practice and learning** in multiple products and Services.

Feel free to take some ideas and learnings <-- at your own risk!

Remember: **"practice makes perfect"**
> *"regular exercise of an activity or skill is the way to become proficient in it"*

I am going to use mostly [AWS Products and Services](https://aws.amazon.com) and I will link in this page some demos for my
own reference and practice.

Sharing this demos publicly hope it will bright awareness of the "power of the cloud" and how it can be impressive,
and remember, speed of innovations is a key term for success (or failure), so start using the cloud now!

**Disclaimer, use the cloud at your own risk ;)**

All the best,
[FeijaoUK](https://feijaouk.com)


---

## Demos 1

//TODO -- needs update

* [ ] Move file into the S3 bucksc
* [ ] change A and DNS records


```shell

This website, demos123.net <--- currently moved to github (this page)
This website itself, is a S3 bucket with static website option enabled

I am also using (to practice website front-end skills) the Bootstrap to make this page looking nicer.

The DNS record for this domain and website is also managed by Amazon Route 53

Click here for "how to create the AWS S3 Bucket for Static Website Hosting"
```


---

## Demos 2 - VPC-31-DEMO

### Link

* [http://vpc-31-demo.demos123.net](http://vpc-31-demo.demos123.net)
* [http://loadbalancer31-94164108.eu-west-2.elb.amazonaws.com/](http://loadbalancer31-94164108.eu-west-2.elb.amazonaws.com/)
 - first link is a CNAME of second link (the ELB)
 - Note, is possible to use more than one ELB, and then routing to the multiple ELBs is done on *Route53*

### Virtual Private Computer (VPC), Elastic Load Balancer (ELB), Auto-Scalling (ASG)

* Auto-Scalling
  - for scale-in or scale-out based of the workload
  - works with ELB to add or remote EC2 instances (depends on policies and machine status)
  - using Health check from ELB
  
 * Elastic Load Balancer
   - High Availability and Redundancy web-applicatoin across multiple Availability Zones (AZs)
   - Using Public-ELB, routes (balances) the http traffic to the various EC2s
  
* Elastic Cloud Compute (EC2)
  - Using the latest Amazon-Linux machine
  - running basic script on load (**user-data init script**) to download and execute a script from Github,
  (one day will learn to do it from AWS Codedeploy)
  - Script will install a Apache (or ngix) (**httpd**) and loads a basic webpage with **metadata** from the EC2
  - metadata like: machine-id, zone...
    
* EC2 network
  - multi-AZs 
  - multi-subnets (Public and Private)
  
```
VPC IP range 192.168.31.0/24 

IPs sub-net

  subnet31a-1-public - 192.168.31.0 - 192.168.31.15
  subnet31a-2-private - 192.168.31.16 - 192.168.31.31
  
  subnet31b-1-public - 192.168.31.32 - 192.168.31.47
  subnet31b-2-private - 192.168.31.48 - 192.168.31.63

```



---

## other notes

* Chrome links and notes
  - [chrome://net-internals/#dns](chrome://net-internals/#dns)    // usefull do delete chrome's dns cache
  - [chrome://chrome-urls/](chrome://chrome-urls/)


---

## footer

* [FeijaoUK](https://feijaouk.com)
