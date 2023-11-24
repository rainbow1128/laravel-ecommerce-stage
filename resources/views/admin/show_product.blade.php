<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')

  <style type="text/css">

   .center {
    margin: auto;
    width: 50%;
    border: 2px solid white;
    text-align: center;
    margin-top: 40px;
   }

   .font_size {
    text-align: center;
    font-size: 40px;
    padding-top: 20px;
   }

   .img_size{
     width: 150px;
     height: 150px;
   }

   .th_color{
    background-color: skyblue;
   }

   .th_deg {
    padding: 30px;
   }

</style>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('admin.Sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column" style="background-color: black">
      <div id="content">
        <!-- TopBar -->
       @include('admin.header')
        <!-- Topbar -->

        <div class="main-panel">
         <div class="content-wrapper">

            @if(session()->has('massage'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert
                " aria-hidden="true">X</button>

                {{session()->get('message')}}
            </div>
                
            @endif

            <h2 class="font_size">All Product</h2>
     
            <table class="center">
                <tr class="th_color">
                    <th class="th_deg">Product title</th>
                    <th class="th_deg">Description</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Catagory</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Discount price</th>
                    <th class="th_deg">Product Image</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Edite</th>
                </tr>

                  @foreach($product as $product)

                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->catagory}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$product->image}}" alt="">
                    </td>

                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you Sure to Delete this')" 
                        href="{{url('delete_product',$product->id)}}">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="
                        {{url('update_product',$product->id)}}">Edite</a>
                    </td>

                </tr>

                @endforeach

            </table>

            </div>
        </div>
       
      </div>
     
    </div>
  </div>

  
  @include('admin.script')
</body>

</html>