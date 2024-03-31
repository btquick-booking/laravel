<?php

namespace App\Filament\Company\Widgets;

use App\Models\Trip;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use PhpParser\Node\Stmt\Return_;

class TripsChart extends ChartWidget
{

 

    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $data =$this->getTripsPerMonth();
        return [
            'datastets'=>[
                [
                'lable' =>'Blog Trips created',
                'data'=>$data['tripsPerMonth']
                ]
                ],
                'labels'=> $data['months']
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
    private function getTripsPerMonth(): array
{
    $now = Carbon::now();
    $tripsPerMonth =[];
$months =collect(range(1 ,12))->map(function($month  ) use ($now, $tripsPerMonth)
{
    $count =Trip::whereMonth('created_at',Carbon::parse($now->month($month)->format('Y-m')))->count();
$tripsPerMonth[]= $count;
return $now->month($month)->format('M');
})->toArray();
return[
    'tripsPerMonth' =>$tripsPerMonth,
    'months'=>$months
];
}

}
