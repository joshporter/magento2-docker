FROM node:6.7-slim
MAINTAINER Josh Porter <josh@joshporter.co.uk>

RUN apt-get update && apt-get install -y bzip2 && rm -rf /var/lib/apt/lists/*
RUN npm install -g grunt-cli

WORKDIR /var/www/html