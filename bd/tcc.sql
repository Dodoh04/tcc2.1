
create database Tcc;


CREATE TABLE IF NOT EXISTS `Tcc`.`produtos` (
  `IdProduto` int NOT NULL AUTO_INCREMENT,
  `NomeProd` varchar(50) NOT NULL,
  `QtndProd` int NOT NULL,
  `DataVenci` date NOT NULL,
  `Fabricante` varchar(50) NOT NULL,
  `TipoProd` varchar(50) NOT NULL,            
  `Medidas` varchar(50) NOT NULL, 
  `Descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`IdProduto`)
);


INSERT INTO `tcc`.`produtos` (`IdProduto`, `NomeProd`, `QtndProd`, `DataVenci`, `Fabricante`, `TipoProd`, `Medidas`, `Descricao`)
VALUES(NULL, 'Glifage XR', 32, '2023-07-19','Merck', 'Genérico' ,'500 mg', 'É indicado para tratar diabetes tipo 2'),
(NULL, 'Ibupril ', 50, '2023-09-15','Teuto', 'Genérico' ,'600 mg', 'Comprimidos age contra inflamação, dor e febre.'),
(NULL, 'Analgésico Dorflex Sanofi', 47, '2023-10-30', 'Dorflex' ,'Original' ,'300 mg', 'É utilizado para o tratamento de dores no corpo, associadas à contraturas musculares, processos traumáticos ou inflamatórios.');


CREATE TABLE IF NOT EXISTS `Tcc`.`usuario`(
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `nivelAcess` varchar(15) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE KEY `senha` (`senha`)
);

INSERT INTO `Tcc`.`usuario`(`cpf`, `nome`, `sobrenome`, `telefone`, `estado`, `cidade`, `endereco`, 
`nivelAcess`, `sexo`, `email`, `senha`)
VALUES ('11111111111', 'Douglas', 'Oliveira', '11977445566', 'São Paulo' ,'São Paulo', 'Rua Amador Bueno, 35', 'Administrador', 'Masculino', 'douglasAdm@test.com', 'adm'),
('22222222222', 'Cliente', 'Teste', '11977415563', 'São Paulo','Itapecerica da serra',  'Rua João Nunes, 5','Cliente', 'Feminino', 'testCliente@.com', 'cliente'),
('12345678912', 'Julio', 'Medeiros', '11967112533', 'São Paulo','Embu Guaçu',  'Rua Alvaro Meto, 5','Cliente', 'Masculino', 'julio@gmail.com', '9856'),
('78495612345', 'João', 'Italo', '11932415873', 'São Paulo','Cipó',  'Rua Marques Heit, 5','Cliente', 'Masculino', 'joao@gmail.com', '3456'),
('78496531497', 'Mateus', 'Souza', '11971094563', 'São Paulo','Parelheiros',  'Rua Magno Jorge, 5','Farmaceutico', 'Masculino', 'mateus@gmail.com', '784596');
COMMIT;



