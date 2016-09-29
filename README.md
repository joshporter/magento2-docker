Magento 2 - Docker Compose
===

Magento 2.1.1 (with sample data) Docker dev environment which includes:
 - PHP 7.0.x - Will use latest FPM alpine base image
 - Nginx
 - MariaDB 
 - Redis
 - Varnish 4.x (If using dock-cli, it can be accessed via dnsdock alias: http://m2.docker)
 - Node 6.7.x for frontend dependencies
 - Mailcatcher (accessed via mail.docker)
 - ELK stack for logs
 - Selenium for Behat tests
 
This setup utilises the [dock-cli](https://github.com/inviqa/dock-cli) setup, which provides a DNSDock container,
docker-machine and DNS management for the host machine. If you would like to use Docker for Mac, this setup
would need some slight tweaking, such as using a combination of [dnsmasq and nginx proxy containers](https://adrianperez.org/improving-dev-environments-all-the-http-things/)

I also recommend using [docker-machine-nfs](https://github.com/adlogix/docker-machine-nfs):

`docker-machine-nfs $DOCKER_MACHINE_NAME --shared-folder=/Users/<username>`

###Installation
```
dock-cli start OR docker-compose up -d
docker-compose exec php ./bin/composer install
```

Copy the sample env.php over for some suggested settings (e.g use redis for session storage)
```
cp docker/env-sample.php app/etc/env.php
```

Run Magento 2 CLI installation command using that up and running 'php' container/service:

```
docker-compose exec php php ./bin/magento setup:install --admin-firstname=admin --admin-lastname=admin --admin-email=admin@example.com --admin-user=admin --admin-password=123123pass --base-url=http://m2.docker/ --db-password=magento2 --db-host=mariadb.docker --db-name=magento2 --db-user=magento2 --language=en_GB --currency=GBP --timezone=Europe/London --session-save=db --use-sample-data
# you might have to chmod +x ./bin/magento if you get permission errors
```

This will install a Magento 2 instance with sample data, if you don't want this data then remove the flag `--use-sample-data`

Varnish can be turned by selecting the 'Varnish Cache' option via the admin dashboard: 
`Stores > Configuration > Advanced > System > Full Page Cache > Caching Application`

If you would like to see the magento debug headers, and also have the install set in developer mode, run this command:
`docker-compose exec php ./bin/magento deploy:mode:set developer`

---

To view the status of the containers:
```
dock-cli ps or docker-compose ps -q
```

To start a shell in the web container/service, for debugging purposes:
```
docker-compose exec web sh
```

There can be benefits in generating an optimized autoloader.
```
docker-compose exec php ./bin/composer dump-autoload -o
```

You can run behat tests:
```
docker-compose exec php ./bin/behat
```

To build the frontend dependencies, you can use the node container (`--rm` flag to remove container to keep setup clean)
```
docker-compose run --rm node npm install
docker-compose run --rm node grunt <task>
```
Credit to [Mage Inferno](https://github.com/mageinferno/docker-magento2-php) for some inspiration and ideas on how all of this could be down :+1: