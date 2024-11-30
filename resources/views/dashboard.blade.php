@extends('layouts.user_type.auth')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

<!-- Pie Charts Section -->
<div class="row mt-4">
    @foreach($datas as $index => $data)
        <div class="col-lg-4 my-3">
            <div class="card z-index-2">
                <div class="card-body">
                    <h6 class="mb-3">Total Vote Chart {{ $data->name }}</h6>
                    <canvas id="pieChart{{ $index+1 }}" height="200"></canvas>
                    <!-- Export Data Table Button -->
                    <div class="d-flex justify-content-center mt-3">
                        <button type="button" class="btn btn-dark btn-sm" onclick="exportTableData('pieChart{{ $index+1 }}')">Export as Table</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    // document.addEventListener("DOMContentLoaded", function () {
    //     const options = {
    //         responsive: true,
    //         plugins: {
    //             legend: { display: true, position: 'top' },
    //             tooltip: { enabled: true }
    //         }
    //     };

    //     const dataRoles = @json($datas);
    //     const dataSets = dataRoles.map((item) => ({
    //         labels: [item.name],
    //         data: [item.max_vote],
    //     }));

    //     const dataLogs = @json($logs);
    //     const dataSets = dataLogs.map((item) => ({
    //         labels: [item.name],
    //         data: [item.max_vote],
    //     }));
        

    //     const dataSets = [
    //         { labels: ['Option A', 'Option B', 'Option C'], data: [30, 50, 20] },
    //         { labels: ['Option A', 'Option B', 'Option C'], data: [40, 35, 25] },
    //         { labels: ['Option A', 'Option B', 'Option C'], data: [55, 30, 15] }
    //     ];

    //     const dataSets = [

    //     ]

    //     dataSets.forEach((dataSet, index) => {
    //         const ctx = document.getElementById(`pieChart${index + 1}`).getContext('2d');
            
    //         // Create gradient for each dataset
    //         const gradient1 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient1.addColorStop(0, '#7928ca');
    //         gradient1.addColorStop(1, '#ff0080');

    //         const gradient2 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient2.addColorStop(0, '#17ad37');
    //         gradient2.addColorStop(1, '#98ec2d');

    //         const gradient3 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient3.addColorStop(0, '#2152ff');
    //         gradient3.addColorStop(1, '#21d4fd');

    //         const gradient4 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient4.addColorStop(0, '#ea0606'); // Bright Red
    //         gradient4.addColorStop(1, '#ff667c');

    //         const gradient5 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient5.addColorStop(0, '#ffcc00'); // Bright Yellow
    //         gradient5.addColorStop(1, '#ffaa00');

    //         const gradient6 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient6.addColorStop(0, '#00ff00'); // Bright Green
    //         gradient6.addColorStop(1, '#32cd32');

    //         const gradient7 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient7.addColorStop(0, '#00ffff'); // Cyan
    //         gradient7.addColorStop(1, '#1e90ff');

    //         const gradient8 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient8.addColorStop(0, '#ff00ff'); // Magenta
    //         gradient8.addColorStop(1, '#ff1493');

    //         const gradient9 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient9.addColorStop(0, '#0000ff'); // Bright Blue
    //         gradient9.addColorStop(1, '#4169e1');

    //         const gradient10 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient10.addColorStop(0, '#f53939'); // Bright Orange
    //         gradient10.addColorStop(1, '#fbcf33');

    //         const gradient11 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient11.addColorStop(0, '#ff1493'); // Bright Pink
    //         gradient11.addColorStop(1, '#ff69b4');

    //         const gradient12 = ctx.createLinearGradient(0, 0, 0, 200);
    //         gradient12.addColorStop(0, '#00ff7f'); // Spring Green
    //         gradient12.addColorStop(1, '#7fff00');
            
    //         const gradient13 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient14 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient15 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient16 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient17 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient18 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient19 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient20 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient21 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient22 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient23 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient24 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient25 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient26 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient27 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient28 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient29 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient30 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient31 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient32 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient33 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient34 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient35 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient36 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient37 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient38 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient39 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient40 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient41 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient42 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient43 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient44 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient45 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient46 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient47 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient48 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient49 = ctx.createLinearGradient(0, 0, 0, 200);
    //         const gradient50 = ctx.createLinearGradient(0, 0, 0, 200);

    //         new Chart(ctx, {
    //             type: 'pie',
    //             data: {
    //                 labels: dataSet.labels,
    //                 datasets: [{
    //                     data: dataSet.data,
    //                     backgroundColor: [
    //                       gradient1, gradient2, gradient3, gradient4, gradient5, 
    //                       gradient6, gradient7, gradient8, gradient9, gradient10, 
    //                       gradient11, gradient12, gradient13, gradient14, gradient15, 
    //                       gradient16, gradient17, gradient18, gradient19, gradient20,
    //                       gradient21, gradient22, gradient23, gradient24, gradient25, 
    //                       gradient26, gradient27, gradient28, gradient29, gradient30,
    //                       gradient31, gradient32, gradient33, gradient34, gradient35, 
    //                       gradient36, gradient37, gradient38, gradient39, gradient40,
    //                       gradient41, gradient42, gradient43, gradient44, gradient45, 
    //                       gradient46, gradient47, gradient48, gradient49, gradient50,
    //                     ],
    //                     borderColor: '#ffffff',
    //                     borderWidth: 3
    //                 }]
    //             },
    //             options: options
    //         });
    //     });
    // });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const options = {
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

        // console.log("$candidates", @json($candidates));


        // Iterasi setiap role untuk membuat dataset
        roles.forEach((role, index) => {
            console.log("candidates", candidates);
            console.log("role", role);

            const roleCandidates = candidates.filter(candidate => candidate.role === role.name);
            console.log("roleCandidates", roleCandidates);

            // Labels dan data untuk chart
            const labels = roleCandidates.map(candidate => candidate.name);
            const dataHaha = roleCandidates.map(candidate => {
                // Hitung jumlah log untuk kandidat ini
                return logs.filter(log => log.candidate_id === candidate.id).length;
            });

            // Setup warna untuk chart
            const ctx = document.getElementById(`pieChart${index + 1}`).getContext("2d");
            const colors = [
                "#7928ca", "#17ad37", "#2152ff", "#ea0606", "#ffcc00", 
                "#00ff7f", "#00ffff", "#ff00ff", "#0000ff", "#f53939"
            ];
            const backgroundColors = labels.map((_, i) => colors[i % colors.length]);

            // Buat chart
            new Chart(ctx, {
                type: "pie",
                data: {
                    labels: labels,
                    datasets: [
                        {
                            data: dataHaha,
                            backgroundColor: backgroundColors,
                            borderColor: "#ffffff",
                            borderWidth: 2,
                        },
                    ],
                },
                options: {
                    ...options,
                    plugins: {
                        ...options.plugins,
                        title: {
                            display: true,
                            text: `Votes for Role: ${role.name}`,
                        },
                    },
                },
            });
        });
    });
</script>

<script>
    // Function to extract chart data and export as a table (CSV)
    function exportTableData(chartId) {
        const chart = Chart.getChart(chartId);
        const labels = chart.data.labels;
        const data = chart.data.datasets[0].data;
        
        // Create table header
        let table = '<table border="1"><thead><tr><th>Label</th><th>Value</th></tr></thead><tbody>';
        
        // Add rows from chart data
        for (let i = 0; i < labels.length; i++) {
            table += `<tr><td>${labels[i]}</td><td>${data[i]}</td></tr>`;
        }

        // Close table tag
        table += '</tbody></table>';
        
        // Call function to export the table as CSV
        exportToCSV(table, chartId);
    }

    // Function to export HTML table to CSV
    function exportToCSV(table, chartId) {
        // Create a blob from the table HTML
        const blob = new Blob([table], { type: 'text/csv' });
        
        // Create a link element to trigger the download
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = `${chartId}-data.csv`;  // Filename for CSV
        link.click();
    }
</script>

@endsection
