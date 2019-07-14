@foreach($category as $category)
<tr class="">
	<td>{{$category->id}}</td>
	<td>{{$category->name}}</td>
	<td>
		@if(empty($category->parent_id) )
		{{'[N/A]'}}
		@else
		<?php 
		$parent = \DB::table('categories')->where('id',$category->parent_id)->first();
		echo $parent->name;
		?>
		@endif

	</td>
	<td>
		<a href=""><button class="btn btn-outline-info"><i class="far fa-eye"></i></button></a>
		<button id="editCategory" class="btn btn-outline-info"><i class="fas fa-pencil-alt"></i></button>
		<a href=""><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
	</td>    
</tr>
@endforeach
