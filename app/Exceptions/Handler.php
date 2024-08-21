<?php

namespace App\Exceptions;

use App\Http\Middleware\EncryptCookies;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\Middleware\StartSession;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        StartSession::class,
        EncryptCookies::class,
        RouteNotFoundException::class
    ];
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $exception) {

        });
    }
    public function render($request, Throwable $e)
    {
        if ($request->ajax()){
            if ($e instanceof ServiceException) {
                if (!is_null($e->getData())) {
                    return response_error($e->getErrorCode(), $e->getMessage(), [], ['data' => $e->getData()]);
                }

                return response_error($e->getErrorCode(), $e->getMessage());
            }
        }

        return parent::render($request, $e);
    }
}
