#!/bin/bash


## Set APT to unattended
export DEBIAN_FRONTEND=noninteractive

## Upgrade packages from APT
sudo apt-get update && sudo apt-get upgrade -y

