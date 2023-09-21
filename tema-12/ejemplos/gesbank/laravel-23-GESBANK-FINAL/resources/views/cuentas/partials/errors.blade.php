@if($errors->any())
    
    <div class="alert alert-success" role="alert">
	    
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

	    <h4 class="alert-heading">Errores en el Formulario:</h4>
	    <hr>

	    <ul>
	    
	    @foreach ($errors->all() as $error)
	          <li>{{ $error }}</li>
	    @endforeach

		</ul>
    
    </div>

@endif