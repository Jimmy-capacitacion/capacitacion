@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
	  <div class="card-header bg-dark text-white">
		<b>Lista de Categorias</b>
	  </div>
	  <div class="card-body">
		<h5 class="card-title">Special title treatment</h5>
		<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		<a href="{{ route('categories.create') }}" class="btn btn-primary">Agregar</a>
		
		<hr/>
		<table class="table">
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>SLUG</th>
				<th>ACCION</th>
			</tr>
			@forelse($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>{{ $category->slug }}</td>
				<td></td>
			</tr>
			@empty
			<tr>
				<td colspan="4">No hay registros</td>
			</tr>
			@endforelse
		</table>
		{!! $categories->render() !!}
	  </div>
	</div>
</div>	
@endsection