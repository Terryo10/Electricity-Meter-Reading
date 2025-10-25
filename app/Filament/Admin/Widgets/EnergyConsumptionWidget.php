<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class EnergyConsumptionWidget extends ChartWidget
{
    protected static ?string $heading = 'Energy Consumption Trend';
    protected static ?int $sort = 3;
    protected static ?string $maxHeight = '300px';
    
    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'kWh Consumed',
                    'data' => [1200, 1350, 1180, 1420, 1380, 1250, 1320],
                    'borderColor' => 'rgb(34, 197, 94)',
                    'backgroundColor' => 'rgba(34, 197, 94, 0.1)',
                    'fill' => true,
                ],
                [
                    'label' => 'Peak Demand (kW)',
                    'data' => [850, 920, 780, 950, 890, 820, 870],
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