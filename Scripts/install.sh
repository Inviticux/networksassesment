#!/bin/bash

#ensure that apt-get is latest version
sudo apt-get update

#install docker and ensure that it is installed correcly
sudo apt-get install -y docker.io
sudo docker run hello-world