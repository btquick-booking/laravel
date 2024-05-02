<?php

namespace App\Filament\Company\Widgets;

use App\Models\Trip;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class TripsChart extends ChartWidget
{
    protected static bool $isLazy = false;

    protected static ?string $heading = 'Chart';

    protected static string $color = 'success';

    protected function getData(): array
    {
        // $data = Trend::model(Trip::class)
        // ->between(
        //     start: now()->startOfMonth(),
        //     end: now()->endOfMonth(),
        //     )
        //     ->query(Trip::query()
        //     ->whereBetween('created_at', [
        //         now()->startOfMonth(),
        //         now()->endOfMonth(),
        //     ])
        //     ->groupBy('id'))
        // ->perDay()
        // ->count();

        return [
            'datasets' => [
                [
                    'label' => 'User visit',
                    // 'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'data' => [],
                ],
            ],
            'labels' => [],
            // 'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
