<?php

namespace App\Modules\Post\Manager;

use App\Modules\Post\Drivers\CSVDriver;
use App\Modules\Post\Drivers\JsonDriver;
use Illuminate\Support\Manager;

class PostExportManager extends Manager
{
    /**
     * Get the default driver name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return 'json';
    }

    /**
     * Export posts data in JSON format
     */
    public function createJsonDriver()
    {
        return new JsonDriver;
    }

    /**
     * Export posts data in CSV format
     */
    public function createCsvDriver()
    {
        return new CSVDriver;
    }
}
