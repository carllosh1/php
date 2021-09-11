create DATABASE db_atvd17_DSW;

USE db_atvd17_DSW;

CREATE TABLE tbl_paciente(
	id_aluno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_paciente varchar(50) not null,
    rua_paciente varchar(80) not null,
    numeroRua_paciente INT not null,
    bairro_paciente varchar(50) not null,
    complemento_paciente varchar(50) not null,
    cep_paciente char(8) not null,
    email_paciente varchar(60) not null,
    telefoneFixo_paciente varchar(15) not null,
    celular_paciente varchar(15) not null,
    telefone_paciente varchar(15) not null
);

select * from tbl_paciente;


