<x-app-layout>
    @section('title', 'Events - Admin');

    <x-section class="border rounded-lg">
        <x-h type="h2">Page Views</x-h>

        <div class="w-1/3">
            <x-label for="dateRange">Select Date Range</x-label>
            <x-select id="dateRange">
                <option value="today">Today</option>
                <option value="last_week">Last Week</option>
                <option value="last_month">Last Month</option>
                <option value="all_time">All Time</option>
            </x-select>
        </div>

        <canvas id="pageViewsChart" width="400" height="200"></canvas>
    </x-section>

    <x-section class="border rounded-lg">
        <x-h type="h2">Unique Visitors</x-h>

        <div class="w-1/3">
            <x-label for="dateRange">Select Date Range</x-label>
            <x-select id="dateRange">
                <option value="today">Today</option>
                <option value="last_week">Last Week</option>
                <option value="last_month">Last Month</option>
                <option value="all_time">All Time</option>
            </x-select>
        </div>

        <canvas id="uniqueVisitorsChart" width="400" height="200"></canvas>
    </x-section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const pageViewsCtx = document.getElementById('pageViewsChart').getContext('2d');
            const uniqueVisitorsCtx = document.getElementById('uniqueVisitorsChart').getContext('2d');
            const rawPageViews = @json($page_views);
            const rawUniqueVisitors = @json($unique_visitors);

            let pageViews = JSON.parse(rawPageViews);
            let uniqueVisitors = JSON.parse(rawUniqueVisitors);
            let pageViewsChart = null;
            let uniqueVisitorsChart = null;

            const renderChart = (ctx, data, type = 'bar', labelText = 'Page Views Over Time', chartInstance) => {
                if (chartInstance) {
                    chartInstance.destroy();
                }

                const dates = [...new Set(data.map(item => item.date))];
                const pages = [...new Set(data.map(item => item.page))];

                const datasets = pages.map(page => {
                    return {
                        label: page,
                        data: dates.map(date => {
                            const pageView = data.find(pv => pv.page === page && pv.date === date);
                            return pageView ? pageView.views : 0;
                        }),
                        backgroundColor: `#${Math.floor(Math.random() * 16777215).toString(16)}`
                    };
                });

                return new Chart(ctx, {
                    type: type,
                    data: {
                        labels: dates,
                        datasets: datasets
                    },
                    options: {
                        title: {
                            display: true,
                            text: labelText
                        },
                        scales: {
                            x: {
                                type: 'category',
                                labels: dates
                            },
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            };

            pageViewsChart = renderChart(pageViewsCtx, pageViews, 'bar', 'Page Views Over Time', pageViewsChart);
            uniqueVisitorsChart = renderChart(uniqueVisitorsCtx, uniqueVisitors, 'line', 'Unique Visitors Over Time', uniqueVisitorsChart);

            document.getElementById('dateRange').addEventListener('change', function () {
                const selectedRange = this.value;
                fetch(`/admin/events/data?range=${selectedRange}`)
                    .then(response => response.json())
                    .then(data => {
                        pageViews = data.pageViews;
                        uniqueVisitors = data.uniqueVisitors;
                        pageViewsChart = renderChart(pageViewsCtx, pageViews, 'bar', 'Page Views Over Time', pageViewsChart);
                        uniqueVisitorsChart = renderChart(uniqueVisitorsCtx, uniqueVisitors, 'line', 'Unique Visitors Over Time', uniqueVisitorsChart);
                    });
            });
        });
    </script>
</x-app-layout>

