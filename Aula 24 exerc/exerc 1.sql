select pedido_id, data, cliente_id
from pedido
where data >= '2022-01-01' and data <= '2022-01-31'
order by data 