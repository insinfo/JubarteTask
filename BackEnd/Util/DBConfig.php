<?php
/**
 * Created by PhpStorm.
 * User: Isaque
 * Date: 14/07/2017
 * Time: 18:09
 */

namespace Modelo\Util;
class DBConfig extends \PmroPadraoLib\Util\DBConfig
{
    const DEFAULT_CONNECTION = 'laravel';    
    const DEFAULT_DATABASE_NAME = 'sistemas';
    const DEFAULT_SCHEMA_NAME = 'minhaCasa';

    public static function getConnections()
    {
        return $connections = [

            'connections' => [

                'laravel' => [
                    'driver' => 'pgsql',
                    'host' => DB_HOST_MINHA_CASA,
                    'port' => '5432',
                    'database' => 'sistemas',
                    'username' => 'sisadmin',
                    'password' => 's1sadm1n',
                    'charset' => 'utf8',
                    'prefix' => '',
                    'schema' => ['pmro_padrao', 'jubarte', 'ciente', 'portal_rh', 'minhaCasa'],
                    'sslmode' => 'prefer',
                ],
            ],

        ];
    }
}