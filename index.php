<html>
    <head>
        <title>RemoveScript - Removedor De Scripts HTML</title>
        <meta charset="utf-8">
        <meta name="description" content="Remova as tags <script> do seu HTML de forma rapida, facil e gratuita!">
        <meta name="keywords" content="HTML,CSS,JavaScript,Remover,Ferramenta,Desenvolvimento,PHP,Sql,Bootstrap,Removedor,Exluir">
        <meta name="author" content="Marcos Vinicius">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Song+Myung|Sunflower:300" rel="stylesheet">
        <link rel="shortcut icon" type="icon" href="dist/img/favico.ico"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>.footer {position: fixed;left: 0;padding: 5px;bottom: 15px;height: 35px;width: 100%;background-color: black;font-style: 'Sunflower', sans-serif;color: #2aabd2;text-align: center;}</style>
    </head>
<body style="background-color: #3c3c3c">
  <br>
  <div class="jumbotron" style="text-align:center; background-color: #2aabd2;color: #FFFFFF;font-family: 'Montserrat', sans-serif; margin: 1px;">
      <img src="dist/img/logo_js.png" height="50px" width="50px">
      <h2 style="font-family: 'Montserrat', serif; background-color: black; color: #2aabd2; padding: 2px;"><strong>Removedor De Scripts</strong></h2>
      <p>Ferramenta que remove tags <strong>SCRIPT</strong> de um html, Orgulhosamente desenvolvido com PHP e Bootstrap.</p>
  </div>
  <?php
      if(isset($_GET['sucesso'])){
        $base = $_POST['base'];
        $semscript = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $base);
        echo '<div style="background-color: black; padding: 15px; color: #2aabd2; font-family: \'Montserrat\', sans-serif;">
              <center><strong>Successo!</strong> Scripts foram removidos com sucesso.</center>
              </div>';
      }else {
        echo '<br>';
      }
  ?>
  <div class="container-fluid" style="">
    <form method="post" action="index.php?sucesso=ok">
        <div class="row">
            <div class="col-md-6" style="background-color: #2aabd2; padding: 5px;">

                    <div style="font-size: medium; font-family: 'Sunflower', sans-serif; padding: 10px; color: #2aabd2; background-color: black; border-radius: 25px;"><strong>Insira seu HTML:</strong></div>
                    <div class="panel-body"><textarea name="base" id="base" class="form-control" rows="12" required=""></textarea></div>

            </div>
            <div class="col-md-6" style="background-color: #2aabd2; padding: 5px;">
                <div style="font-size: medium; font-family: 'Sunflower', sans-serif; padding: 10px; color: #2aabd2; background-color: black; border-radius: 25px;"><strong>Resultado Sem Scripts:</strong></div>
                <div class="panel-body"><textarea name="result" id="result" class="form-control" rows="12"><?php if(isset($semscript)){echo $semscript;} ?></textarea></div>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12" style="background-color: #2aabd2; margin: 1px; padding: 5px;text-align: center;">
                <button type="submit" class="btn btn-dark btn-lg btn-block" style="border-radius: 25px;"><Strong>Remover Scripts</strong></button>
            </div>
        </div>
      </form>
  </div>
  <footer class="footer">
      <div class="container">
          <p><strong>Marcos Vinicius</strong> - Todos Os Direitos Reservados 2018</p>
      </div>
  </footer>
</body>
</html>
