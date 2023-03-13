<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ATV2 De Dev Web 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script>
        function mudarCorInput() {
            document.getElementById("nomeID").style.background = '#000000';
        }
        //Inserir as funções aqui
    </script>

</head>

<body>
    <div class="form-group col-md-6">
        <label for="nomeID">Nome</label>
        <input type="text" class="formcontrol" onclick="mudarCorInput()" name="nome" id="nomeID" placeholder="Fulano de tal">
    </div>

</body>

</html>