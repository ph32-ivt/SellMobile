$(document).ready(function () {
	$('#category').click(function () {
		var id= $(this).attr("data-id");
		console.log(id);
		// $.ajax({
		// 	url:'probycate/'+id,
		// 	type:'GET',
		// 	data:{},
		// 	success:function (result) {
		// 		console.log(id);
		// 	}
		// });
	});
});
