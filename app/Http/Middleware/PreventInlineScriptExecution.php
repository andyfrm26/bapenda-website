<?php

namespace App\Http\Middleware;

use Closure;

class PreventInlineScriptExecution
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
        $response = $next($request);

        $token = csrf_token();
        
        $response->headers->set('Content-Security-Policy', "script-src http://127.0.0.1:5173/ https://fonts.googleapis.com/ https://cdn.jsdelivr.net/ https://fonts.gstatic.com/ https://use.fontawesome.com/ https://cdnjs.cloudflare.com/ https://code.jquery.com/ https://cdn.ckeditor.com/ https://ckeditor.com/ https://unpkg.com/@yaireo/ https://stackpath.bootstrapcdn.com/ 'nonce-$token'");

        return $response;
    }
}
