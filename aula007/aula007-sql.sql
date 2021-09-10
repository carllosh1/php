create DATABASE db_atvd15_DSW;

USE db_atvd15_DSW;

CREATE TABLE tbl_alunos(
	id_aluno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_aluno varchar(50) not null,
    email_aluno varchar(50) not null
);

select * from tbl_alunos;



