create database projeto;
use projeto;
create table estoque(
id_estoque int auto_increment,
nroproduto int not null,
nomeproduto varchar(200) not null,
categoria varchar(100) not null,
quantidade int not null,
fornecedor varchar(100) not null,

primary key (id_estoque));

insert into `estoque`(`nroproduto`,`nomeproduto`,`categoria`,`quantidade`,`fornecedor`) values (8787, 'mouse',
'periferico',3,'A');

select * from estoque;