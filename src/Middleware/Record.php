<?php

namespace Eugene\ApiLog\Middleware;

use Closure;
use Eugene\ApiLog\Entities\VisitLogEntity;

class Record
{
    protected $visitLogEntity;

    public function __construct(VisitLogEntity $visitLogEntity)
    {
        $this->visitLogEntity = $visitLogEntity;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        $data = [
            'user_id' => (int)$request->input('user_id', 0),
            'method' => $request->method(),
            'device_id' => $request->input('device_id', ''),
            'request_url' => $request->url(),
            'request_params' => $request->all(),
            'response_code' => $response->getStatusCode(),
            'ip' => $request->ip(),
        ];
        $this->visitLogEntity->create($data);
    }
}
