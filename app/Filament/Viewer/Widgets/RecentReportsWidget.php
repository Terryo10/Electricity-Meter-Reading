<?php

namespace App\Filament\Viewer\Widgets;

use Filament\Widgets\Widget;

class RecentReportsWidget extends Widget
{
    protected static string $view = 'filament.viewer.widgets.recent-reports';
    protected static ?int $sort = 4;
    protected int | string | array $columnSpan = 'full';
}