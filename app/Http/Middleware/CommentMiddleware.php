<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CommentMiddleware
{
    private $forbidenWords = ['idiot', 'hate', 'stupid'];
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        foreach ($this->forbidenWords as $word) {
            if (str_contains($word, $request->content)) {
                return redirect('/teams/' . $request->team_id)->withErrors('Forbidden word used: ' . $word);
            }
        }
        return $next($request);
    }
}
