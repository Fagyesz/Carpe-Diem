#!/bin/bash

# Get the values of the secrets from GitHub Secrets
DB_HOST="${{ secrets.DB_HOST }}"
DB_PASSWORD="${{ secrets.DB_PASSWORD }}"

GOOGLE_CLIENT_ID="${{ secrets.GOOGLE_CLIENT_ID }}"
GOOGLE_CLIENT_SECRET="${{ secrets.GOOGLE_CLIENT_SECRET }}"
GOOGLE_REDIRECT="${{ secrets.GOOGLE_REDIRECT }}"

GITHUB_CLIENT_ID="${{ secrets.GITHUB_CLIENT_ID }}"
GITHUB_CLIENT_SECRET="${{ secrets.GITHUB_CLIENT_SECRET }}"
GITHUB_REDIRECT="${{ secrets.GITHUB_REDIRECT }}"

# Update the .env file with the secret values
sed -i "s/DB_HOST=.*/DB_HOST=${DB_HOST}/" .env
sed -i "s/DB_PASSWORD=.*/DB_PASSWORD=${DB_PASSWORD}/" .env

sed -i "s/GOOGLE_CLIENT_ID=.*/GOOGLE_CLIENT_ID=${GOOGLE_CLIENT_ID}/" .env
sed -i "s/GOOGLE_CLIENT_SECRET=.*/GOOGLE_CLIENT_SECRET=${GOOGLE_CLIENT_SECRET}/" .env
sed -i "s/GOOGLE_REDIRECT=.*/GOOGLE_REDIRECT=${GOOGLE_REDIRECT}/" .env

sed -i "s/GITHUB_CLIENT_ID=.*/GITHUB_CLIENT_ID=${GITHUB_CLIENT_ID}/" .env
sed -i "s/GITHUB_CLIENT_SECRET=.*/GITHUB_CLIENT_SECRET=${GITHUB_CLIENT_SECRET}/" .env
sed -i "s/GITHUB_REDIRECT=.*/GITHUB_REDIRECT=${GITHUB_REDIRECT}/" .env
