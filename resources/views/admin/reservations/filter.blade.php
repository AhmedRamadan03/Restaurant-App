<form action="" method="get">
   @csrf
   <div class="row">
    <div class="col-md-6 col-sm-12 pt-2">
        <label for="" class="text-dark pb-2">From Date</label>
        {!! Form::date("start_date", request()->start_date, ["class"=>"form-control"]) !!}
    </div>
    <div class="col-md-6 col-sm-12 pt-2">
        <label for="" class="text-dark pb-2">To Date</label>
        {!! Form::date("end_date", request()->end_date, ["class"=>"form-control"]) !!}
    </div>
    <div class="col-md-2 col-sm-12 pt-2">
        <div class="row">
            <div class="col-md-6 pt-2 ">
                <input type="submit" value="submit" class="btn btn-info">
            </div>
            <div class="col-md-6 pt-2">
                <input type="reset" value="reset" class="btn btn-info">            
            </div>
        </div>
    </div>
</div>
</form>