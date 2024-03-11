CREATE TABLE perfil (
    id serial PRIMARY KEY,
    nome_perfil VARCHAR(100) NOT NULL,
    descricao TEXT,
    data date
);

CREATE TABLE permissao (
    id serial PRIMARY KEY,
    nome_permissao VARCHAR(100) NOT NULL,
    descricao TEXT,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

CREATE TABLE atribuicao_permissao (
    id serial PRIMARY KEY,
    id_perfil INT NOT NULL,
    id_permissao INT NOT NULL,
    data date,
    FOREIGN KEY (id_perfil) REFERENCES perfil(id),
    FOREIGN KEY (id_permissao) REFERENCES permissao(id)
);

INSERT INTO perfil (nome_perfil, descricao, data) 
VALUES ('Administrador', 'Perfil com acesso total ao sistema', CURRENT_DATE);

INSERT INTO permissao (nome_permissao, descricao, data) 
VALUES ('Criar Usuário', 'Permite criar novos usuários no sistema', CURRENT_DATE);

INSERT INTO atribuicao_permissao (id_perfil, id_permissao, data) 
VALUES (1, 1, CURRENT_DATE);

select * from permissao
select * from perfil
select * from atribuicao_permissao


CREATE TABLE usuario (
    id serial PRIMARY KEY NOT NULL,
    nome character varying(100) NOT NULL,
    sexo character varying(10) NOT NULL, 
    data_nascimento date NOT NULL,
    cep character varying(10),
    cidade character varying(100),
    estado character varying(100),
    bairro character varying(100),
    complemento character varying(100),
    logradouro character varying(255),
    tipo character varying(20) NOT NULL, 
    status character varying(20) NOT NULL DEFAULT 'ativo',
    data_registro date NOT NULL DEFAULT CURRENT_DATE
);

CREATE TABLE produto (
    id serial PRIMARY KEY NOT NULL,
    nome character varying(100) NOT NULL,
    descricao text,
    imagem bytea,
    preco numeric(10,2) NOT NULL,
    quantidade numeric(10,2) NOT NULL DEFAULT 0, 
    unidade_medida character varying(20) NOT NULL DEFAULT 'unidade', 
    status character varying(20) NOT NULL DEFAULT 'ativo',
    categoria character varying(100) NOT NULL
);

CREATE TABLE venda (
    id serial PRIMARY KEY NOT NULL,
    id_comprador INT NOT NULL,
    id_produto INT NOT NULL,
    quantidade numeric(10,2) NOT NULL,
    peso numeric(10,2),
    data_compra date,
    data_entrega date,
    status character varying(20)
);


CREATE TABLE venda_vendedor (
    id serial PRIMARY KEY NOT NULL,
    id_vendedor INT NOT NULL,
    id_produto INT NOT NULL,
    quantidade numeric(10,2) NOT NULL,
    data_publicacao date,
    status character varying(20)
);

CREATE TABLE motoentregador (
    id serial PRIMARY KEY NOT NULL,
    nome character varying(100) NOT NULL,
    sexo character varying(10) NOT NULL,
    data_nascimento date NOT NULL,
    cep character varying(10),
    cidade character varying(100),
    estado character varying(100),
    bairro character varying(100),
    complemento character varying(100),
    logradouro character varying(255),
    tipo character varying(20) NOT NULL,
    data_registro date,
    disponibilidade character varying(20) NOT NULL DEFAULT 'ativo'
);


CREATE TABLE avaliacao (
    id serial PRIMARY KEY NOT NULL,
    id_compra INT,
    id_vendedor INT,
    id_comprador INT,
    avaliacao numeric(2,1) NOT NULL, -- Pode ser uma escala de 0 a 5, por exemplo
    comentario text,
    data date
);

DROP TABLE venda;

CREATE TABLE venda (
    id serial PRIMARY KEY NOT NULL,
    tipo_vendedor character varying(20), -- 'vendedor' ou 'comprador'
    id_vendedor INT, -- Preenchido somente se o tipo_vendedor for 'vendedor'
    id_comprador INT, -- Preenchido somente se o tipo_vendedor for 'comprador'
    id_produto INT NOT NULL,
    quantidade numeric(10,2) NOT NULL,
    peso numeric(10,2),
    data_compra date,
    data_entrega date,
    status character varying(20)
);


-- Inserir um registro na tabela "usuario"
INSERT INTO usuario (nome, sexo, data_nascimento, cep, cidade, estado, bairro, complemento, logradouro, tipo, status, data_registro)
VALUES ('João da Silva', 'Masculino', '1990-05-15', '12345-678', 'São Paulo', 'SP', 'Centro', 'Apto 101', 'Rua Principal', 'Comprador', 'ativo', CURRENT_DATE);

-- Inserir um registro na tabela "produto"
INSERT INTO produto (nome, descricao, preco, categoria)
VALUES ('Maçã', 'Maçãs frescas colhidas do pomar', 2.5, 'Frutas');

-- Inserir um registro na tabela "venda"
INSERT INTO venda (tipo_vendedor, id_comprador, id_produto, quantidade, data_compra, status)
VALUES ('comprador', 1, 1, 5, CURRENT_DATE, 'concluída');

-- Inserir um registro na tabela "venda_vendedor"
INSERT INTO venda_vendedor (tipo_vendedor, id_vendedor, id_produto, quantidade, data_publicacao, status)
VALUES ('vendedor', 1, 1, 10, CURRENT_DATE, 'ativo');

ALTER TABLE venda_vendedor
ADD COLUMN tipo_vendedor character varying(20);

INSERT INTO venda_vendedor (tipo_vendedor, id_vendedor, id_produto, quantidade, data_publicacao, status)
VALUES ('vendedor', 1, 1, 10, CURRENT_DATE, 'ativo');

-- Inserir um registro na tabela "motoentregador"
INSERT INTO motoentregador (nome, sexo, data_nascimento, cep, cidade, estado, bairro, complemento, logradouro, tipo, data_registro, disponibilidade)
VALUES ('Carlos Oliveira', 'Masculino', '1985-10-20', '54321-987', 'Rio de Janeiro', 'RJ', 'Copacabana', 'Casa 102', 'Avenida Principal', 'Motoentregador', CURRENT_DATE, 'ativo');

-- Inserir um registro na tabela "avaliacao"
INSERT INTO avaliacao (id_compra, id_vendedor, id_comprador, avaliacao, comentario, data)
VALUES (1, 1, 1, 4.5, 'Ótimo vendedor, produto de alta qualidade.', CURRENT_DATE);


