<?php include('./includes/menu.php');
           ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
</head>
  <body>     

<main class="container">


<form action=" " method="post">
    <form>
    <div class=" form-row">
    <div class="form-group col-md-6 form-control-lg">
      <label for="Nome">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="">
    </div>
     <div class="form-group col-md-6">
      <label for="Sobrenome">Sobrenome</label>
      <input type="text" class="form-control" id="sobrenome" placeholder="">
    </div>
     <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="Senha">Senha</label>
      <input type="password" class="form-control" id="senha" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="Endereco">Endereço</label>
    <input type="text" class="form-control" id="Endereco" placeholder="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Cidade">Cidade</label>
      <input type="text" class="form-control" id="Cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="Estado">Estado</label>
      <select id="Estado" class="form-control">
        <option selected>Selecione seu estado</option>
        <option>	Acre	</option> 
        <option>	Alagoas	</option> 
        <option>	Amapá	</option> 
        <option>	Amazonas	</option> 
        <option>	Bahia	</option> 
        <option>	Ceará	</option> 
        <option>	Distrito Federal	</option> 
        <option>	Espírito Santo	</option> 
        <option>	Goiás	</option> 
        <option>	Maranhão	</option> 
        <option>	Mato Grosso	</option> 
        <option>	Mato Grosso do Sul	</option> 
        <option>	Minas Gerais	</option> 
        <option>	Pará	</option> 
        <option>	Paraíba	</option> 
        <option>	Paraná	</option> 
        <option>	Pernambuco	</option> 
        <option>	Piauí	</option> 
        <option>	Rio de Janeiro	</option> 
        <option>	Rio Grande do Norte	</option> 
        <option>	Rio Grande do Sul	</option> 
        <option>	Rondônia	</option> 
        <option>	Roraima	</option> 
        <option>	Santa Catarina	</option> 
        <option>	São Paulo	</option> 
        <option>	Sergipe	</option> 
        <option>	Tocantins	</option> 
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="CEP">CEP</label>
      <input type="text" class="form-control" id="CEP">
    </div>
  </div>

  <div class="form-group col-md-10">
      <label for="Ingredientes">Ingredientes</label>
      <select id="Ingredientes" class="selectpicker">
        <option selected>Selecione seus Alergenos</option>
        <option>Farinha de trigo</option> 
        <option>crustáceos</option> 
        <option>ovos</option> 
        <option>peixes</option> 
        <option>amendoim</option> 
        <option>soja</option> 
        <option>leites de todas as espécies de animais mamíferos</option> 
        <option>amêndoa</option> 
        <option>avelãs</option> 
        <option>castanha de caju</option> 
        <option>castanha-do-brasil ou castanha-do-pará</option> 
        <option>macadâmias</option> 
        <option>nozes</option> 
        <option>pecãs</option> 
        <option>pistaches</option> 
        <option>pinoli</option> 
        <option>castanhas</option> 
        <option>látex natural</option> 
        <option> centeio</option> 
        <option>cevada</option> 
        <option> aveia e suas estirpes hibridizadas</option> 

        
      </select>
    </div>

</div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>




</main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

    

