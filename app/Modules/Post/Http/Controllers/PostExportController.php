<?php

namespace App\Modules\Post\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Post\Contracts\PostExportContract;

class PostExportController extends Controller
{
    /**
     * @var PostExportContract
     */
    private $exportContract;

    /**
     * @param PostExportContract $exportContract
     */
    public function __construct(PostExportContract $exportContract)
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
