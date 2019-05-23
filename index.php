<html>
<head><meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilo.css">
<title>Monitor de Redes</title>
</head>
<body>
<div class="container">

<h1>Monitor de Redes</h1>

<form method="post" class="form-inline">
<div class="row">

<div class="col">
<input type="text" placeholder="Nome" name="nomecomputador" class="form-control">
</div>

<div class="col">
<input type="text" placeholder="IP" name="ip" class="form-control">
</div>

<div class="col">
<input type="submit" class="btn btn-outline-secondary" value="salvar"/>
</div>
</div>
</form>


<div class="row">
<div class="col">
<div class="bloco online">ONLINE
<b>127.0.0.1</b><br>
ONLINE
</div>

<div class="bloco offline">OFFLINE
<b>127.0.02</b><br>
OFFLINE
</div>
</div>
</div>



</div>
</body>

</html>