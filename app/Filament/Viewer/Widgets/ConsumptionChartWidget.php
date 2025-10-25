<?php

namespace App\Filament\Viewer\Widgets;

use Filament\Widgets\ChartWidget;

class ConsumptionChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Energy Consumption Overview';
    protected static ?int $sort = 2;
    
    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Daily Consumption (kWh)',
                    'data' => [2100, 2350, 2180, 2420, 2380, 2250, 2320, 2150, 2400, 2300, 2180, 2450],
                    'borderColor' => 'rgb(34, 197, 94)',
                    'backgroundColor' => 'rgba(34, 197, 94, 0.1)',
                    'fill' => true,
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}