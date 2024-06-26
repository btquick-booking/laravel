<?php

namespace App\Filament\Company\Widgets;

use Carbon\Carbon;
use App\Models\Trip;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use PhpParser\Node\Stmt\Return_;
use Filament\Widgets\ChartWidget;

class TripsChart extends ChartWidget
{



    protected static ?string $heading = 'Chart';
    protected static string $color = 'success';
    protected function getData(): array
    {
        $data = Trend::model(Trip::class)
        ->between(
            start: now()->startOfMonth(),
            end: now()->endOfMonth(),
        )
        ->perDay()
        ->count();

    return [
        'datasets' => [
            [
                'label' => 'User visit',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }


    protected function getType(): string
    {
        return 'line';
    }

}
