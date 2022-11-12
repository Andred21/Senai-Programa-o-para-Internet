<?php
require_once(__DIR__ . "/../common/cabecalho.php");
//Aqui colocarei o corpo se precisar
?>
<!-- formulário aqui -->
<div class="conteudo-pequeno">
  <h2>Cadastro de Pizza</h2>
  <form action="cadastro03_conf.php" method="post">
    <!-- nome da pizza -->
    <div class="mb-3">
      <label for="idnomepizza">Nome da pizza:</label>
      <input type="text" name="nomepizza" id="idnomepizza" class="form-control" placeholder="Digite o nome da pizza." required>
    </div>
    <!-- descrição -->
    <div class="mb-3">
      <label for="iddescricao">Descrição da pizza:</label>
      <input type="text" name="descricao" id="iddescricao" class="form-control" maxlength="60" placeholder="Digite a descrição da pizza." required>
    </div>
    <!-- valor -->
    <div class="mb-3">
      <label for="idvalor">Valor:</label>
      <input type="number" step="0.01" name="valor" id="idvalor" class="form-control" placeholder="Digite o valor." required>
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
