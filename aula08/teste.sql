
select avg(renda) as media_salarial from aula08.tbl_clientes;

select round(avg(renda)) as media_salarial from aula08.tbl_clientes;

select sum(renda) as media_salarial from aula08.tbl_clientes;

select nome, sum(renda), count(*) as ocorrencias from aula08.tbl_clientes group by(nome);

select nome, sum(renda), count(*) as ocorrencias from aula08.tbl_clientes group by(id_genero);