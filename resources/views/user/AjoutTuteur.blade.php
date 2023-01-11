<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Tuteurs</title>
</head>
<body>
    <style>
        /* Add some styling to the form */
        form {
          display: flex;
          flex-direction: column;
          width: 60%;
          margin:  auto;
          padding: 30px;
          border: 1px solid #ccc;
          border-radius: 4px;
        }

        h1 {
          text-align: center;
          display:block;
          color: #093caf;
        }
      
        /* Style the form elements */
        label, input, button {
          margin-bottom: 8px;
        }
      
        label {
          font-weight: bold;
        }
      
        input, button {
          width: 90%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
        }
      
        button {
          background-color: #B7037E;
          color: white;
          cursor: pointer;
          width: 100%;
          
          margin-top: 10%;
        }
      </style>
      <h1 >Ajout des Tuteurs</h1>
      
      <form>
        <label for="nomTuteur">Nom du tuteur:</label>
        <input type="text" id="nomTuteur" name="nomTuteur">
      
        <label for="cours">Cours à proposer:</label>
        <input type="text" id="couurs" name="email">
      

        <label for="jourDispo">Jour Disponible:</label>
        <input type="date" id="jourDispo" name="jourDispo">

        <label for="horaire">Horaire Disponible</label>
        <input type="time" id="horaire" name="horaire">
      
        <button type="submit">Ajouter</button>
      </form>
</body>
</html>
