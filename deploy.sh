#!/bin/bash

# Pull the latest changes from your GitHub repository
git pull origin main  # Replace 'main' with your branch name if it's different

# Build your Docker container (if needed)

# Stop and remove the existing container (if it exists)

# Run the Docker container in detached mode (-d)
docker compose up -d
