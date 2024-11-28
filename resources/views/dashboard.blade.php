@extends('layouts.user_type.auth')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->

  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Candidates</p>
                <h5 class="font-weight-bolder mb-0">
                  12
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Voters</p>
                <h5 class="font-weight-bolder mb-0">
                  1
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Voted</p>
                <h5 class="font-weight-bolder mb-0">
                  1
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-check-bold text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Unvoted</p>
                <h5 class="font-weight-bolder mb-0">
                  0
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-fat-remove text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-4">
        <div class="card z-index-2">
          <div class="card-body">
            <h6 class="mb-3">Total Vote Chart 1</h6>
            <canvas id="pieChart1" height="200"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card z-index-2">
          <div class="card-body">
            <h6 class="mb-3">Total Vote Chart 2</h6>
            <canvas id="pieChart2" height="200"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card z-index-2">
          <div class="card-body">
             <h6 class="mb-3">Total Vote Chart 3</h6>
                <canvas id="pieChart3" height="200"></canvas>
          </div>
        </div>
    </div>
  </div>

@endsection
@push('dashboard')
  <script>
      document.addEventListener("DOMContentLoaded", function () {
        // ====== Total Vote Chart 1 ======
        const ctx1 = document.getElementById('pieChart1').getContext('2d');
        const data1 = {
          labels: ['Option A', 'Option B', 'Option C'],
          datasets: [{
            label: 'Total Votes Chart 1',
            data: [30, 50, 20], // Nilai untuk Chart 1
            backgroundColor: [
              'rgba(255, 99, 132, 0.7)',
              'rgba(54, 162, 235, 0.7)',
              'rgba(255, 206, 86, 0.7)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
          }]
        };
        const options1 = {
          responsive: true,
          plugins: {
            legend: { display: true, position: 'top' },
            tooltip: { enabled: true }
          }
        };
        new Chart(ctx1, { type: 'pie', data: data1, options: options1 });

        // ====== Total Vote Chart 2 ======
        const ctx2 = document.getElementById('pieChart2').getContext('2d');
        const data2 = {
          labels: ['Option A', 'Option B', 'Option C'],
          datasets: [{
            label: 'Total Votes Chart 2',
            data: [40, 35, 25],
            backgroundColor: [
              'rgba(75, 192, 192, 0.7)',
              'rgba(153, 102, 255, 0.7)',
              'rgba(255, 159, 64, 0.7)'
            ],
            borderColor: [
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        };
        const options2 = {
          responsive: true,
          plugins: {
            legend: { display: true, position: 'top' },
            tooltip: { enabled: true }
          }
        };
        new Chart(ctx2, { type: 'pie', data: data2, options: options2 });

        // ====== Total Vote Chart 3 ======
        const ctx3 = document.getElementById('pieChart3').getContext('2d');
        const data3 = {
          labels: ['Option A', 'Option B', 'Option C'],
          datasets: [{
            label: 'Total Votes Chart 3',
            data: [55, 30, 15],
            backgroundColor: [
              'rgba(54, 162, 235, 0.7)',
              'rgba(255, 99, 132, 0.7)',
              'rgba(255, 159, 64, 0.7)'
            ],
            borderColor: [
              'rgba(54, 162, 235, 1)',
              'rgba(255, 99, 132, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        };
        const options3 = {
          responsive: true,
          plugins: {
            legend: { display: true, position: 'top' },
            tooltip: { enabled: true }
          }
        };
        new Chart(ctx3, { type: 'pie', data: data3, options: options3 });
      });
  </script>
@endpush


