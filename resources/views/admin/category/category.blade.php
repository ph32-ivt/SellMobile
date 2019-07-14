@extends('admin.layouts.master')
@section('content')
<div class="container">
	<div class="card-deck">
		<div class="card col-lg-12 px-0 mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<h5 class="card-title">Thể loại</h5>
					</div>
					<div class="col-md-2">
						<button id="showModal" class=" btn btn-outline-primary mb-2 " data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle"></i>Thêm mới</button>					
					</div>
				</div>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr class="text-primary">
								<th>ID</th>
								<th>Tên thể loại</th>
								<th>Parent</th>
								<th class="pl-5">Action</th>

							</tr>
						</thead>
						<tbody id="dataCategory">
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
					<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tiêu đề</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body form-modal">
				
			</div>
			<div class="modal-footer">
				<button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button id="saveCategory" class="btn btn-primary ">Save</button>
				
			</div>
		</div>
	</div>
</div>
@endsection


