<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/one-page-wonder.min.css" rel="stylesheet">

</head>
<body>
    
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Formulario de Mensagens</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome:</label>  
  <div class="col-md-5">
  <input id="nome" name="nome" type="text" placeholder="digite o nome" class="form-control input-md" required="">
  <span class="help-block">o nome é importante para identificação</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="Digite seu email" class="form-control input-md" required="">
  <span class="help-block">Email é necessario</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone">Telefone</label>  
  <div class="col-md-5">
  <input id="telefone" name="telefone" type="text" placeholder="Digite seu telefone" class="form-control input-md" required="">
  <span class="help-block">Telefone necessario</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="mensagem" name="mensagem">Digite sua mensagem</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-4">
    <button id="enviar"  name="enviar" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>
  
<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/formulario.js"></script>
</body>
</html>