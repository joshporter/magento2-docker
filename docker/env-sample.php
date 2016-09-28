<?php
return array(
    'backend' =>
        array(
            'frontName' => 'admin_k7ip60',
        ),
    'crypt' =>
        array(
            'key' => '242c2f3519904b4d0283834fb8df0c26',
        ),
    'session' =>
        array(
            'save' => 'redis',
            'redis' => array(
                'host' => 'redis.docker',
                'port' => '6379',
                'password' => '',
                'timeout' => '2.5',
                'persistent_identifier' => '',
                'database' => '0',
                'compression_threshold' => '2048',
                'compression_library' => 'gzip',
                'log_level' => '1',
                'max_concurrency' => '6',
                'break_after_frontend' => '5',
                'break_after_adminhtml' => '30',
                'first_lifetime' => '600',
                'bot_first_lifetime' => '60',
                'bot_lifetime' => '7200',
                'disable_locking' => '0',
                'min_lifetime' => '60',
                'max_lifetime' => '2592000',
            )
        ),
    'db' =>
        array(
            'table_prefix' => '',
            'connection' =>
                array(
                    'default' =>
                        array(
                            'host' => 'mariadb.docker',
                            'dbname' => 'magento2',
                            'username' => 'magento2',
                            'password' => 'magento2',
                            'active' => '1',
                            'model' => 'mysql4',
                            'engine' => 'innodb',
                            'initStatements' => 'SET NAMES utf8;',
                        ),
                ),
        ),
    'resource' =>
        array(
            'default_setup' =>
                array(
                    'connection' => 'default',
                ),
        ),
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'cache_types' =>
        array(
            'config' => 1,
            'layout' => 1,
            'block_html' => 1,
            'collections' => 1,
            'reflection' => 1,
            'db_ddl' => 1,
            'eav' => 1,
            'customer_notification' => 1,
            'full_page' => 1,
            'config_integration' => 1,
            'config_integration_api' => 1,
            'translate' => 1,
            'config_webservice' => 1,
            'compiled_config' => 1,
        ),
    'cache' =>
        array(
            'frontend' =>
                array(
                    'default' =>
                        array(
                            'backend' => 'Cm_Cache_Backend_Redis',
                            'backend_options' =>
                                array(
                                    'server' => 'redis.docker',
                                    'port' => '6379',
                                    'persistent' => '',
                                    'database' => '1',
                                    'force_standalone' => '0',
                                    'connect_retries' => '1',
                                    'read_timeout' => '10',
                                    'automatic_cleaning_factor' => '0',
                                    'compress_data' => '1',
                                    'compress_tags' => '1',
                                    'compress_threshold' => '20480',
                                    'compression_lib' => 'gzip'
                                ),
                        ),
                    'page_cache' =>
                        array(
                            'backend' => 'Cm_Cache_Backend_Redis',
                            'backend_options' =>
                                array(
                                    'server' => 'redis.docker',
                                    'port' => '6379',
                                    'persistent' => '',
                                    'database' => '2',
                                    'force_standalone' => '0',
                                    'connect_retries' => '1',
                                    'read_timeout' => '10',
                                    'automatic_cleaning_factor' => '0',
                                    'compress_data' => '0',
                                    'compress_tags' => '1',
                                    'compress_threshold' => '20480',
                                    'compression_lib' => 'gzip'
                                ),
                        ),
                ),
        ),
    'install' =>
        array(
            'date' => 'Tue, 27 Sep 2016 12:51:30 +0000',
        ),
);