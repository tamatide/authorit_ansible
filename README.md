# Author-it Technical Test

This project contains Ansible playbooks for the Author-it technical challenge

## Getting Started

The project is broken into three parts with three playbooks:

* build_ami.yml  - Run some AWS prep and build a blank CentOS7 EC2 instance
* config_ami.yml - Configure the EC2 instance and convert it to an AMI
* create_ec2.yml - Set up a new VPC and corresponding networking parts, then create an ELB and autosclaing configuration

### Prerequisites

These Ansible playbooks require some prerequisite software to be installed locally

```
ansible
boto
```

### Setup

A step by step guide for running this playbook to create the test envinroment 

```
Steps here
```

## To Do

Complete the following outstanding tasks

- Finish ReadMe
- Check all comments and tags
- Move more items to variables where applicable
