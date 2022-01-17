<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

class SetLanguage
<<<<<<< HEAD
{   
    private $app;
    public function __construct(Application $app) {
=======
{
    private $app;
    public function __construct(Application $app){
>>>>>>> 7c88c77 (cred_category)
        $this->app = $app;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
<<<<<<< HEAD
    public function handle(Request $request, Closure $next)
    {
        $this->app->setLocale('en');
        return $next($request);
    }
=======
    public function handle(Request $request, Closure $next )
    {
        $this->app->setlocale('en');
        return $next($request);
    }
  
>>>>>>> 7c88c77 (cred_category)
}
