<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Editor Actions
        </x-slot>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Device Configuration -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-cpu-chip class="w-6 h-6 text-green-600 dark:text-green-400" />
                </div>
                <span class="text-sm font-medium text-center">Device Configuration</span>
            </div>
            
            <!-- Tariffs -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-currency-dollar class="w-6 h-6 text-yellow-600 dark:text-yellow-400" />
                </div>
                <span class="text-sm font-medium text-center">Tariffs</span>
            </div>
            
            <!-- Report Viewer -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-document-chart-bar class="w-6 h-6 text-purple-600 dark:text-purple-400" />
                </div>
                <span class="text-sm font-medium text-center">Report Viewer</span>
            </div>
            
            <!-- Data Acquisition -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-arrow-down-tray class="w-6 h-6 text-indigo-600 dark:text-indigo-400" />
                </div>
                <span class="text-sm font-medium text-center">Data Acquisition</span>
            </div>
            
            <!-- VEE Engine -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-teal-100 dark:bg-teal-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-adjustments-vertical class="w-6 h-6 text-teal-600 dark:text-teal-400" />
                </div>
                <span class="text-sm font-medium text-center">VEE Engine</span>
            </div>
            
            <!-- Data Validation -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-check-circle class="w-6 h-6 text-orange-600 dark:text-orange-400" />
                </div>
                <span class="text-sm font-medium text-center">Data Validation</span>
            </div>
            
            <!-- Profiles -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-cyan-100 dark:bg-cyan-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-chart-pie class="w-6 h-6 text-cyan-600 dark:text-cyan-400" />
                </div>
                <span class="text-sm font-medium text-center">Profiles</span>
            </div>
            
            <!-- Alarms -->
            <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer transition-colors">
                <div class="w-12 h-12 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center mb-2">
                    <x-heroicon-o-bell class="w-6 h-6 text-red-600 dark:text-red-400" />
                </div>
                <span class="text-sm font-medium text-center">View Alarms</span>
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>