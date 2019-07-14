<form action="" method="get">
	@csrf
	<select class="form-control" name="parent" id="parent">
		<option value="1">Điện Thoại</option>
		<option value="10">Ốp lưng</option>
	</select>
	<div  class="form-group">
		<label for="">Tên thể loại</label>
		<input id="name" name="name" type="text" class="form-control">
	</div>
</form>