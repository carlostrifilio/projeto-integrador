
    
    <?php include('./includes/menu.php');
           ?>

    <link rel="stylesheet" href="./css/login.css">
<main class="container d-grid">


<form action=" " method="post">
    <form >
    <div class=" form-row">
    <div class="form-group col-md-6">
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

  


  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>


</form>


</main>