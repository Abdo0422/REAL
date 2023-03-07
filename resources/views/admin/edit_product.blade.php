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
            <form enctype="multipart/form-data" action="{{url('/edit_product_confirm' ,$pro->id)}}" method="POST" >
            @csrf
          <div>
            <label>Product Title:</label>                
                <input id="input_color"name="title" type="text" placeholder="Write a Title" value="{{ $pro->title }}" required="">
         </div>       
<div>
            <label>Product Description:</label>    
                <input id="input_color" name="description" type="text" placeholder="Write a Description" value="{{ $pro->description }}" required=""> 
</div>
<div>
            <label>Product Price:</label> 
                <input id="input_color" name="price" type="number" placeholder="Write a Price" value="{{ $pro->price }}" required="">
</div>
<div>
            <label>Product Quantity:</label> 
                <input id="input_color" name="quantity"type="number" min="0" placeholder="Write a Quantity" value="{{ $pro->quantity }}" required="">
</div>
<div>
            <label>Product Category:</label> 
                <select id="input_color" name="category" value="Choose" required="">
                 
                  @foreach ($data as $data)
                  <option value="{{ $data->category_name }}">{{ $data->category_name }}</option>
                  @endforeach
                  </select> 
              </div>    
            <div>      
            <label>Current Product Image:</label>  
<img style="margin:auto;" height=100 width=100 src="public/product/{{$pro->image}}">
                 
              </div> 
              <div>      
            <label>Change Product Image:</label>  
<input type="file" name="image">                 
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
