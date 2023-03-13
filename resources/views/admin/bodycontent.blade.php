<div class="main-panel">
    <div class="content-wrapper">
      
    <div class="container">

<div class="row my-3">
    <div class="col-md-4">
        <div class="card text-center card-info">
            <div class="card-block">
                <h4 class="card-title">Total Products</h4>
                <h2><i class="fa fa-home fa-3x"></i></h2>
            </div>
            <div class="row p-2 no-gutters">
            <div class="col-12">
                <div class="card card-block text-info rounded-0 border-right-0 border-top-o border-bottom-0">
                    <h3 style="color:white">{{$total_product}}</h3>
                </div>
            </div>
</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center card-info">
            <div class="card-block">
                <h4 class="card-title">Total Orders</h4>
                <h2><i class="bi bi-person"></i></h2>
            </div>
            <div class="row p-2 no-gutters">
                <div class="col-6">
                    <div class="card card-block text-info rounded-0 border-left-0 border-top-o border-bottom-0">
                        <span class="small text-uppercase">Orders Pending</span>
                        <h3 style="color:white">{{$order_pending}}</h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-block text-info rounded-0 border-right-0 border-top-o border-bottom-0">
                        <span class="small text-uppercase">Orders Delivered</span>
                        <h3 style="color:white">{{$order_delivered}}</h3>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center card-info">
            <div class="card-block">
                <h4 class="card-title">Total Customers</h4>
                <h2><i class="bi bi-person"></i></h2>
            </div>
            <div class="row p-2 no-gutters">
                <div class="col-12">
                    <div class="card card-block text-info rounded-0 border-left-0 border-top-o border-bottom-0">
                        <h3 style="color:white">{{$total_customers}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>
<canvas id="myChart" style="width:100%;max-width:700px;height:500px;margin-top:100px;margin-bottom:70px;"></canvas>

<script>
    
var now = new Date();
var daysOfYear = [];
for (var d = new Date(2023, 3, 1); d <= now; d.setDate(d.getDate() + 1)) {
    daysOfYear.push(new Date(d));
}

new Chart("myChart", {
  type: "line",
  data: {
    labels: daysOfYear,
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false,
      label:"Total Products"
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false,
      label:"Order Pending"
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false,
      label:"Order Delivered"
    }]
  },
  options: {
    legend: {display: true},
  }
});
</script>
</div>

    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © REAL 2023</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
