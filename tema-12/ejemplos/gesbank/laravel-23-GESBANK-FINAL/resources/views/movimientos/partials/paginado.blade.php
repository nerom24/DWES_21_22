<!-- Paginado de Cuentas -->

<div class="container clearfix">
	<div class="float-left">
		 Página {{$movimientos->currentPage()}} / {{$movimientos->lastPage()}}
	</div>
	<div class="float-right">
		 {{$movimientos->render()}}
	</div>
</div>