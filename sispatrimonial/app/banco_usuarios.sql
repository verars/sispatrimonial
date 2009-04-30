CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 36),
(2, 1, NULL, NULL, 'Pages', 2, 5),
(3, 2, NULL, NULL, 'display', 3, 4),
(4, 1, NULL, NULL, 'Groups', 6, 19),
(5, 4, NULL, NULL, 'initDB', 7, 8),
(6, 4, NULL, NULL, 'index', 9, 10),
(7, 4, NULL, NULL, 'view', 11, 12),
(8, 4, NULL, NULL, 'add', 13, 14),
(9, 4, NULL, NULL, 'edit', 15, 16),
(10, 4, NULL, NULL, 'delete', 17, 18),
(11, 1, NULL, NULL, 'Users', 20, 35),
(12, 11, NULL, NULL, 'login', 21, 22),
(13, 11, NULL, NULL, 'logout', 23, 24),
(14, 11, NULL, NULL, 'index', 25, 26),
(15, 11, NULL, NULL, 'view', 27, 28),
(16, 11, NULL, NULL, 'add', 29, 30),
(17, 11, NULL, NULL, 'edit', 31, 32),
(18, 11, NULL, NULL, 'delete', 33, 34);

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 6),
(3, NULL, 'Group', 3, NULL, 7, 8),
(4, NULL, 'Group', 4, NULL, 9, 10),
(5, 1, 'User', 1, NULL, 2, 3);

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1');

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=5 ;

INSERT INTO `groups` (`id`, `name`, `created`) VALUES
(1, 'administradores', '2009-04-30 10:14:14'),
(2, 'professores', '2009-04-30 10:14:35'),
(3, 'funciorários', '2009-04-30 10:14:46'),
(4, 'estudantes', '2009-04-30 10:14:50');

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `telefone` char(10) DEFAULT NULL,
  `celular` char(10) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cep` char(8) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `aut_email` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `name`, `rg`, `nascimento`, `telefone`, `celular`, `endereco`, `cep`, `email`, `email2`, `ativo`, `aut_email`) VALUES
(1, '0619540', '5a095cccdba30c16550dc7b2c3a8dc647b829af9', 1, '2009-04-30 10:15:48', 'Gilberto Ferreira Junior', '2546319', '1989-07-20', '6130328552', '6181572457', 'QNE 19 casa 22', '72125190', 'gilbertofjr@gmail.com', 'gilberto.comp@gmail.com', 1, 1);
