@extends('Livraison.layouts.main')
@section('title','Administration de la livraison des pizzas')
@section('content')

	<div class="container">
		<div class="row">

{{--			utilisateur--}}
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Utilisateurs</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>

							<div class="form-inline">
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>

							</div>





							<div class="form-group">
								<label for="exampleInputFile">File input</label>
								<input type="file" id="exampleInputFile">
								<p class="help-block">Example block-level help text here.</p>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Check me out
								</label>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>

					<div class="panel-footer">Panel footer</div>
				</div>
			</div>

{{--			role--}}
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Roles</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleInputFile">File input</label>
								<input type="file" id="exampleInputFile">
								<p class="help-block">Example block-level help text here.</p>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Check me out
								</label>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
