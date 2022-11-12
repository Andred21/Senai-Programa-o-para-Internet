<?php
  require_once(__DIR__ . "/../common/cabecalho.php");
  //Aqui colocarei o corpo se precisar
?>
<!-- formulário aqui -->
<div class="conteudo">
  <h2>Cadastro de Cliente</h2>
  <form action="cadastro01_conf.php" method="post">
    <!-- nome do cliente -->
    <div class="mb-3">
      <label for="idnome">Nome:</label>
      <input type="text" name="nome" id="idnome" class="form-control" placeholder="Digite o seu Nome." required>
    </div>
    <!-- telefone -->
    <div class="mb-3">
      <label for="idtelefone">Telefone:</label>
      <input type="text" name="telefone" id="idtelefone" class="form-control"  placeholder="Digite o Telefone." required>
    </div>
    <!-- Endereço -->
    <div class="mb-3">
      <label for="idendereco">Endereço:</label>
      <input type="text" name="endereco" id="idendereco" class="form-control" placeholder="Digite o Endereço." required>
    </div>
    <!-- numero -->
    <div class="mb-3">
      <label for="idnumero">Número:</label>
      <input type="number"  name="numero" id="numero" class="form-control" placeholder="Digite o Número do endereço." required>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
      <div class="col-md-6">
        <button type="reset" class="btn btn-danger">Limpar</button>
      </div>
  </form>
</div>
<?php
  require_once(__DIR__ . "/../common/rodape.php");