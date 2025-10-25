<?php

namespace App\Filament\Viewer\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ViewerOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;
    
    protected function getStats(): array
    {
        return [
            Stat::make('Available Reports', '28')
                ->description('Reports you can access')
                ->descriptionIcon('heroicon-m-document-chart-bar')
                ->color('info'),
            
            Stat::make('Current Consumption', '2,450 kWh')
                ->description('Today\'s total')
                ->descriptionIcon('heroicon-m-bolt')
                ->color('success'),
            
            Stat::make('Peak Demand', '1,850 kW')
                ->description('Today\'s maximum')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('warning'),
            
            Stat::make('System Status', 'Online')
                ->description('All systems operational')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),
        ];
    }
}