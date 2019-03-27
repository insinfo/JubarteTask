<?php
/**
 * Created by PhpStorm.
 * User: Isaque
 * Date: 14/07/2017
 * Time: 18:09
 */

namespace Modelo\Util;
class DBConfig
{
    const DEFAULT_CONNECTION = 'laravel';    
    const DEFAULT_DATABASE_NAME = 'sistemas';
    const DEFAULT_SCHEMA_NAME = 'public';

    public static function getConnections()
    {
        return $connections = [

            'connections' => [

                'laravel' => [
                    'driver' => 'pgsql',
                    'host' => DB_HOST_MODELO,
                    'port' => '5432',
                    'database' => DB_NAME,
                    'username' => DB_USERNAME,
                    'password' => DB_PASSWORD,
                    'charset' => 'utf8',
                    'prefix' => '',
                    'schema' => ['public'],
                    'sslmode' => 'prefer',
                ],
            ],

        ];
    }
}