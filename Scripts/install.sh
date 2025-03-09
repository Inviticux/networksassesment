#!/bin/bash

#ensure that apt-get is latest version
sudo apt-get update

#install docker and ensure that it is installed correcly
sudo apt-get install -y docker.io
sudo apt install docker-compose -y

#install net-tools
sudo apt install net-tools -y

#start docker
sudo systemctl start docker

#test docker to ensure that it is up
sudo docker run hello-world

#run the loabalancing script
sudo docker-compose up -d

#figure out the ip of the host machine for connecting
hostname -I