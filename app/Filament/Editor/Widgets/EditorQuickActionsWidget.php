<?php

namespace App\Filament\Editor\Widgets;

use Filament\Widgets\Widget;

class EditorQuickActionsWidget extends Widget
{
    protected static string $view = 'filament.editor.widgets.quick-actions';
    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';
}