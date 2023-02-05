<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\NewUsers;
use Laravel\Nova\Dashboard;

class UserInsights extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            NewUsers::make()
        ];
    }

    public function name()
    {
        return 'User Insights';
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'user-insights';
    }
}
