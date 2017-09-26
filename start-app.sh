#!/bin/bash

# This simple script is the entry point to starting the wordpress application.

# Set environment variables in Apache
sed 's/${DB_NAME}/'$DB_NAME'/g; s/${DB_USER}/'$DB_USER'/g; s/${DB_PASSWORD}/'$DB_PASSWORD'/g; s/${DB_HOST}/'$DB_HOST'/g;' ./env.conf.template > /etc/httpd/conf.d/env.conf

# Restart Apache
/usr/sbin/httpd $OPTIONS -DFOREGROUND
