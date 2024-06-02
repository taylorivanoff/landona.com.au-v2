#!/bin/bash

# Change directory to where your project files are located
cd ~/landona.com.au || exit

# Pull the latest changes from your GitHub repository
git pull origin main

# Build your Docker containers
docker-compose up -d --build
