<?php

namespace App\Modules\Post\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Post\Contracts\ExportContract;

class PostExportController extends Controller
{
    /**
     * @var ExportContract
     */
    private $exportContract;

    /**
     * @param ExportContract $exportContract
     */
    public function __construct(ExportContract $exportContract)
    {
        $this->exportContract = $exportContract;
    }

    /**
     * @return mixed
     */
    public function export()
    {
        return $this->exportContract->export();
    }
}
