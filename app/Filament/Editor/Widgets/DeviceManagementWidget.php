<?php

namespace App\Filament\Editor\Widgets;

use Filament\Widgets\ChartWidget;

class DeviceManagementWidget extends ChartWidget
{
    protected static ?string $heading = 'Your Device Performance';
    protected static ?int $sort = 2;
    
    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Data Collection Rate (%)',
                    'data' => [98, 96, 99, 97, 98, 95, 97],
                    'borderColor' => 'rgb(59, 130, 246)',
                    'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                    'fill' => true,
                ],
            ],
            'labels' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}