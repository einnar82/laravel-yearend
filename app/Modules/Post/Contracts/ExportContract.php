<?php

namespace App\Modules\Post\Contracts;

interface ExportContract
{
    public function export(array $data = []);
}
