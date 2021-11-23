CREATE TABLE anunciantes (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  municipio_id INTEGER UNSIGNED NOT NULL,
  uf_id INTEGER UNSIGNED NOT NULL,
  nome_completo VARCHAR(50) NULL,
  email VARCHAR(50) NULL,
  celular VARCHAR(15) NULL,
  senha VARCHAR(255) NULL,
  flag_status CHAR NULL,
  data_cadastro DATE NULL,
  PRIMARY KEY(id),
  INDEX anunciantes_FKIndex1(uf_id),
  INDEX anunciantes_FKIndex2(municipio_id)
);

CREATE TABLE combustivel (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  codigo VARCHAR(10)) NULL,
  descricao VARCHAR(15) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE cor (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nomecor VARCHAR(20)) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE marca (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  codigo VARCHAR(5) NULL,
  descricao VARCHAR(40) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE modelo (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  codigo VARCHAR(6) NULL,
  descricao VARCHAR(50)) NULL,
  marca INTEGER UNSIGNED NULL,
  PRIMARY KEY(id)
);

CREATE TABLE municipio (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  codigo_ibge INTEGER UNSIGNED NULL,
  nome_municipio VARCHAR(50) NULL,
  uf INTEGER UNSIGNED NULL,
  tom VARCHAR(5) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE operadores (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  setores_id INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(50)) NULL,
  login VARCHAR(10)) NULL,
  senha VARCHAR(255)) NULL,
  nivel CHAR NULL,
  ultimo_acesso DATETIME NULL,
  PRIMARY KEY(id),
  INDEX operadores_FKIndex1(setores_id)
);

CREATE TABLE setores (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(15)) NULL,
  descricao VARCHAR(30) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE uf (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  codigo VARCHAR(2) NULL,
  descricao VARCHAR(30) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE veiculos (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  municipio_id INTEGER UNSIGNED NOT NULL,
  uf_id INTEGER UNSIGNED NOT NULL,
  cor_id INTEGER UNSIGNED NOT NULL,
  modelo_id INTEGER UNSIGNED NOT NULL,
  marca_id INTEGER UNSIGNED NOT NULL,
  combustivel_id INTEGER UNSIGNED NOT NULL,
  operadores_id INTEGER UNSIGNED NOT NULL,
  anunciantes_id INTEGER UNSIGNED NOT NULL,
  ano VARCHAR(4)) NULL,
  ano_modelo VARCHAR(4)) NULL,
  portas CHAR NULL,
  placa VARCHAR(8)) NULL,
  renavam VARCHAR(20)) NULL,
  fotos INTEGER UNSIGNED NULL,
  valor FLOAT NULL,
  valor_pago FLOAT NULL,
  data_cadastro DATE NULL,
  data_compra DATE NULL,
  idoperador INTEGER UNSIGNED NULL,
  PRIMARY KEY(id),
  INDEX veiculos_FKIndex1(anunciantes_id),
  INDEX veiculos_FKIndex2(operadores_id),
  INDEX veiculos_FKIndex3(combustivel_id),
  INDEX veiculos_FKIndex4(marca_id),
  INDEX veiculos_FKIndex5(modelo_id),
  INDEX veiculos_FKIndex6(cor_id),
  INDEX veiculos_FKIndex7(uf_id),
  INDEX veiculos_FKIndex8(municipio_id)
);


