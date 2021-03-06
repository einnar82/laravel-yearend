<?php

namespace App\Modules\Post\Drivers;

use App\Modules\Post\Contracts\PostExportContract;

class JsonExporterDriver implements PostExportContract
{
    /**
     * @var array
     */
    private $options;

    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * @param array $data
     * @param string|null $driver
     * @return string
     */
    public function export(array $data = [], string $driver = null): string
    {
        return 'export to json';
    }
}
