<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document Attestation</title>

  <style type='text/css'>
    body, html {
        margin: 0;
        padding: 0;
    }
    body {
        color: rgb(0, 0, 0);
        font-family: Georgia, serif;
        font-size: 24px;
        text-align: center;
    }
    .container {
        border: 20px solid rgb(1, 19, 48);
        width: 750px;
        height: 563px;
        vertical-align: middle;
    }
    .logo {
        color: rgb(181, 22, 125);
    }

    .marquee {
        color: rgb(13, 16, 103);
        font-size: 48px;
        margin: 20px;
    }
    .assignment {
        margin: 20px;
    }
    .person {
        border-bottom: 2px solid black;
        font-size: 32px;
        font-style: italic;
        margin: 20px auto;
        width: 400px;
    }
    .reason {
        margin: 20px;
    }
</style>
</head>
<body>
  <br><br>
<div class="container">

  <br><br><br><br>
    <div class="logo">
        Université Privée de Fès
    </div>

    <div class="marquee">
        Attestation de Tutorat
    </div>

    <div class="assignment">
        attestation pour
    </div>

    <div class="person">
        {{ $user->name . ' ' . $user->prenom }}
    </div>

    <div class="reason">
        On vous remercie pour votre excellent travail<br/>
        et bonne continuation !
    </div>
</div>

</body>
</html>