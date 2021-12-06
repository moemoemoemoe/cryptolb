<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class SaveVisitorLastAction
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $IpAddress = $request->ip();

              $visitor = Visitor::updateOrCreate(
            [ 'ip_address' => $IpAddress ] ,
            [
            'last_action_at' => now() ]
                                ); 
$visitor->touch();
        return $next($request);
    }
}
