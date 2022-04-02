

   <head>
    @include('admin.layouts.header')
    <style>
        a{text-decoration: none}
        /* .text-sm,th,td{color: #fff !important ;}
        .bg-white{color: black !important}
       
        a:active{color: red} */
        
    </style>
   </head>
   <body>
    <div class="container-scroller">
      {{-- navbar --}}
      @include('admin.layouts.navbar')
     
      <div class="row container pt-5 bg-contant">
        
        <div class="col-md-12 ">
          <div class="card bg-card mb-5">
            <div class="card-body">
              <div class="row">
                @if ($message = Session::get('done'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
                <div class="col-sm-4">
                  <h4 class="card-title">Foods</h4>
                </div>
                <div class="col-sm-4 text-right">
                  
                </div>
                <div class="col-sm-4 text-right">
                    <a href="{{ route('foods-create.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>New</a>
                </div>
              </div>
              
              
              <div class="table-responsive" style="color: #fff">
                <table class="table mb-5">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> Name </th>
                      <th> Email </th>
                      <th> Phone </th>
                      <th> Time </th>
                      <th> Date </th>
                      <th> Number Of Guests </th>
                    </tr>
                  </thead>
                  <tbody>
                  @if ($data)
                      @foreach ($data as $item)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td> {{ $item->email }} </td>
                        <td> {{ $item->phone }} </td>
                        <td> {{ $item->time }} </td>
                        <td> {{ $item->date }} </td>
                        <td> {{ $item->number_guests }} </td>
                    
                        </tr>
                      @endforeach
                  @endif
                
                  </tbody>
                </table>
               <div style="color: #fff !importan ">
                {{ $data->links() }}</div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
 
    </div>

      {{-- js_files --}}
    @include('admin.layouts.footer_script')
    <script>
      setTimeout(function() 
      {
        $('.alert').fadeOut('.5');
      }, 2000);
  </script>
