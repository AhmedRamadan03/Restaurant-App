
 
    <head>
     @include('admin.layouts.header')
     <style>
         
         
     </style>
    </head>
   <body>
    <div class="container-scroller">
      {{-- navbar --}}
      @include('admin.layouts.navbar')
     
      <div class="row container pt-5 bg-contant">
        @if ($message = Session::get('done'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
        <div class="col-md-12 ">
          <div class="card bg-card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <h4 class="badge bg-secondary">Users</h4>
                </div>
                <div class="col-sm-4">
                  
                </div>
                <div class="col-sm-4 text-right">
                  <a href="{{ url('users/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> New</a>
                </div>
               
                <div class="col-sm-8 text-right">
                 
                </div>
              </div>
              
              
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> Name </th>
                      <th> Email </th>
                      <th> Actions </th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($users as $user)
                   <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$user->name}}</td>
                    <td> {{ $user->email }} </td>
                    <td>
                      <a href="{{ route('users-destroy.deleteUser',$user->id) }}" class="btn btn-danger"title="حذف">  <i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                   @endforeach
                  </tbody>
                </table>
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
        $('.alert-success').fadeOut('.5');
      }, 2000);
    </script>
   </body>
 </html>