
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Etudiant</title>

@include('user.css')
</head>

@include('user.navbar')

<div class="content-wrapper">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('AdminFolders/css/style.css') }}">

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Nom</th>
					        <th>Module</th>
                            <th>Action</th>
					      </tr>
                        @foreach ($data as $inscription)
					    </thead>
					    <tbody>
					      <tr>
					        <td>{{$inscription->name}}</td>
                            <td>{{$inscription->nom}}</td>
					        <td>
                                <a onclick="return confirm('sure vous voulez supprimer')" class="btn btn-danger" href="{{ url('delete_inscription',$inscription->id) }}">Supprimer</a>
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

@include('user.sidebar')
@include('user.script')
</body>
</html>
