# Author-it Technical Test

This project contains Ansible playbooks for the Author-it technical challenge

## Getting Started

The project is broken into three parts with three playbooks:

* build_ami.yml  - Run some AWS prep and build a blank CentOS7 EC2 instance
* config_ami.yml - Configure the EC2 instance and convert it to an AMI
* create_ec2.yml - Set up a new VPC and corresponding networking parts, then create an ELB and autoscaling configuration

### Prerequisites

These Ansible playbooks require some prerequisite software to be installed locally

```
ansible
boto
```

### Setup

Setup steps to execute before starting with the playbooks

```
1. Set up a keypair, add it to your keyring and adjust the variable in ./group_vars/all.yml

2. Adjust the default security group to allow SSH from your IP

3. Export your AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY as environment variables
```

### Run

First we run the playbook `build_ami.yml` to prepare the CloudWatch log group and intialize a blank CentOS 7 EC2 instance. The instance ID and IP are stashed locally to be used in the next playbook.

Next we run the playbook `config_ami.yml` which runs through a bunch of configuration tasks. It should be run with the `-i` flag to specify using the inventory file `./dev-hosts`. Once finished the instance is converted into an AMI.

Finally we run `create_ec2.yml`, this will setup a new VPC and its related networking parts. Then it will configure an AutoScaling group with the AMI created in the previous playbook. Lastly it will create CloudWatch alarms for scaling based on instance CPU utilization.

## To Do

Complete the following outstanding tasks

- Move more items to variables where applicable
