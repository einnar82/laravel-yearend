<?php

namespace App\Modules\Post\Drivers;

use App\Modules\Post\Contracts\ExportContract;

class JsonExporterDriver implements ExportContract
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
     * @return string
     */
    public function export(array $data = []): string
    {
        return 'export to json';
    }
}
