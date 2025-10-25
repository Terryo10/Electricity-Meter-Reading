<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\Widget;

class RecentActivitiesWidget extends Widget
{
    protected static string $view = 'filament.admin.widgets.recent-activities';
    protected static ?int $sort = 5;
    protected int | string | array $columnSpan = 'full';
}