<?php

namespace App\Modules\Post\Manager;

use App\Modules\Post\Contracts\PostExportContract;
use App\Modules\Post\Drivers\CsvExporterDriver;
use App\Modules\Post\Drivers\JsonExporterDriver;
use Illuminate\Support\Manager;

class PostExportManager extends Manager implements PostExportContract
{
    /**
     * Get the default driver name.
     *
     * @return string
     */
    public function getDefaultDriver(): string
    {
        return $this->config->get('export.driver', 'json');
    }

    /**
     * Export posts data in JSON format
     */
    public function createJsonDriver(): JsonExporterDriver
    {
        return new JsonExporterDriver($this->config->get('export.json') ?? []);
    }

    /**
     * Export posts data in CSV format
     */
    public function createCsvDriver(): CsvExporterDriver
    {
        return new CsvExporterDriver($this->config->get('export.csv') ?? []);
    }

    /**
     * @param array $data
     * @return void
     */
    public function export(array $data = [])
    {
        return $this->driver()->export($data);
    }
}
