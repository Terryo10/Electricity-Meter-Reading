<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\Widget;

class QuickActionsWidget extends Widget
{
    protected static string $view = 'filament.admin.widgets.quick-actions';
    protected static ?int $sort = 4;
    protected int | string | array $columnSpan = 'full';
}