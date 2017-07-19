<?php

namespace Eugene\ApiLog\Entities;

use Eugene\ApiLog\Models\VisitLog;

class VisitLogEntity
{

    protected $visitLog;

    public function __construct(VisitLog $visitLog)
    {
        $this->visitLog = $visitLog;
    }


    public function create($data)
    {
        return $this->visitLog->create($data);
    }

}
