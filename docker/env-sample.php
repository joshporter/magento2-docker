<?php
return array (
  'backend' => 
  array (
    'frontName' => 'admin_k7ip60',
  ),
  'crypt' => 
  array (
    'key' => '242c2f3519904b4d0283834fb8df0c26',
  ),
  'session' => 
  array (
    'save' => 'db',
  ),
  'db' => 
  array (
    'table_prefix' => '',
    'connection' => 
    array (
      'default' => 
      array (
        'host' => 'db',
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
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'default',
  'cache_types' => 
  array (
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
  ),
  'cache' => 
  array (
    'frontend' => 
    array (
      'default' => 
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' => 
        array (
          'server' => 'redis',
          'port' => '6379',
          'persistent' => '',
          'database' => '0',
          'force_standalone' => '0',
          'connect_retries' => '1',
          'read_timeout' => '10',
          'automatic_cleaning_factor' => '0',
          'compress_data' => '1',
          'compress_tags' => '1',
          'compress_threshold' => '20480',
          'compression_lib' => 'gzip',
        ),
      ),
      'page_cache' => 
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' => 
        array (
          'server' => 'redis',
          'port' => '6379',
          'persistent' => '',
          'database' => '1',
          'force_standalone' => '0',
          'connect_retries' => '1',
          'read_timeout' => '10',
          'automatic_cleaning_factor' => '0',
          'compress_data' => '0',
          'compress_tags' => '1',
          'compress_threshold' => '20480',
          'compression_lib' => 'gzip',
        ),
      ),
    ),
  ),
  'install' => 
  array (
    'date' => 'Wed, 21 Sep 2016 11:11:00 +0000',
  ),
);
