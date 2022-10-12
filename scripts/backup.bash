#!/usr/bin/env bash

# Get current date in yyyy-mm-dd format
NOW=$(date "+%Y-%m-%d %T")

# If backup directory does not exist, create one
if [ ! -d "backup" ]; then
    mkdir "backup"
fi

# Copy database.sqlite into backup directory
cp "database.sqlite" "backup"

# Rename database.sqlite into yyyy-mm-dd-database.sqlite
mv "backup/database.sqlite" "backup/${NOW}-database.sqlite"

# Find and delete file older than 30 days
find "backup" -type f -mmin +5 -delete
