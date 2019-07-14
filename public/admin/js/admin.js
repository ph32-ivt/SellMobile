$(document).ready(function() {
	//hàm gọi list category
	function Datatable(id,url){
		$('#'+id).load(url);
	}
	Datatable('dataCategory','getDataCategory');

	/*
	gọi modal add category
	*/
	$('#showModal').click(function(event) {
		$('.modal-title').text('Thêm mới');
		$('#saveCategory').addClass('saveCategory');
		$.ajax({
			url: 'formCatgory',
			type: 'get',
			success:function(form){
				$('.form-modal').html(form);
			}
		});

	});
	//lưu category

	$('body').on('click','.saveCategory', function(event) {
		event.preventDefault();
		var parent = $('#parent').val();
		var	name   = $('#name').val();
		$.ajax({
			type:'get',
			url: 'createCategory',
			data: {
				'parent':parent,
				'name':name
			},
			success:function(resp){
				Datatable('dataCategory','getDataCategory');
				alert('Thành công');
			},
			error:function() {
				alert('Thất bại');
			}
			
		})
	});
});
