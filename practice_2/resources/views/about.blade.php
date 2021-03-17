@extends('layouts.app')

@section('title','About')
    
@section('content')
    <div class="container p-5">
        <div class="row justify-content-center">
          <div class="col-md-6">

        <form class="needs-validation">
          <input id="name" class="form-control" type="text" placeholder="Name" required><br> <br>
          <input id="class" class="form-control" type="text" placeholder="Class"><br> <br>
          <input id="roll" class="form-control" type="text" placeholder="Roll"><br><br>
          <label >Birth Date</label>
          <input  id="birth_date" type="date" class="form-control " placeholder="birth date"> <br>
        
          <button class="btn btn-primary " onclick="sentdata()" >Submit</button>
      </form>
          </div>

      
        </div>
    </div>


    <script type="text/javascript" src={{asset('js/axios.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/custom.js')}}></script>
@endsection


