CREATE TABLE equipamento_tipos (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  descricao VARCHAR(255) NULL,
  tipo INTEGER UNSIGNED NULL,
  ativo BOOL NOT NULL DEFAULT 1,
  PRIMARY KEY(id)
)
TYPE=InnoDB;

INSERT INTO `equipamento_tipos` (`id`, `nome`, `descricao`, `tipo`, `ativo`) VALUES
(1, 'Câmera filmadora', 'Câmera filmadora.', NULL, 1),
(2, 'Tripé', 'Tripé.', NULL, 1),
(3, 'Monitor de vídeo', 'Monitor de vídeo.', NULL, 1),
(4, 'Microfone de lapela ', 'Microfone de lapela com ou sem fio.', NULL, 1),
(5, 'Dolly', 'Dolly.', NULL, 1),
(6, 'Boom', 'Boom.', NULL, 1),
(7, 'Set light', 'Set light.', NULL, 1),
(8, 'Tripé de luz', 'Tripé para sustentação de equipamento de iluminação.', NULL, 1);


CREATE TABLE equipamento_marcas (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(15) NOT NULL,
  ativo BOOL NOT NULL DEFAULT 1,
  PRIMARY KEY(id)
)
TYPE=InnoDB;

INSERT INTO `equipamento_marcas` (`id`, `nome`, `ativo`) VALUES
(1, 'Sony', 1),
(2, 'JVC', 1),
(3, 'Kakuba', 1),
(4, 'Cartone', 1),
(5, 'Panasonic', 1),
(6, 'Nikon', 1),
(7, 'Minolta', 1);


CREATE TABLE situacaos (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descricao VARCHAR(50) NOT NULL,
  ativo BOOL NOT NULL DEFAULT 1,
  PRIMARY KEY(id)
)
TYPE=InnoDB;

INSERT INTO `situacaos` (`id`, `descricao`, `ativo`) VALUES 
(1, 'Padrao', 1);


CREATE TABLE acessorio_tipos (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  imagem BLOB NULL,
  ativo BOOL NOT NULL DEFAULT 1,
  PRIMARY KEY(id)
)
TYPE=InnoDB;

CREATE TABLE equipamentos (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  situacao_id INTEGER UNSIGNED NOT NULL,
  equipamento_tipo_id INTEGER UNSIGNED NOT NULL,
  equipamento_marca_id INTEGER UNSIGNED NOT NULL,
  modelo VARCHAR(20) NOT NULL,
  nro_bem VARCHAR(20) NOT NULL,
  observacoes TEXT NULL,
  imagem BLOB NULL,
  data_cadastro DATETIME NOT NULL,
  ativo BOOL NOT NULL DEFAULT 1,
  PRIMARY KEY(id),
  INDEX equipamentos_FKIndex1(equipamento_marca_id),
  INDEX equipamentos_FKIndex2(equipamento_tipo_id),
  INDEX equipamentos_FKIndex3(situacao_id),
  FOREIGN KEY(equipamento_marca_id)
    REFERENCES equipamento_marcas(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(equipamento_tipo_id)
    REFERENCES equipamento_tipos(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(situacao_id)
    REFERENCES situacaos(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
)
TYPE=InnoDB;

CREATE TABLE acessorios (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  situacao_id INTEGER UNSIGNED NOT NULL,
  acessorio_tipo_id INTEGER UNSIGNED NOT NULL,
  equipamento_id INTEGER UNSIGNED NOT NULL,
  ativo INTEGER UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY(id),
  INDEX acessorios_FKIndex1(equipamento_id),
  INDEX acessorios_FKIndex2(acessorio_tipo_id),
  INDEX acessorios_FKIndex3(situacao_id),
  FOREIGN KEY(acessorio_tipo_id)
    REFERENCES acessorio_tipos(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(equipamento_id)
    REFERENCES equipamentos(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(situacao_id)
    REFERENCES situacaos(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
)
TYPE=InnoDB;


