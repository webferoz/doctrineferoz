<?php
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                    'params' => array(
                        'host' => 'zf2doctrine-db.my.phpcloud.com',
                        'dbname' => 'zf2doctrine',
                ),
            ),
        )
));