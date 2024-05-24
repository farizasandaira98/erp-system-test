<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        $user = auth()->user();
        $userRole = UserRole::where('user_id', $user->id)->first();

        if (!$userRole->role_id) {
            abort(403, 'Unauthorized');
        }

        // Super Admin can access all
        if ($userRole->role_id === 1) {
            return $next($request);
        }

        // Admin specific checks
        if ($userRole->role_id === 2) {
            // Admin cannot manage users
            if ($request->is('users/*') || $request->is('users')) {
                abort(403, 'Unauthorized');
            }
            return $next($request);
        }

        // User specific checks
        if ($userRole->role_id === 3) {
            // Users can only access index pages
            if (!$request->isMethod('get') || !$this->isIndexPage($request)) {
                abort(403, 'Unauthorized');
            }
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }

    private function isIndexPage($request)
    {
        // Check if the route is an index page
        $routeName = $request->route()->getName();
        return strpos($routeName, 'index') !== false;
    }
}
