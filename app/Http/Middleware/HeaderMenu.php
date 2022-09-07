<?php

namespace App\Http\Middleware;

use App\Models\MedalListCategory;
use Closure;
use View;

class HeaderMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $headerMenu = MedalListCategory::orderBy('id', 'DESC')->get();
        View::share('MedalListCategory', $headerMenu);
        return $next($request);
    }
}
