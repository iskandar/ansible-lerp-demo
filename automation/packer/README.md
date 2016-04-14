# Simple AMI builds with Packer

First, install Packer and read some docs:

* https://www.packer.io/intro/

Now, build the AMI

```
export AWS_ACCESS_KEY_ID=YOURACCESSKEY
export AWS_SECRET_ACCESS_KEY=YOURSECRETTHING
export AWS_DEFAULT_REGION=ap-southeast-2
packer build base.json
```

packer will do some work and leave you with two new AMIs:

* shared with both Live and Test accounts
* with copies in both `ap-southeast-2` and `eu-central-1` regions

