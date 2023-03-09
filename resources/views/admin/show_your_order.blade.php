<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
  table {
            margin: auto;
            width: 100%;
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
            background-color: white;
            color: black;
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
            @if (session()->has('message0'))
                    <div class="alert alert-danger" id="hide_now">
                        <button type="button"
                            style="font-weight: bold;
                        color: #000;float:right;"
                            onclick="hide()">x</button>
                        {{ session()->get('message0') }}
                    </div>
                @endif
            <table>
                    <thead>
                        <tr>
                        <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                           <th>Product name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($search as $search)
                        <tbody>
                            <tr>
                                <td>{{ $search->id }}</td>
                                <td>{{ $search->name }}</td>
                                <td>{{ $search->email }}</td>
                                <td>{{ $search->product_ame }}</td>
                                 <td>{{ $search->price }}</td>
                               <td>{{ $search->quantity }}</td>
                               <td>
                               <a class="btn btn-info" href="{{ url('/edit_product', $pro->id) }}">Edit</a>
                               <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{ url('/delete_product', $pro->id) }}">Delete</a>
                               </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>

</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>
