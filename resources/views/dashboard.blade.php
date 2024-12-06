@extends('layouts.user_type.auth')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>


<div class="row">
    <!-- Card: Total Candidates -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Candidates</p>
                            <h5 class="font-weight-bolder mb-0">{{ count($candidates) }}</h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                            <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Total Voters -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Voters</p>
                            <h5 class="font-weight-bolder mb-0">{{ count($voters) }}</h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Voted -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Voted</p>
                            <h5 class="font-weight-bolder mb-0">{{ count($voted) }}</h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                            <i class="ni ni-check-bold text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Unvoted -->
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Unvoted</p>
                            <h5 class="font-weight-bolder mb-0">{{ count($unvoted)-1 }}</h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                            <i class="ni ni-fat-remove text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bar Charts Section -->
<div class="row mt-4">
    @foreach($datas as $index => $data)
        <div class="col-lg-6 my-3">
            <div class="card z-index-2">
                <div class="card-body">
                    <h6 class="mb-3 text-center">Total Vote Chart {{ $data->name }}</h6>
                    <canvas id="barChart{{ $index+1 }}" height="250"></canvas>
                    <!-- Export Data Table Button -->
                    <div class="d-flex justify-content-center mt-3">
                        <button type="button" class="btn btn-dark btn-sm" onclick="exportTableData('barChart{{ $index+1 }}')">Export as XLSX</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const options = {
            indexAxis: 'y',
            responsive: true,
            plugins: {
                legend: { display: true, position: 'top' },
                tooltip: { enabled: true },
            },
        };

        // Data dari server
        const roles = @json($datas);
        const logs = @json($logs);
        const candidates = @json($candidates);

        // Fungsi untuk membuat gradien warna
        function createGradients(ctx) {
            const gradients = [];
            const gradientColors = [
                // ['#7928ca', '#ff0080'], ['#17ad37', '#98ec2d'], 
                ['#2152ff', '#21d4fd'], 
                // ['#ea0606', '#ff667c'], ['#ffcc00', '#ffaa00'],
                // ['#00ff00', '#32cd32'], ['#00ffff', '#1e90ff'], ['#ff00ff', '#ff1493'], ['#0000ff', '#4169e1'], ['#f53939', '#fbcf33'],
                // ['#ff1493', '#ff69b4'], ['#00ff7f', '#7fff00'], ['#ff7f50', '#ff4500'], ['#4b0082', '#9400d3'], ['#8a2be2', '#dda0dd'],
                // ['#7b68ee', '#6a5acd'], ['#00fa9a', '#20b2aa'], ['#4682b4', '#5f9ea0'], ['#b0e0e6', '#87ceeb'], ['#b8860b', '#daa520'],
                // ['#ffd700', '#ffc125'], ['#8b0000', '#cd5c5c'], ['#ff69b4', '#ffb6c1'], ['#6495ed', '#1e90ff'], ['#7fffd4', '#40e0d0'],
                // ['#556b2f', '#6b8e23'], ['#228b22', '#32cd32'], ['#adff2f', '#9acd32'], ['#ff4500', '#ff6347'], ['#ff8c00', '#ffa500'],
                // ['#2e8b57', '#3cb371'], ['#48d1cc', '#00ced1'], ['#ff00ff', '#ba55d3'], ['#9370db', '#8a2be2'], ['#663399', '#4b0082'],
                // ['#00008b', '#0000cd'], ['#008080', '#008b8b'], ['#6b8e23', '#808000'], ['#ffa07a', '#fa8072'], ['#ff4500', '#dc143c'],
                // ['#2f4f4f', '#696969'], ['#1e90ff', '#4682b4'], ['#00bfff', '#5f9ea0'], ['#b0c4de', '#add8e6'], ['#d2691e', '#a0522d'],
                // ['#bc8f8f', '#deb887'], ['#ffdead', '#ffe4b5'], ['#ffdab9', '#ffa07a'], ['#ffefd5', '#ffe4c4']
            ];

            for (let i = 0; i < gradientColors.length; i++) {
                const gradient = ctx.createLinearGradient(ctx.canvas.width, 0, 0, 0);
                gradient.addColorStop(0, gradientColors[i][0]);
                gradient.addColorStop(1, gradientColors[i][1]);
                gradients.push(gradient);
            }

            return gradients;
        }

        // Iterasi setiap role untuk membuat dataset
        roles.forEach((role, index) => {
            const roleCandidates = candidates.filter(candidate => candidate.role === role.name);

            const labels = roleCandidates.map(candidate => 
                candidate.name.length > 15 
                    ? candidate.name.substring(0, 12) + "." 
                    : candidate.name
            );
            const dataHaha = roleCandidates.map(candidate => {
                return logs.filter(log => log.candidate_id === candidate.id).length;
            });

            const ctx = document.getElementById(`barChart${index + 1}`).getContext("2d");
            const gradients = createGradients(ctx);

            // Buat chart
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: labels,
                    datasets: [
                        {
                            data: dataHaha,
                            backgroundColor: dataHaha.map((_, i) => gradients[i % gradients.length]), // Gunakan gradien secara siklis
                        },
                    ],
                },
                options: {
                    ...options,
                    plugins: {
                        ...options.plugins,
                        legend: {
                            display: false, // Atur legend menjadi false jika tidak ingin tampil
                        },
                    },
                },
            });
        });
    });
</script>

<script>
    console.log(labels.length, dataHaha.length);
    console.log(roleCandidates);
    console.log(dataHaha);

</script>



<script>
    // Function to extract chart data and export as table (XLSX)
    function exportTableData(chartId) {
        const chart = Chart.getChart(chartId);
        const labels = chart.data.labels;
        const data = chart.data.datasets[0].data;

        // Create a worksheet from chart data
        const worksheetData = [];

        // Add header row
        worksheetData.push(["Candidate", "Value"]);

        // Add data rows from chart data
        for (let i = 0; i < labels.length; i++) {
            worksheetData.push([labels[i], data[i]]);
        }

        // Convert to worksheet
        const worksheet = XLSX.utils.aoa_to_sheet(worksheetData);

        // Create a new workbook and append the worksheet
        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, "Chart Data");

        // Generate the XLSX file and prompt download
        XLSX.writeFile(workbook, `${chartId}-data.xlsx`);
    }
</script>


@endsection
