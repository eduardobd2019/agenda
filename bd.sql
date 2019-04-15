create table usuarios(
	id int(10) not null auto_increment,
	nome varchar(155),
	email varchar(150) unique not null,
	senha varchar(64) not null,

	primary key(id)

)