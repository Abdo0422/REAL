<div class="main-panel">
    <div class="content-wrapper">

    <div class="container">
    <div class="row my-3" >
    <div class="col-md-4">
        <div class="card text-center card-info"style="margin-top:-40px">
            <div class="card-block">
                <h4 class="card-title">Total Products</h4>
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
        <div class="card text-center card-info"style="margin-top:-40px">
            <div class="card-block">
                <h4 class="card-title">Total Orders</h4>
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
        <div class="card text-center card-info"style="margin-top:-40px">
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

<h1 style="font-size:30px;font-family:ariel;margin-top:50px">Changes on Orders and Products:</h1>
<canvas id="myChart" style="max-width:900px;height:700px;margin-top:20px;margin-bottom:70px;margin-left:10px"></canvas>

<script>

var now = new Date();
var daysOfYear = [];
for (var d = new Date(2023, 3, 10); d <= now; d.setDate(d.getDate() + 1)) {
    daysOfYear.push(new Date(d));
}

new Chart("myChart", {
  type: "line",
  data: {
    labels: daysOfYear,
    datasets: [{
      data: [0,{{$total_product}},5,10,15,20,25,30,35,40,45,50],
      borderColor: "red",
      fill: false,
      label:"Total Products"
    }, {
      data: [0,{{$order_pending}},5,10,15,20,25,30,35,40,45,50],
      borderColor: "green",
      fill: false,
      label:"Order Pending"
    }, {
      data: [0,{{$order_delivered}},5,10,15,20,25,30,35,40,45,50],
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
    <footer>
<div class="footer">

<div class="row">

</div>

<div class="row">
<p style="text-align:center;"> Copyright © 2023 REAL - All rights reserved </p>
</div>
</div>
</footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
