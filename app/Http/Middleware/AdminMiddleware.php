<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\AuthorizationException;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(Request): (Response|RedirectResponse)  $next
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     */
    public function handle(Request $request, Closure $next, AuthFactory $auth): Response|RedirectResponse
    {
        if (!$auth->guard() || !Gate::allows('admin')) {
            throw new AuthenticationException('Unauthorized');
        }
        return $next($request);
    }
}
