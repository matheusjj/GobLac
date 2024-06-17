<?php

namespace Drupal\goblacm\Service;

use Drupal\Core\Database\Connection;

class GobLacService
{

    protected $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function get_good_habits()
    {
        // $database = \Drupal::database();

        // $query = $database->select('responsible');
        // $query->fields('responsible', ['id', 'name', 'nickname', 'phone', 'email']);

        // return $query;
        // return $query->execute();
        return $this->connection->query('SELECT id, name FROM responsible')->fetchAll();
    }
}
