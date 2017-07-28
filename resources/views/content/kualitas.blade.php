@extends('layouts.app')

@section('content')
<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Kualitas</h3>
					<div class="row">
						<div class="span12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data User</h3>
								</div>

								<div class="panel-body">
								<div class="pull-left">
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
									  Create Item
								</button>
						        </div>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>NAMA</th>
												<th>EMAIL</th>
												<th>KONTAK</th>
												<th>STATUS</th>
												<th>DATE CREATED</th>
												<th style="width:200px">AKSI</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
									<ul id="pagination" class="pagination-sm"></ul>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

			<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Create Item</h4>
		      </div>
		      <div class="modal-body">

		      		
		      </div>
		    </div>
		  </div>
		</div>
		</div>
		<!-- END MAIN -->
@endsection