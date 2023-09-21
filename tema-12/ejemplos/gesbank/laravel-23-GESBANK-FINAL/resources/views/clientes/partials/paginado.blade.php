<!-- Paginado de Clientes -->

<div class="container clearfix">
	<div class="float-left">
		 Página {{$clientes->currentPage()}} / {{$clientes->lastPage()}}
	</div>
	<div class="float-right">
		 {{$clientes->render()}}
	</div>
</div>