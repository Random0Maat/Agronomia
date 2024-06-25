
  <!-- Modal -->
  <div class="modal fade" id="modal-delete-{{$ob->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
	<form method="POST" action="{{ url("coleccion", ["coleccion" => $ob->id]) }}">
		@csrf
		@method('delete')

		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">

			<h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR COLECCION</h1>

			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

			</div>
			<div class="modal-body">
				<p>CONFIRME SI DESEA ELIMINAR LA COLECCION</p>
			</div>
			<div class="modal-footer">

			<button type="button" class="btn btn-default" data-bs-dismiss="modal">CERRAR</button>
			<button type="submit" class="btn btn-danger">CONFIRMAR</button>

			</div>
		</div>
		</div>

	</form>

  </div>


