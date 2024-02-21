<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('stonks go up', 42)
                ->chart([20, 42])
                ->color('danger'),
            Stat::make('stonks go down', 20)
                ->chart([42, 20])
                ->color('success'),
        ];
    }
}
