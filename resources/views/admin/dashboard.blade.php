<!DOCTYPE html>
<html lang="en">
@include('body.head')
@include('body.header')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('body.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Monthly Financial Report</h1>

                    <!-- Dashboard Summary -->
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <div class="card text-white bg-success mb-4 shadow">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 id="card_title" class="card-title">Total Income</h5>
                                        <h2 class="card-text">${{ number_format($inc_total, 2) }}</h2>
                                    </div>
                                    <i class="fas fa-dollar-sign fa-3x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-white bg-danger mb-4 shadow">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 id="card_title" class="card-title">Total Expenses</h5>
                                        <h2 class="card-text">${{ number_format($exp_total, 2) }}</h2>
                                    </div>
                                    <i class="fas fa-wallet fa-3x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-white bg-info mb-4 shadow">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 id="card_title" class="card-title">Net Balance</h5>
                                        <h2 class="card-text">${{ number_format($profit, 2) }}</h2>
                                    </div>
                                    <i class="fas fa-balance-scale fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Charts -->
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <h4 class="mb-3">Income Chart</h4>
                            <canvas id="incomeChart"></canvas>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="mb-3">Expense Chart</h4>
                            <canvas id="expenseChart"></canvas>
                        </div>
                    </div>
                    <!-- Recent Transactions -->
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <h4>Recent Income Transactions</h4>
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Date</th>
                                        <th>Category</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inc_summary as $income)
                                        <tr>
                                            <td>{{ \Carbon\Carbon::now()->toDateString() }}</td>
                                            <td>{{ $income['name'] }}</td>
                                            <td class="text-success">${{ number_format($income['amount'], 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <h4>Recent Expense Transactions</h4>
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Date</th>
                                        <th>Category</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exp_summary as $expense)
                                        <tr>
                                            <td>{{ \Carbon\Carbon::now()->toDateString() }}</td>
                                            <td>{{ $expense['name'] }}</td>
                                            <td class="text-danger">${{ number_format($expense['amount'], 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <form action="" method="POST">
                        @csrf
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('body.script')
    <script>
        // JavaScript to render charts using Chart.js
        const incomeChartCtx = document.getElementById('incomeChart').getContext('2d');
        const expenseChartCtx = document.getElementById('expenseChart').getContext('2d');

        const incomeChart = new Chart(incomeChartCtx, {
            type: 'bar',
            data: {
                labels: @json(array_keys($inc_summary)),
                datasets: [{
                    label: 'Income',
                    data: @json(array_column($inc_summary, 'amount')),
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const expenseChart = new Chart(expenseChartCtx, {
            type: 'bar',
            data: {
                labels: @json(array_keys($exp_summary)),
                datasets: [{
                    label: 'Expenses',
                    data: @json(array_column($exp_summary, 'amount')),
                    backgroundColor: 'rgba(255, 99, 132, 0.6)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <style>
        #card_title {
            color: white;
        }
    </style>
    <!-- Footer -->
    @include('body.footer')
    <!-- End of Footer -->
</body>

</html>