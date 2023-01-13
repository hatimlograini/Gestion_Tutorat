
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Etudiant</title>

@include('tuteur.css')
</head>

@include('tuteur.navbar')

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
					        <th>Nom Module</th>
                            <th>Date</th>
                            <th>Heure</th>

                            <th>Action</th>
					      </tr>
                        @foreach ($data as $data)
					    </thead>
					    <tbody>
					      <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->nom}}</td>
					        <td>{{$data->Date}}</td>
                            <td>{{$data->Heure}}</td>
					        <td>
                                <a class="btn btn-primary" href="{{ url('SeanceEffectue',$data->id) }}">Effectuee</a>
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

@include('tuteur.sidebar')
@include('tuteur.script')
</body>
</html>
