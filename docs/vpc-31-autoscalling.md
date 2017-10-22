# VPC-31-AutoScalling
## Services ( #ELB #ASG #EC2 )

## Link

* [http://vpc-31-autoscalling.demos123.net](http://vpc-31-autoscalling.demos123.net)

* [http://vpc-31-elb-753059963.eu-west-2.elb.amazonaws.com/](http://vpc-31-elb-753059963.eu-west-2.elb.amazonaws.com/)
  - first link is a CNAME of second link (the ELB)
  - Note, is possible to use more than one ELB, and then routing to the multiple ELBs is done on *Route53*

## Virtual Private Computer (VPC), Elastic Load Balancer (ELB), Auto-Scalling (ASG)

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

