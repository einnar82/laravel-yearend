<?php

namespace App\Modules\Post\Filters;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class FilterByName
{
    public function handle(Builder $query, Closure $next)
    {
        if(request()->has('name')) {
            $query->where('name', request('name'));
        }

        return $next($query);
    }
}
