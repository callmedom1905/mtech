<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra người dùng đã đăng nhập và có role là 'admin'
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }
        // Nếu không phải admin, chuyển hướng (hoặc trả lỗi)
        return redirect()->route('index')->with('error', 'Bạn không có quyền truy cập trang này.');

    }
}
