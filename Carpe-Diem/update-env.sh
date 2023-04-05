#!/bin/bash

# Get the values of the secrets from GitHub Secrets
DB_HOST="${{ secrets.DB_HOST }}"
DB_PASSWORD="${{ secrets.DB_PASSWORD }}"

# Update the .env file with the secret values
sed -i "s/DB_HOST=.*/DB_HOST=${DB_HOST}/" .env
sed -i "s/DB_PASSWORD=.*/DB_PASSWORD=${DB_PASSWORD}/" .env
