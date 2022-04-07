

@if ($message = Session::get('done'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Reservation Done Success</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
@endif

<div class="contact-form">
    <form id="contact" action="{{ route('eservations-store.store') }}" method="post">
       @csrf
      <div class="row">
        <div class="col-lg-12">
            <h4>Table Reservation</h4>
        </div>
        <div class="col-lg-6 col-sm-12">
          <fieldset>
            <input name="name" type="text" id="name" placeholder="Your Name*" required="">
          </fieldset>
        </div>
        <div class="col-lg-6 col-sm-12">
          <fieldset>
          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
        </fieldset>
        </div>
        <div class="col-lg-6 col-sm-12">
          <fieldset>
            <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
          </fieldset>
        </div>
        <div class="col-md-6 col-sm-12">
          <fieldset>
            <input type="number" name="number_guests" class="form-control" id="" required>
          </fieldset>
        </div>
        <div class="col-lg-6">
            <div id="filterDate2">    
              {{-- <div class="input-group date" data-date-format="dd/mm/yyyy"> --}}
                <input  name="date" id="" type="date" class="form-control" required placeholder="dd/mm/yyyy">
                {{-- <div class="input-group-addon" >
                  <span class="glyphicon glyphicon-th"></span>
                </div> --}}
              {{-- </div> --}}
            </div>   
        </div>
        <div class="col-md-6 col-sm-12">
          <fieldset>
            <input type="time" name="time" class="form-control" id="" required>
          </fieldset>
        </div>
        <div class="col-lg-12">
          <fieldset>
            <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
          </fieldset>
        </div>
        <div class="col-lg-12">
          <fieldset>
            <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
          </fieldset>
        </div>
      </div>
    </form>
</div>

