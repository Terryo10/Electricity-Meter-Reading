<?php

namespace App\Filament\Editor\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EditorOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;
    
    protected function getStats(): array
    {
        return [
            Stat::make('Assigned Devices', '45')
                ->description('Devices you can manage')
                ->descriptionIcon('heroicon-m-cpu-chip')
                ->color('info'),
            
            Stat::make('Today\'s Data Points', '523')
                ->description('From your devices')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            
            Stat::make('Pending Reviews', '7')
                ->description('Data validation tasks')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),
            
            Stat::make('Reports Generated', '12')
                ->description('This month')
                ->descriptionIcon('heroicon-m-document-chart-bar')
                ->color('primary'),
        ];
    }
}