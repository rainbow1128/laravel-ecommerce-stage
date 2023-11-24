<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
  
  <style type="text/css">
    .div_center {
        text-align: center;
        padding-top: 40px;
    }

    .font_size {
        font-size: 40px;
        padding-bottom: 40px;
    }

    .text_color{
      color: black;
      padding-bottom: 20px;
    }

   label{
    display: inline-block;
    width: 200px;
   }
   .div_design {
     padding-bottom: 15px;
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
                        <button type="button" class="close" data-dismiss="alert"
                         aria-hidden="true">X</button>

                        {{session()->get('message')}}
                    </div>
                        
                    @endif
            
              <div class="div_center">
                <h1 class="font_size">Add Product</h1>

              <form action="{{url('/add_product')}}" method="POST"
               enctype="multipart/form-data">
               
               @csrf

                <div class="div_design">
                <label>Product Title</label>
                <input class="text_color" type="text" name="title"
                placeholder="write a title" required="">
                </div>

                <div class="div_design">
                  <label>Product Description :</label>
                  <input class="text_color" type="text" name="description"
                  placeholder="write a description" required="">
                  </div>

                    <div class="div_design">
                      <label>Product Price</label>
                      <input class="text_color" type="number" name="price"
                      placeholder="write a priice" required="">
                      </div>

                      
                      <div class="div_design">
                        <label>Discount_price</label>
                        <input class="text_color" type="number" name="discount_price"
                        placeholder="write a price" required="">
                        </div>

                      <div class="div_design">
                        <label>Product Quantite :</label>
                        <input class="text_color" type="number" min="0" name="quantity"
                        placeholder="write a quantite" required="">
                        </div>

                      <div class="div_design">
                        <label>Product Catagory</label>
                        <select class="text_color" name="catagory" required="">
                         <option value="" selected="">Add a catagory</option>
                          
                         @foreach ($catagory as $catagory)

                         <option value="{{$catagory->catagory_name}}">

                          {{$catagory->catagory_name}}</option>
                           
                         @endforeach
                        </select>
                        </div>

                        <div class="div_design">
                          <label>Product Image here :</label>
                          <input type="file" name="image" required="">
                          </div>

                          <div class="div_design">
                            <input type="submit" value="Add Product" class="btn btn-primary">
                            </div>
                          </form>
              </div>
            </div>
        </div>
       
      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  @include('admin.script')
</body>

</html>