<!-- Paginado de Cuentas -->

<div class="container clearfix">
	<div class="float-left">
		 Página {{$cuentas->currentPage()}} / {{$cuentas->lastPage()}}
	</div>
	<div class="float-right">
		 {{$cuentas->render()}}
	</div>
</div>