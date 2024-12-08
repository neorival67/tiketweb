<?php
require "vendor/autoload.php";

use PHPSupabase\Service;

return [
    'service' => new Service(
        getenv('SUPABASE_API_KEY'),
        getenv('SUPABASE_URL')
    ),
    'auth' => function() {
        $supabase = include(__DIR__ . '/supabase.php');
        return $supabase['service']->createAuth();
    },
    'database' => function($tableName, $primaryKey) {
        $supabase = include(__DIR__ . '/supabase.php');
        return $supabase['service']->initializeDatabase($tableName, $primaryKey);
    }
];

?>