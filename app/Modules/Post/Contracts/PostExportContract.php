<?php

namespace App\Modules\Post\Contracts;

interface PostExportContract
{
    /**
     * @param array $data
     * @param string|null $driver
     * @return mixed
     */
    public function export(array $data = [], string $driver = null);
}
