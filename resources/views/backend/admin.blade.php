@extends('backend.masterpage.masterpage')
@section('title')
      Admin
@endsection
@section('content')
	<!-- BEGIN CONTENT -->
	<div id="content">
		<div id="content-header">
			<div id="breadcrumb"> <a href="{{ asset ('/admin/product') }}" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
			<h1 style="text-align: center;"> Welcome to Admin page</h1>
		</div>
		<div class="container-fluid">
			<hr>
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						
						<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
							<h5>Admins</h5>
						</div>
						<div class="widget-content nopadding">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>										
										<th>Địa Chỉ</th>	
									</tr>
								</thead>
								<tbody>
									<td>1</td>
									<td>Đào Hoài Phương</td>
									<td>Bình Định</td>
								</tbody>
								<tbody>
									<td>2</td>
									<td>Nguyễn Thị Thanh Hương</td>
									<td>Tiền Giang</td>
								</tbody>
								<tbody>
									<td>3</td>
									<td>Nguyễn Đăng Khoa</td>
									<td>TP. Hồ Chí Minh</td>
								</tbody>
								<tbody>
									<td>4</td>
									<td>Nguyễn Quý Đức An Tôn</td>
									<td>Phú Yên</td>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->

@endsection
