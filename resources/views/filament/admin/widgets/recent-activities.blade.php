<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Recent System Activities
        </x-slot>
        
        <div class="space-y-3">
            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
                        <x-heroicon-o-plus class="w-4 h-4 text-blue-600 dark:text-blue-400" />
                    </div>
                    <div>
                        <p class="text-sm font-medium">Device Added</p>
                        <p class="text-xs text-gray-500">admin@system.com • Meter #245</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-xs text-gray-500">2 hours ago</p>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Success</span>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center">
                        <x-heroicon-o-pencil class="w-4 h-4 text-yellow-600 dark:text-yellow-400" />
                    </div>
                    <div>
                        <p class="text-sm font-medium">Tariff Modified</p>
                        <p class="text-xs text-gray-500">editor@system.com • Peak Rate Tariff</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-xs text-gray-500">3 hours ago</p>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Success</span>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center">
                        <x-heroicon-o-arrow-down-tray class="w-4 h-4 text-indigo-600 dark:text-indigo-400" />
                    </div>
                    <div>
                        <p class="text-sm font-medium">Data Acquisition</p>
                        <p class="text-xs text-gray-500">System • Zone A Meters</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-xs text-gray-500">4 hours ago</p>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">Completed</span>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-red-100 dark:bg-red-900 rounded-full flex items-center justify-center">
                        <x-heroicon-o-check class="w-4 h-4 text-red-600 dark:text-red-400" />
                    </div>
                    <div>
                        <p class="text-sm font-medium">Alarm Acknowledged</p>
                        <p class="text-xs text-gray-500">admin@system.com • High Consumption Alert</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-xs text-gray-500">6 hours ago</p>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-cyan-100 text-cyan-800 dark:bg-cyan-900 dark:text-cyan-200">Acknowledged</span>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center">
                        <x-heroicon-o-document-chart-bar class="w-4 h-4 text-purple-600 dark:text-purple-400" />
                    </div>
                    <div>
                        <p class="text-sm font-medium">Report Generated</p>
                        <p class="text-xs text-gray-500">viewer@system.com • Weekly Consumption Report</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-xs text-gray-500">8 hours ago</p>
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Generated</span>
                </div>
            </div>
        </div>
        
        <div class="mt-4 text-center">
            <x-filament::button 
                size="sm" 
                color="gray" 
                outlined
            >
                View All Activities
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>