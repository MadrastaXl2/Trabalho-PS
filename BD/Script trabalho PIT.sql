create database pit;
use pit;

create table usuario(
id int not null auto_increment primary key,
nome varchar(200) not null,
email varchar(100) not null,
senha varchar(100) not null,
idade int not null,
sexo varchar(100) not null
)engine=InnoDB;

create table remedio(
id int not null auto_increment primary key,
nome varchar(100) not null,
horario int not null,
data date not null,

fk_id_usuario int not null,
foreign key (fk_id_usuario) references usuario(id) 
)engine=InnoDB;
