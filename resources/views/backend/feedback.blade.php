@extends('backend.masterpage.masterpage')
@section('title')
      Feedbacks
@endsection
@section('content')
	<!-- BEGIN CONTENT -->
	<div id="content">
		<div id="content-header">
			<div id="breadcrumb"> <a href="{{ asset ('/admin') }}" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
			<h1>Manage Feedbacks</h1>
		</div>
		<div class="container-fluid">
			<hr>
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						
						<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
							<h5>Feedbacks</h5>
						</div>
						<div class="widget-content nopadding">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>										
										<th>Email</th>
										<th>Subject</th>
										<th>Message</th>
                                        <th>Status</th>
									</tr>
								</thead>
								<tbody>
									@foreach($feedbacks as $feedback)
										<tr product-id="{{ $feedback->Id }}">
											<td>{{ $feedback->Id }}</td>
											<td>{{ $feedback->Name }}</td>
											<th>{{ $feedback->Email }} </th>
											<th>{{ $feedback->Subject }}</th>
                                            <th>{{ $feedback->Message }}</th>
                                            <th>{{ $feedback->Status }}</th>	
									</tr>
									@endforeach
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
