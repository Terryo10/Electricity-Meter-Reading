<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Available Views
        </x-slot>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Report Viewer -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-document-chart-bar class="w-6 h-6 text-purple-600 dark:text-purple-400" />
                </div>
                <span class="text-sm font-medium text-center">View Reports</span>
            </div>
            
            <!-- Data Availability -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-chart-bar class="w-6 h-6 text-orange-600 dark:text-orange-400" />
                </div>
                <span class="text-sm font-medium text-center">Data Availability</span>
            </div>
            
            <!-- Consumption Profiles -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-cyan-100 dark:bg-cyan-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-chart-pie class="w-6 h-6 text-cyan-600 dark:text-cyan-400" />
                </div>
                <span class="text-sm font-medium text-center">Consumption Profiles</span>
            </div>
            
            <!-- System Status -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-signal class="w-6 h-6 text-emerald-600 dark:text-emerald-400" />
                </div>
                <span class="text-sm font-medium text-center">System Status</span>
            </div>
            
            <!-- Export Data -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-arrow-down-tray class="w-6 h-6 text-blue-600 dark:text-blue-400" />
                </div>
                <span class="text-sm font-medium text-center">Export Data</span>
            </div>
            
            <!-- View Alarms -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-bell class="w-6 h-6 text-red-600 dark:text-red-400" />
                </div>
                <span class="text-sm font-medium text-center">View Alarms</span>
            </div>
            
            <!-- Historical Data -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-clock class="w-6 h-6 text-indigo-600 dark:text-indigo-400" />
                </div>
                <span class="text-sm font-medium text-center">Historical Data</span>
            </div>
            
            <!-- Dashboard Views -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-squares-2x2 class="w-6 h-6 text-green-600 dark:text-green-400" />
                </div>
                <span class="text-sm font-medium text-center">Dashboard Views</span>
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>