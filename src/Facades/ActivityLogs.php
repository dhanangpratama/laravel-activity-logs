<?php

namespace DhanangPratama\ActivityLogs\Facades;

use Illuminate\Support\Facades\Facade;

class ActivityLogs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'activitylogs';
    }
}