<!DOCTYPE html>
<html lang="en">
  <head>
    <head>
        <!-- Required meta tags -->
        @include('admin.css')
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

            table {
                margin: auto;
                width: 50%;
                text-align: center;
                border-collapse: collapse;
                overflow: hidden;
                margin-top: 50px;
                box-shadow: 0 0 20px;
                rgba(0, 0, 0, 0.1);
            }

            th,
            td {
                padding: 15px;
                background-color: rgba(255, 255, 255, 0.2);
                color: #fff;
            }

            th {
                text-align: left;
            }

            thead {
                th {
                    background-color: #55608f;
                }
            }

            tbody {
                tr {
                    &:hover {
                        background-color: rgba(255, 255, 255, 0.3);
                    }
                }

                td {
                    position: relative;

                    &:hover {
                        &:before {
                            content: "";
                            position: absolute;
                            left: 0;
                            right: 0;
                            top: -9999px;
                            bottom: -9999px;
                            background-color: rgba(255, 255, 255, 0.2);
                            z-index: -1;
                        }
                    }
                }
            }
        </style>
    </head>
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
                    <div class="alert alert-success" id="hide_now">
                        <button type="button" style="font-weight: bold;
                        color: #000;float:right;"
                            onclick="hide()">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if (session()->has('message0'))
                    <div class="alert alert-danger" id="hide_now">
                        <button type="button"
                            style="font-weight: bold;
                        color: #000;float:right;"
                            onclick="hide()">x</button>
                        {{ session()->get('message0') }}
                    </div>
                @endif
                <div class="div_center">
                    <h2 class="h2_style">Add Product</h2>
                    <form action="{{ url('/add_product') }}" method="POST">
                        @csrf
                        <input id="input_color" name="product" type="text" placeholder="Write product name...">
                        <input type="submit" class="btn btn-primary" value="Add Product">
                    </form>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Category name</th>
                            <th>Category name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($data as $data)
                        <tbody>
                            <tr>
                                <td>{{ $data->title }}</td>
                                
                                <td><a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{ url('/delete_product', $data->id) }}">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>

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
