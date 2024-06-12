#!/bin/bash
# Enable maintenance mode
php bin/magento maintenance:enable

# Upgrade setup
php bin/magento setup:upgrade

# Compile DI
php bin/magento setup:di:compile

# Deploy static content
php bin/magento setup:static-content:deploy -f

# Reindex data
php bin/magento indexer:reindex

# Clean and flush cache
php bin/magento cache:clean
php bin/magento cache:flush

# Disable maintenance mode
php bin/magento maintenance:disable
