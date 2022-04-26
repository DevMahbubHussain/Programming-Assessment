{{-- success message --}}
@if(session()->get('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session()->get('success') }}</strong>
  </div>
@endif

@if(session()->get('success-login'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session()->get('success-login') }}</strong>
  </div>
@endif


{{-- error message --}}
@if(session()->get('error'))
<div class="text-danger"><h5>{{ session()->get('error') }}</h5></div>
@endif


