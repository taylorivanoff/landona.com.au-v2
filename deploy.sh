#!/bin/bash

# Change directory to where your project files are located
cd ~/landona.com.au

# Pull the latest changes from your GitHub repository
git pull origin main

# Run npm build to build your project
npm install         # Install dependencies if needed
npm run production       # Run the build command

# Build your Docker containers
docker-compose up -d --build
