
 
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
                <h4 class="card-title">Foods</h4>
              </div>
              <div class="col-sm-4 text-right">
                
              </div>
              <div class="col-sm-4 text-right">
                  {{-- <a href="{{ url('foods/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>New</a> --}}
              </div>
            </div>
            <div>
              <form action="{{ route('foods-store.store') }}" method="post" enctype="multipart/form-data">
               @csrf
                <div class="row pt-3">
                  <div class="col-md-6">
                    <label for="">name *</label>
                    <input type="text" name="name" class="form-control" placeholder="enter food name..." required>
                  </div>
                  <div class="col-md-6">
                    <label for="">price *</label>
                    <input type="text" name="price" class="form-control" placeholder="enter food price..." required>
                  </div>
                </div>
                <div class="row pt-3">
                  <div class="col-md-4">
                    <label for="">image *</label>
                    <input type="file" name="image" class="form-control"  required>
                  </div>
                  <div class="col-md-8">
                    <label for="">description *</label>
                    <textarea class="form-control" name="description" id=""  placeholder="enter yor description..."></textarea>
                  </div>
                </div>
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
        $('.alert').fadeOut('.5');
      }, 2000);
  </script>