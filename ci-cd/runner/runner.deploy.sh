#!/bin/bash

# Stop script when error
set -e;

DEPLOY_HOST=$1
PROJECT_LOCATION=$2


# Deploy via ssh
ssh deployer@1.53.252.75 <<EOT

    echo "$DEPLOY_HOST";
    echo "$PROJECT_LOCATION";

    set -e;
    cd /data/www/hangkenh;

    echo "Step 1: Get new all code from git"
    git fetch;
    git pull;
    #git reset --hard;

    echo "Step 2: install package php"
    php -v
    composer -v
    composer install

    echo "Step 3: install package js"
    node -v
    npm install

    echo "Step 4: build css file"
    npm run build

    echo "Step 5: clear cache";
    php artisan cache:clear
    php artisan config:clear
EOT
