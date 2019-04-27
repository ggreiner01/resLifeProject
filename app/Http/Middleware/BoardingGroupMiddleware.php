<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Users;
use Carbon\Carbon;

class BoardingGroupMiddleware
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
      $group = Auth::user()->BoardingGroupID;

      if($group != null || $group != 0){
        $boardingTime = \DB::table('boardinggroup')->where('BoardingGroup', '=', $group)->value('TimeToLogIn');

        $currentTime = Carbon::now();
        $loginTime = Carbon::parse($boardingTime);

        if($loginTime->gt($currentTime)){
          return redirect('landing');
        }
          return $next($request);
      }
      return $next($request);
  }
}
