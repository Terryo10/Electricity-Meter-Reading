<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Quick Actions
        </x-slot>
        
        <style>
            .quick-actions-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 1rem;
            }
            @media (max-width: 768px) {
                .quick-actions-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
            @media (max-width: 480px) {
                .quick-actions-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>
        <div class="quick-actions-grid">
            <!-- Device Config Wizard -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-cog-6-tooth class="w-5 h-5 text-blue-600 dark:text-blue-400" />
                </div>
                <span class="text-xs font-medium text-center">Device Config Wizard</span>
            </div>
            
            <!-- Device Configuration -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-cpu-chip class="w-5 h-5 text-green-600 dark:text-green-400" />
                </div>
                <span class="text-xs font-medium text-center">Device Configuration</span>
            </div>
            
            <!-- Tariffs -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-currency-dollar class="w-5 h-5 text-yellow-600 dark:text-yellow-400" />
                </div>
                <span class="text-xs font-medium text-center">Tariffs</span>
            </div>
            
            <!-- Alarms -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-exclamation-triangle class="w-5 h-5 text-red-600 dark:text-red-400" />
                </div>
                <span class="text-xs font-medium text-center">Alarms</span>
            </div>
            
            <!-- Report Viewer -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-document-chart-bar class="w-5 h-5 text-purple-600 dark:text-purple-400" />
                </div>
                <span class="text-xs font-medium text-center">Report Viewer</span>
            </div>
            
            <!-- Data Acquisition -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-arrow-down-tray class="w-5 h-5 text-indigo-600 dark:text-indigo-400" />
                </div>
                <span class="text-xs font-medium text-center">Data Acquisition</span>
            </div>
            
            <!-- VEE Engine -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-teal-100 dark:bg-teal-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-adjustments-vertical class="w-5 h-5 text-teal-600 dark:text-teal-400" />
                </div>
                <span class="text-xs font-medium text-center">VEE Engine</span>
            </div>
            
            <!-- User Configuration -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-pink-100 dark:bg-pink-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-users class="w-5 h-5 text-pink-600 dark:text-pink-400" />
                </div>
                <span class="text-xs font-medium text-center">User Configuration</span>
            </div>
            
            <!-- Data Availability -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-chart-bar class="w-5 h-5 text-orange-600 dark:text-orange-400" />
                </div>
                <span class="text-xs font-medium text-center">Data Availability</span>
            </div>
            
            <!-- Audit Trail -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-gray-100 dark:bg-gray-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-magnifying-glass class="w-5 h-5 text-gray-600 dark:text-gray-400" />
                </div>
                <span class="text-xs font-medium text-center">Audit Trail</span>
            </div>
            
            <!-- Profiles -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-cyan-100 dark:bg-cyan-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-chart-pie class="w-5 h-5 text-cyan-600 dark:text-cyan-400" />
                </div>
                <span class="text-xs font-medium text-center">Profiles</span>
            </div>
            
            <!-- System Status -->
            <div class="flex flex-col items-center p-3 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-10 h-10 bg-emerald-100 dark:bg-emerald-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-signal class="w-5 h-5 text-emerald-600 dark:text-emerald-400" />
                </div>
                <span class="text-xs font-medium text-center">System Status</span>
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>