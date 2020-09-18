@extends('website.backend.layout.main')
@section('content')
 <br>
 <div class="panel panel-default" style="color: white; font-size: 14px; margin-top: 20px; padding-top: 30px " >
  <div class="panel-heading" style="background-color: pink; font-size: 16px; color: white"><b>Contact Us</b></div>
  <div class="panel-body"  style="background: lightblue">
    <div class="form-group">
      <form>
        <label >Name:</label>
        <input class="form-control" type="text" name="full name">
        <br>
        <label >Email:</label>
        <input class="form-control" type="text" name="Email">
        <label >Message</label>
        <textarea class="form-control"></textarea>
      </form>
      <br>
      <button class="btn btn-success btn-lg" style="float: center">Submit</button>
    </div>
  </div>
</div>

@endsection