
 
@include('admin.layouts.header')
<style>
  
</style>

  <div class="container-scroller">
    {{-- navbar --}}
    @include('admin.layouts.navbar')
   
    <div class="row container pt-5 bg-contant">
      
      <div class="col-md-12 ">
        <div class="card bg-card mb-5">
          <div class="card-body">
            <div class="row">
              @if ($message = Session::get('edit'))
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
              <form action="{{ route('foods-update.update',$item->id) }}" method="post" enctype="multipart/form-data">
               @csrf
              
                <div class="row pt-3">
                  <div class="col-md-6">
                    <label for="">name *</label>
                    <input type="text" name="name" class="form-control" value="{{ $item->name }}" placeholder="enter food name..." required>
                  </div>
                  <div class="col-md-6">
                    <label for="">price *</label>
                    <input type="number" name="price" class="form-control" value="{{ $item->price }}" placeholder="enter food price..." required>
                  </div>
                </div>
                <div class="row pt-3">
                  <div class="col-md-3">
                    <label for="">image *</label>
                    <input type="file" name="image" value="{{ $item->image }}" class="form-control"  >
                  </div>
                  <div class="col-md-3">
                    <img src="{{ $item->image_path }}">
                  </div>

                  <div class="col-md-6">
                    <label for="">description *</label>
                    <textarea class="form-control" rows="10" cols="10" name="description" id=""  placeholder="enter yor description...">
                        {{ $item->description }}
                    </textarea>
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