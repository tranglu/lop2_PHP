<?php 

 ?>

 <!-- // kế thừa từ app.blade template -->
 @extends('layout.app');
 <!-- //nội dung ở trang con -->
 @section('content')
 <div class="panel-body">
 	<!-- // hiện thông báo lỗi -->
 	@include('errors.503')
 	<!-- //form nhập task mới -->
 	<form action="{{url('taks')}}" method="post" class="form-control">
 		{{csrf-field()}}
 		<div class="form-group">
 			<label for="task" class="col-sm-3 form-control-label">TASK</label>
 			<div class="col-sm-6">
 				<input type="text" name="name" id="task-name" class="form-control">
 			</div>
 		</div>
 		<!-- //nút task -->
 		<input type="submit" name="" class="btn btn-info">Add Task
 	</form>
 </div>
 @endsection