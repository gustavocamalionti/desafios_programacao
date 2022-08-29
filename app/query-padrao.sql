create database sg;
create database ct;
create database desafio_numerodasorte;
create database DesafiosProgramacao;

use DesafiosProgramacao;
use ct;
use sg;

describe site_contatos;
describe produto_detalhes;
describe produtos;

select * from sorte_milhao_numeros;
select count(*) from sorte_milhao_numeros;

select * from users;
select * from pedido_produtos;
select * from clientes;
select * from unidades;
select * from migrations;
select * from fornecedores;
select * from produtos;
select * from log_acessos;
select * from site_contatos;
select * from motivo_contatos;
select * from sorte_milhao_numeros;

select * from site_contatos where nome <> 'Fernando' and motivo_contato in(1,2) and created_at between '2022-08-01 00:00:00' and '2022-08-31 23:59:59';
select * from produto_detalhes;
select * from produtos;

insert into users(name, email, password) values('Jorge', 'jorge@contato.com.br', '1234');
DELETE FROM motivo_contatos;

ALTER TABLE produto_detalhes ADD unidade_id bigint unsigned;
ALTER TABLE produto_detalhes ADD CONSTRAINT produtos_detalhes_unidade_id_foreign FOREIGN KEY(unidade_id) REFERENCES unidades (id);
ALTER TABLE produtos ADD unidade_id bigint unsigned;
ALTER TABLE produtos ADD CONSTRAINT produtos_unidade_id_foreign FOREIGN KEY(unidade_id) REFERENCES unidades (id);

alter table produtos drop column unidade_id;
alter table produtos drop foreign key produtos_ibfk_1;
alter table produtos drop foreign key produtos_unidade_id_foreign;

alter table motivo_contatos drop column motivo_contato;
alter table produto_detalhes drop foreign key produto_detalhes_ibfk_1;

