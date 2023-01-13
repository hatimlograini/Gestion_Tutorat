<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion Modules</title>

@include('admin.css')
</head>

@include('admin.navbar')

<div class="content-wrapper">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('AdminFolders/css/style.css') }}">

    <a href="{{ url('viewAddModule') }}" class="btn btn-primary" style="position: absolute; top: 210px; right: 100px;">Ajouter</a>

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Nom du Module</th>
					        <th>Gérer</th>
					      </tr>
                        @foreach ($data as $module)
					    </thead>
					    <tbody>
					      <tr>
					        <td>{{ $module->nom }}</td>
					        <td>
                                <a href="{{ url('supprimerModule',$module->id) }}" class="btn btn-danger">Supprimer</a>
                            </td>
					      </tr>
					    @endforeach
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('AdminFolders/js/jquery.min.js') }}"></script>
  <script src="{{ asset('AdminFolders/js/popper.js') }}"></script>
  <script src="{{ asset('AdminFolders/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('AdminFolders/js/main.js') }}"></script>

</div>

@include('admin.sidebar')
@include('admin.script')
</body>
</html>