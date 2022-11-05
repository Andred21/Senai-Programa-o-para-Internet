select pedido_id as numero_pedido,sum(quantidade*valor) as total_pedido
from pedido_item
group by pedido_id
order by total_pedido desc
limit 10