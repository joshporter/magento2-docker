/usr/local/bin/php -d memory_limit=2G ./bin/magento sampledata:deploy
/usr/local/bin/php -d memory_limit=2G ./bin/magento setup:install --admin-firstname=admin --admin-lastname=admin --admin-email=admin@example.com --admin-user=admin --admin-password=123123pass --base-url=http://m2.docker/ --db-password=magento2 --db-host=db --db-name=magento2 --db-user=magento2 --language=en_GB --currency=GBP --timezone=Europe/London --use-sample-data
/usr/local/bin/php -d memory_limit=2G ./bin/magento indexer:reindex
/usr/local/bin/php -d memory_limit=2G ./bin/magento setup:static-content:deploy