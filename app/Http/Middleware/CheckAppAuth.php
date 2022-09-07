<?php

namespace App\Http\Middleware;

use Closure;
use App\Traits\Api\Response;

class CheckAppAuth
{
    use Response;
    public $data;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $app_token = $request->header('token');

        if($app_token != '0sTFSpAu2n08gfaM'){
            $this->data=['status_code'=>401,
                "error"=>["token is incorrect"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }

        return $next($request);
    }
}
