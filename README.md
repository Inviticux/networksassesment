# Nginx Load Balancer with Docker

## Overview

This repository contains the setup for using **Nginx** as a **load balancer** to distribute traffic across multiple **backend web application servers** (e.g., running Nginx/PHP).

The system includes:
- One Nginx container acting as the **front-end load balancer**.
- Four backend web application containers running **Nginx/PHP** that display dynamic content (like a hit counter).
- Docker Compose is used to automate the deployment of the entire system.
- Shell scripts to automate system setup and installation of dependencies.

## Purpose

Originally for my Comp3004 module for plymouth university, this project simulates a basic load balancing scenario where:
- Nginx distributes web traffic to multiple backend servers.
- A dynamic hit counter is displayed on the backend servers to show successful requests.
- Docker containers isolate each component, making the setup easily reproducible and scalable.

## Project Structure

- `Dockerfile`: Custom Docker image for the Nginx load balancer with a customized `index.html`.
- `docker-compose.yml`: Configuration to define services (load balancer and backend servers), networks, and volumes.
- `install.sh`: Shell script to automate system setup and install required dependencies.
- `nginx_config/`: Folder containing custom Nginx configuration files for both the load balancer and backend servers.
- `backend/`: Folder with the PHP application for the backend servers (e.g., a simple hit counter page).
- `README.md`: This file.

# Referances

The repo/image I used for the web servers - [text](https://github.com/richarvey/nginx-php-fpm)