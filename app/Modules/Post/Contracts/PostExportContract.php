<?php

namespace App\Modules\Post\Contracts;

interface PostExportContract
{
    public function export(array $data = []);
}
