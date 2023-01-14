<!DOCTYPE html>
<html>
<head>
  <title>Attestaion Tutorat</title>
  <style>
    .container {
    width: 80%;
    margin: 0 auto;
  }

  .title {
    text-align: center;
    font-size: 2em;
    margin-bottom: 20px;
  }

  .user-info {
    background-color: #f1f1f1;
    padding: 20px;
    border-radius: 5px;
  }

  .label{
    color: #093CAF;
    font-size: 18px;
    font-family: 'georgia';
  }

  .p{
    font-size: 14px;
    font-family: georgia;
  }

  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">Attestaion Tutorat</h1>
    <div class="user-info">
        <br>
      <label class="label">Nom :</label>
      <p class="p">{{$user->name}}</p><br>
      <label class="label">Prenom :</label>
      <p class="p">{{$user->prenom}}</p><br>
    </div>
  </div>
</body>
</html>
