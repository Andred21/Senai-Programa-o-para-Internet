<?php
  require_once(__DIR__ . "/../common/cabecalho.php");
  require_once(__DIR__ . "/../common/conexaobd.php");
  //Aqui colocarei o corpo se precisar
  $sql ="select it.pedido_id as numero_pedido,p.data as data_pedido,p.cliente_id as codigo_cliente,c.nome as nome_cliente,
  it.pizza_id as pizza_id, pi.nome as pizza_nome, it.quantidade * it.valor as total_item
 
 from pedido_item it 
   inner join pedido p on p.pedido_id=it.pedido_id
   inner join cliente c on c.cliente_id=p.cliente_id
   inner join pizza pi on pi.pizza_id=it.pizza_id
 order by it.pedido_id, it.pizza_id, c.nome
 limit 10";
  $stmt = $conn->prepare($sql);
  $result = $stmt->execute();
?>
  <div class="conteudo">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Número do pedido</th>
          <th>Data do pedido</th>
          <th>Código do Cliente</th>
          <th>Nome do Cliente</th>
          <th>Código da pizza</th>
          <th>Nome da pizza</th>
          <th>Total de itens</th>
        </tr>
      </thead>
      <tbody>
<?php
 if ($result) {
  while ($itens = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo "<tr>";
    echo "  <td class='al-dir'>" . $itens->numero_pedido. "</td>";
    echo "  <td>" . $itens->data_pedido. "</td>";
    echo "  <td class='al-dir'>" . $itens->codigo_cliente. "</td>";
    echo "  <td>" . $itens->nome_cliente. "</td>";
    echo "  <td class='al-dir'>" . $itens->pizza_id. "</td>";
    echo "  <td>" . $itens->pizza_nome. "</td>";
    echo "  <td class='al-dir'>" . number_format($itens->total_item, 2, ",", ".") . "</td>";
    echo "</tr>";
  }
}
?>
      </tbody>
    </table>
  </div>
<?php
  require_once(__DIR__ . "/../common/rodape.php");