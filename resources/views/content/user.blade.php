@extends('layouts.app')

@section('content')
<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Manajemen User</h3>
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
												<th>#</th>
												<th>Nama</th>
												<th>Email</th>
												<th>Kontak</th>
												<th>Status</th>
												<th>Date Create</th>
												<th style="width:200px"><button id="btn-add" class="btn btn-success btn-xs" ng-click="toggle('add', 0)">Add New</button></th>
											</tr>
										</thead>
										<tbody>
											<tr ng-repeat="users in user">
												<td>@{{ user.id }}</td>
												<td>@{{ user.name }}</td>
												<td>@{{ user.email }}</td>
												<td>@{{ user.phone }}</td>
												<td>@{{ user.status }}</td>
												<td>@{{ user.created_at }}</td>
												<td><button class="btn btn-warning btn-xs btn-detail" ng-click="toggle('edit', user.id)">
													<span class="glyphicon glyphicon-edit"></span>
												</button>
												<button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(user.id)">
													<span class="glyphicon glyphicon-trash"></span>
												</button>
												</td>
											</tr>
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