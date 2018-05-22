@extends('layouts.site')

@section('content')

<div class="jumbotron">
     
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

			<div class="form">
			
				<form method="POST" action="{{route('articleStore')}}">
				  <div class="form-group">
				    <label for="title">Заголовок</label>
				    <input type="text" class="form-control" id="title" name="Title" placeholder="Заголовок">
				  </div>
			
				  <div class="form-group">
				    <label for="exampleInputFile">Краткое описание</label>
				    <textarea class="form-control" name="Description"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputFile">Полный текст</label>
				    <textarea class="form-control" name="text"></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				  
				   {{ csrf_field() }}
				    
				</form>
			
	          
		       
	        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->

@endsection