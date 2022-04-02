<head>
    @include('admin.layouts.header')
     @yield('css')
   </head>
   <body >

    <div class="container-scroller">
      {{-- navbar --}}
      @include('admin.layouts.navbar')
     
      <div class="row container pt-5 bg-contant">
        
        <div class="col-md-12 ">
          <div class="card bg-card mb-5">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <h4 class="card-title">Dashboard</h4>
                </div>
                <div class="col-sm-4 text-right">
                  
                </div>
                <div class="col-sm-4 text-right">
                    {{-- <a href="{{ url('foods/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>New</a> --}}
                </div>
              </div>
              <div>
               
              </div>
            </div>
          </div>
        </div>
      
      </div>
  
    </div>

     <!-- container-scroller -->
     

    {{-- js_files --}}
   @include('admin.layouts.footer_script')
   </body>
 </html>