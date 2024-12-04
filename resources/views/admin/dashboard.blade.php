<x-layoutadmin>
    <div class="space-y-4">
        <div>
            <p class="text-2xl font-bold text-[#A4133C] ">Dashboard</p>
        </div>
        <div class="grid grid-cols-1 gap-4 border border-slate-300 shadow-lg shadow-slate-400 pl-4 pr-8 py-4 bg-white rounded-lg space-y-4 ">
            <div class="justify-end xl:flex space-y-2 xl:space-y-0">
                <div class="flex justify-end">
                    <div class="flex">
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-slate-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Filter</option>
                            <option value="Tahun">Tahun Ini</option>
                            <option value="Bulan">Minggu Ini</option>
                            <option value="Bulan">Custom Tanggal</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Tempat chart untuk DistanceStatus -->
            <div id="chartLineDistance" class=" bg-pink-50 rounded-md pt-4"></div>

            <!-- Tempat chart untuk PostureStatus -->
            <div class="pt-4">
                <div id="chartLinePosture" class=" bg-pink-50 rounded-md"></div>
            </div>
        </div>
    </div>

    <!-- Script untuk chart -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script> <!-- Memastikan dashboard.js dipanggil -->
    <script>
        
        // Data PostureStatus
        var postureData = @json($perBulanPostureCount); // Data dari controller
        var postureLabels = Object.keys(postureData);  // Bulan
        var postureCounts = Object.values(postureData);  // Jumlah data per bulan

        var optionsPosture = {
            series: [{
                name: "BAD POSTURE",
                data: postureCounts, // Data untuk 12 bulan
            }],
            chart: {
                height: 350,
                type: "area",
                dropShadow: {
                    enabled: true,
                    color: "#000",
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2,
                },
                zoom: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            colors: ["#FBB13C"],
            dataLabels: {
                enabled: true,
            },
            stroke: {
                curve: "smooth",
            },
            title: {
                text: "BAD POSTURE",
                align: "right",
            },
            grid: {
                borderColor: "#e7e7e7",
                row: {
                    colors: ["#f3f3f3", "transparent"], // Row color alternates
                    opacity: 0.5,
                },
            },
            markers: {
                size: 1,
            },
            xaxis: {
                categories: postureLabels, // Bulan
            },
            legend: {
                position: "top",
                horizontalAlign: "right",
                floating: true,
                offsetY: -25,
                offsetX: -5,
            },
        };

        var chartPosture = new ApexCharts(document.querySelector("#chartLinePosture"), optionsPosture);
        chartPosture.render();

        // Data DistanceStatus
        var distanceData = @json($perBulanDistanceCount); // Data dari controller
        var distanceLabels = Object.keys(distanceData);  // Bulan
        var distanceCounts = Object.values(distanceData);  // Jumlah data per bulan

        var optionsDistance = {
            series: [{
                name: "BAD DISTANCE",
                data: distanceCounts, // Data untuk 12 bulan
            }],
            chart: {
                height: 350,
                type: "area",
                dropShadow: {
                    enabled: true,
                    color: "#000",
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2,
                },
                zoom: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            colors: ["#73D2DE"],
            dataLabels: {
                enabled: true,
            },
            stroke: {
                curve: "smooth",
            },
            title: {
                text: "BAD DISTANCE",
                align: "right",
            },
            grid: {
                borderColor: "#e7e7e7",
                row: {
                    colors: ["#f3f3f3", "transparent"], // Row color alternates
                    opacity: 0.5,
                },
            },
            markers: {
                size: 1,
            },
            xaxis: {
                categories: distanceLabels, // Bulan
            },
            legend: {
                position: "top",
                horizontalAlign: "right",
                floating: true,
                offsetY: -25,
                offsetX: -5,
            },
        };

        var chartDistance = new ApexCharts(document.querySelector("#chartLineDistance"), optionsDistance);
        chartDistance.render();
    </script>
</x-layoutadmin>
