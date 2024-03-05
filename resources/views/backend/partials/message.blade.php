@if($message = Session::get('success'))
  <div class="alert alert-success" style="background: #5cb85c">
    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>{{ $message }}</strong>
  </div>
@endif