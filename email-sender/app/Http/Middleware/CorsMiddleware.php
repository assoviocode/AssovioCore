<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CorsMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        //Intercepts OPTIONS requests
        if($request->isMethod('OPTIONS')) {
            return response('', 200);
        } else {
            // Pass the request to the next middleware
           return $next($request);
        }
        
        // Adds headers to the response
        /*$response->header('Access-Control-Allow-Methods', 'HEAD, GET, POST, PUT, PATCH, DELETE');
        $response->header('Access-Control-Allow-Headers', $request->header('Access-Control-Request-Headers'));
        $response->header('Access-Control-Allow-Origin', '*');*/
        
        // Sends it
        /*return $response;*/

    }
}
