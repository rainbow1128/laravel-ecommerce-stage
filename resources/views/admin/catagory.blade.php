<!DOCTYPE html>
<html lang="en">
<head>
      @include('admin.css')

      <style type="text/css">
    .div_center {
        text-align: center;
        padding-top: 40px;
    }
    .h2_font {
        font-size: 40px;
        padding-bottom: 40px;
    }

    .input_color{
        color: black;
    }

    </style>

</head>
    <body>
        <div id="wrapper">
          <!-- Sidebar -->
          @include('admin.Sidebar')
          <!-- Sidebar -->
          <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
              <!-- TopBar -->
             @include('admin.header')
              <!-- Topbar -->
      
              
                <div class="main-panel">
                  <div class="content-wrapper">
                    @if (session()->has('massage'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert
                        " aria-hidden="true">X</button>
                        {{session()->get('message')}}
                    </div>
                        
                    @endif
                      <div class="div_center">
                          <h1 class="h2_font">add catagory</h1>

                          <form action="{{url('/add_catagory')}}" method="POST">
                                 @csrf

                            <input class="input_color" type="text" name="catagory"
                            placeholder="Write catagory name">

                            <input class="btn btn-primary" type="submit" name="submit"
                            value="Add Catagory">
                          </form>
                      </div>
                  </div>
                </div>
            
                    <!-- Container Fluid-->
                    <!---Container Fluid-->
        @include('admin.script')
      
</body>
</html>