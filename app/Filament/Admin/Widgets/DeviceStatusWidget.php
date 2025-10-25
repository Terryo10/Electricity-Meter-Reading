<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class DeviceStatusWidget extends ChartWidget
{
    protected static ?string $heading = 'Device Status Distribution';
    protected static ?int $sort = 2;
    
    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Device Status',
                    'data' => [85, 10, 3, 2],
                    'backgroundColor' => [
                        'rgb(34, 197, 94)',
                        'rgb(251, 191, 36)', 
                        'rgb(239, 68, 68)',
                        'rgb(156, 163, 175)',
                    ],
                ],
            ],
            'labels' => ['Online', 'Warning', 'Offline', 'Maintenance'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}