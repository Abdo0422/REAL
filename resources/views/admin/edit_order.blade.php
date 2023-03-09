<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  <style>
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h2_style {
            font-size: 40px;
            padding-bottom: 40px;
        }

        #input_color {
            color: black;
        }
        label{
          display:inline-block;
          width:200px;
          padding-bottom: 30px;
          text-align: left;
          left:0;
                }
        #hidden{
          display:none;
        }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            @if (session()->has('message'))
                    <div class="alert alert-info" id="hide_now">
                        <button type="button" style="font-weight: bold;
                        color: #000;float:right;"
                            onclick="hide()">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif

            <div class="div_center">

            <h2 class="h2_style">Edit Product</h2>
            <form enctype="multipart/form-data" action="{{url('/edit_order_confirm' ,$order->id)}}" method="POST" >
            @csrf
          <div>
            <label>Statue:</label>
                <select id="input_color" name="status"  value="{{ $order->status }}" required="">
                    <option value="Pending">Pending</option>
                    <option value="Process">Process</option>
                    <option value="Closed">Closed</option>
                </select>
         </div>

              <div>
                <input type="submit" class="btn btn-primary" value="Update">
                </div>
      </form>
            </div>
        </div>
        </div>
        <script>
            function hide() {
                document.getElementById('hide_now').style.display = 'none';
            }
        </script>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>
