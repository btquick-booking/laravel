<?php

namespace App\Filament\Widgets;

use App\Models\Company;
use App\Models\Trip;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total users',User::count())
            ->description('Increase in Trips')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([7 ,3 ,4 ,5 ,6 ,3 ,5 , 3]),

            Stat::make('Total Company',Company::count())
            ->description('Increase in Trips')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([7 ,3 ,4 ,5 ,6 ,3 ,5 , 3]),



            Stat::make('Total Trips',Trip::count())
            ->description('Increase in Trips')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger')
            ->chart([7 ,3 ,4 ,5 ,6 ,3 ,5 , 3]),
        ];
    }
}
