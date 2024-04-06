<?php

namespace App\Filament\Company\Widgets;

use App\Models\Bus;
use App\Models\Customer;
use App\Models\Trip;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use PhpParser\Node\Stmt\Static_;

class StatsOverview extends BaseWidget
{


    protected Static ?string $pollingInterval ='15s';
    protected static bool $islazy =true;
    protected function getStats(): array
    {
        return [
           Stat::make('Total Customer',Customer::count())
           ->description('Increase in Customers')
           ->descriptionIcon('heroicon-o-user-group')
           ->color('success')
           ->chart([7 ,3 ,4 ,5 ,6 ,3 ,5 , 3]),
           Stat::make('Total Trips',Trip::count())
           ->description('Increase in Trips')
           ->descriptionIcon('heroicon-m-arrow-trending-down')
           ->color('danger')
           ->chart([7 ,3 ,4 ,5 ,6 ,3 ,5 , 3]),


           Stat::make('Total Buses',Bus::count())
           ->description('Increase in Buses')
           ->descriptionIcon('heroicon-m-arrow-trending-up')
           ->color('success')
           ->chart([7 ,3 ,4 ,5 ,6 ,3 ,5 , 3]),

        ];
    }
}
