<?php

namespace App\Modules\Post\Filters;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class FilterByCreatedAt
{
    public function handle(Builder $query, Closure $next)
    {
        if(request()->has('created_at')) {
            $query->whereDate('created_at', request('created_at'));
        }

        return $next($query);
    }
}
