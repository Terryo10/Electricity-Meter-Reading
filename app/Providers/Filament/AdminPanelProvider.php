<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckPanelAccess;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Navigation\NavigationItem;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->profile()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Admin/Resources'), for: 'App\\Filament\\Admin\\Resources')
            ->discoverPages(in: app_path('Filament/Admin/Pages'), for: 'App\\Filament\\Admin\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Admin/Widgets'), for: 'App\\Filament\\Admin\\Widgets')
            ->widgets([
                \App\Filament\Admin\Widgets\SystemOverviewWidget::class,
                \App\Filament\Admin\Widgets\DeviceStatusWidget::class,
                \App\Filament\Admin\Widgets\EnergyConsumptionWidget::class,
                \App\Filament\Admin\Widgets\QuickActionsWidget::class,
                \App\Filament\Admin\Widgets\RecentActivitiesWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
                CheckPanelAccess::class . ':admin',
            ])
            ->authGuard('web')
            ->navigationItems([
                NavigationItem::make('Device Config Wizard')
                    ->url('#')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->group('Device Management')
                    ->sort(1),
                NavigationItem::make('Device Configuration')
                    ->url('#')
                    ->icon('heroicon-o-cpu-chip')
                    ->group('Device Management')
                    ->sort(2),
                NavigationItem::make('Tariffs')
                    ->url('#')
                    ->icon('heroicon-o-currency-dollar')
                    ->group('Billing & Pricing')
                    ->sort(3),
                NavigationItem::make('Alarms')
                    ->url('#')
                    ->icon('heroicon-o-exclamation-triangle')
                    ->group('Monitoring')
                    ->sort(4),
                NavigationItem::make('Report Viewer')
                    ->url('#')
                    ->icon('heroicon-o-document-chart-bar')
                    ->group('Reports & Analytics')
                    ->sort(5),
                NavigationItem::make('Data Acquisition')
                    ->url('#')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->group('Data Management')
                    ->sort(6),
                NavigationItem::make('VEE Engine')
                    ->url('#')
                    ->icon('heroicon-o-adjustments-vertical')
                    ->group('Data Management')
                    ->sort(7),
                NavigationItem::make('User Configuration')
                    ->url('#')
                    ->icon('heroicon-o-users')
                    ->group('System Administration')
                    ->sort(8),
                NavigationItem::make('Data Availability')
                    ->url('#')
                    ->icon('heroicon-o-chart-bar')
                    ->group('Reports & Analytics')
                    ->sort(9),
                NavigationItem::make('Audit Trail')
                    ->url('#')
                    ->icon('heroicon-o-magnifying-glass')
                    ->group('System Administration')
                    ->sort(10),
                NavigationItem::make('Profiles')
                    ->url('#')
                    ->icon('heroicon-o-chart-pie')
                    ->group('Reports & Analytics')
                    ->sort(11),
                NavigationItem::make('System Status')
                    ->url('#')
                    ->icon('heroicon-o-signal')
                    ->group('Monitoring')
                    ->sort(12),
            ]);
    }
}
