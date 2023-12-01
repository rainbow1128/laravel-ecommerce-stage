<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>E-commerce</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style type="text/css">
        
       .center 
       {
         margin: auto;
         width: 70%;
         text-align: center;
         padding: 30px;
       }

       table,th,td
       {
        margin-top: 20px;
         border: 1px solid grey;
       }
       
       .th_deg
       {
         font-size: 20px;
         padding: 30px;
         /* margin: 50px; */
         background: #C6866B;
       }

       .th {
        /* width: 200%; */
       }

       .img_deg 
       {
         height: 200px;
         /* width: 200px; */
       }

       .total_deg
       {
         font-size: 20px;
         padding: 40px;
       }

      </style>
   </head>
   <body style="background-color: ">
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         
         @if(session()->has('massage'))

         <div class="alert alert-success">
             <button type="button" class="close" data-dismiss="alert" 
             aria-hidden="true">X</button>

             {{session()->get('message')}}
         </div>
             
         @endif

      <div class="center">

        <table >

            <tr class="tr">

                <th class="th_deg"> title</th>
                <th class="th_deg"> quantity</th>
                <th class="th_deg">price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Actions</th>

            </tr>
            <?php $totalprice=0; ?>
          
            @foreach ($cart as $cart)
                
            <tr>
               <td>{{$cart->product_title}}</td>
               <td>{{$cart->quantity}}</td>
               <td>{{$cart->price}}CFA</td>
               <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
               <td><a class="btn btn-danger"
                 onclick="return confirm('Areyou sure to remove this product ?')" href="
                {{url('/remove_cart',$cart->id)}}">Remove</a></td>
            </tr>
        
            <?php $totalprice=$totalprice + $cart->price ?>

            @endforeach

        </table>
      <div>

        <h1 class="total_deg">Total Prix : {{$totalprice}}CFA</h1>

      </div>

      <div>
       <h1 style="font-size: 25px; padding-bottom: 15px";>
        Procéder à la commande </h1>

      <a href="{{url('cash_order')}}" class="btn btn-danger">Paiement à la livraison</a>

      <a href="" class="btn btn-danger">Payer par carte</a>

      </div>


      </div>


      <!-- footer start -->
      {{-- @include('home.footer') --}}
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/"></a><br>
          <a href="https://themewagon.com/" target="_blank"></a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>