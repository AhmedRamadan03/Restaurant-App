
 
@include('admin.layouts.header')
<style>
  .bg-card{
      background: #9f9f9fa8;
  }
  th{color: #fff !important ;}
  .form-control,.form-control:focus{
    color: #fff
  }
</style>

  <div class="container-scroller">
    {{-- navbar --}}
    @include('admin.layouts.navbar')
   
    <div class="row container pt-5 bg-contant">
      
      <div class="col-md-12 ">
        
        <div class="card bg-card">
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
                <h4 class="badge bg-secondary">New User</h4>
              </div>
              @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            </div>
            <div>
              <form action="{{ url('users/store')}}" method="post" enctype="multipart/form-data">
               @csrf
                <div class="row pt-3">
                  <div class="col-md-6">
                    <label for="">name *</label>
                    <input type="text" name="name" class="form-control" placeholder="enter your name..." required>
                  </div>
                  <div class="col-md-6">
                    <label for="">email *</label>
                    <input type="email" name="email" class="form-control" placeholder="enter your eamin..." required autocomplete="off">
                  </div>
                </div>
                <div class="row pt-3">
                  <div class="col-md-6">
                    <label for="">Password * </label>
                    <input type="password" name="password" class="form-control" placeholder="enter your password"  required>
                  </div>
                  <div class="col-md-6">
                    <label for="">User Type * </label>

                      {!! Form::select("type_user", $type_user, request()->type_user, ["class"=>"form-select form-control", "placeholder"=>"Select User Type" ,'required']) !!}
                    </div>
                 </div>
                  {{-- <div class="col-md-6">
                    <label for="">Confirm Password *</label>
                    <input type="password" name="confirm_password" placeholder="confirm password" class="form-control" id="">
                  </div> --}}
                </div>
                <div class="row pt-3">
                   
                <div class="row pt-3">
                  <div class="col-md-12">
                    <input type="submit" value="Save" class="btn btn-primary">
                  </div>
                </div>
              </form>
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
        $('.alert-danger').fadeOut('.5');
      }, 2000);

      setTimeout(function() 
      {
        $('.alert-success').fadeOut('.5');
      }, 2000);
  </script>