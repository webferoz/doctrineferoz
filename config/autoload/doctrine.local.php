<?php
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                    'params' => array(
                        'user' => 'zf2doctrine',
                        'password' => 'pior15',
                ),
            ),
        )
));