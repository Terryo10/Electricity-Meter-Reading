<?php

namespace App\Filament\Viewer\Widgets;

use Filament\Widgets\Widget;

class ViewerQuickActionsWidget extends Widget
{
    protected static string $view = 'filament.viewer.widgets.quick-actions';
    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';
}