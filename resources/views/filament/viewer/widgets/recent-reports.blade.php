<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Recent Reports
        </x-slot>
        
        <div class="overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Report</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Period</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Generated</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">Monthly Consumption Report</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Consumption</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">October 2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Oct 25, 09:00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                            <x-filament::button size="xs" color="primary">
                                <x-heroicon-o-eye class="w-3 h-3 mr-1" />
                                View
                            </x-filament::button>
                            <x-filament::button size="xs" color="gray">
                                <x-heroicon-o-arrow-down-tray class="w-3 h-3 mr-1" />
                                Download
                            </x-filament::button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">Weekly Peak Demand Analysis</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">Demand</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Week 43, 2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Oct 24, 16:30</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                            <x-filament::button size="xs" color="primary">
                                <x-heroicon-o-eye class="w-3 h-3 mr-1" />
                                View
                            </x-filament::button>
                            <x-filament::button size="xs" color="gray">
                                <x-heroicon-o-arrow-down-tray class="w-3 h-3 mr-1" />
                                Download
                            </x-filament::button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">Daily Load Profile</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">Profile</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">2024-10-24</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Oct 24, 23:59</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                            <x-filament::button size="xs" color="primary">
                                <x-heroicon-o-eye class="w-3 h-3 mr-1" />
                                View
                            </x-filament::button>
                            <x-filament::button size="xs" color="gray">
                                <x-heroicon-o-arrow-down-tray class="w-3 h-3 mr-1" />
                                Download
                            </x-filament::button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">Quarterly Energy Summary</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200">Summary</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Q3 2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Oct 23, 14:15</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                            <x-filament::button size="xs" color="primary">
                                <x-heroicon-o-eye class="w-3 h-3 mr-1" />
                                View
                            </x-filament::button>
                            <x-filament::button size="xs" color="gray">
                                <x-heroicon-o-arrow-down-tray class="w-3 h-3 mr-1" />
                                Download
                            </x-filament::button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">Alarm History Report</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">Alarms</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Last 30 days</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Oct 22, 11:20</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                            <x-filament::button size="xs" color="primary">
                                <x-heroicon-o-eye class="w-3 h-3 mr-1" />
                                View
                            </x-filament::button>
                            <x-filament::button size="xs" color="gray">
                                <x-heroicon-o-arrow-down-tray class="w-3 h-3 mr-1" />
                                Download
                            </x-filament::button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="mt-4 text-center">
            <x-filament::button 
                size="sm" 
                color="gray" 
                outlined
            >
                View All Reports
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>