<?php

declare(strict_types=1);

namespace App\Core;

use PDO;
use App\Core\Configuration;

class ConnectionDataBase

{
    protected PDO $pdo;
    public function __construct( $config) 
    {
      /*  $config = new Configuration(__DIR__.'/../../'); */
        $this->pdo =new PDO(
            "mysql:host={$config->get('DATABASE_HOST')};
            port={$config->get('DATABASE_PORT')};
            dbname={$config->get('DATABASE_NAME')}",
            $config->get('DATABASE_USER'),
            $config->get('DATABASE_PASSWORD'),);
          
           
    }
public function connectionDataBase():PDO
{
    return $this->pdo;
}

   
}
