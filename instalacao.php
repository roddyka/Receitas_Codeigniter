
<?php
 mysql_query("CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) COLLATE utf8_bin NOT NULL,
  `slug_categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_categoria`)
)");


mysql_query("INSERT INTO `categorias` (`id_categoria`, `categoria`, `slug_categoria`) VALUES
	(1, 'Sobremesas', 'sobremesas'),
	(2, 'Tornas e Bolos', 'tortas-e-bolos'),
	(3, 'Massas', 'massas'),
	(4, 'Carnes', 'carnes'),
	(5, 'Peixes', 'peixes'),
	(6, 'Receitas Rápidas', 'receitas-rapidas'),
	(7, 'Receitas Light', 'receitas-light'),
	(8, 'Sopas', 'sopas'),
	(9, 'Vegana', 'vegana')");



mysql_query("CREATE TABLE IF NOT EXISTS `receitas` (
  `id_receita` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `slug_receita` varchar(255) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL,
  `categoria` int(10) unsigned NOT NULL,
  `foto` varchar(45) COLLATE utf8_bin NOT NULL,
  `adicionada_quando` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_receita`),
  KEY `categoria` (`categoria`)"
);


mysql_query("INSERT INTO `receitas` (`id_receita`, `nome`, `slug_receita`, `texto`, `categoria`, `foto`, `adicionada_quando`) VALUES
	(1, 'ARROZ COM COUVE-FLOR E CENOURA', 'arroz-com-couve-flor-e-cenoura', 'Ingredientes\r\n2 xícaras de arroz\r\n1 maço grande de couve-flor\r\n1 cenoura grande ralada\r\n5 xícaras de água\r\n1/2 cebola média picada\r\n1 dente de alho amassado\r\n1 pitada de açafrão-da-terra em pó\r\n1 pitada de pimenta-do-reino em pó\r\nsal à gosto\r\n\r\nPreparo\r\nPique a couve-flor em pedaços pequenos. Em um processador ou liquidificador no modo pulsar, triture bem e reserve.\r\nEm uma panela refogue a cebola e o alho com um fio de azeite até dourar. Acrescente o arroz e refogue rapidamente. Adicione em seguida a água, os temperos, a cenoura ralada e a couve-flor triturada. Deixe cozinhar, mexendo de vez em quando, por cerca de 20 minutos.', 6, '1-arroz-com-couve-flor-e-cenoura.jpg', '2017-03-15 00:08:31'),
	(2, 'SHIMEJIS MARINADOS E ASSADOS', 'shimejis-marinados', 'Ingredientes\r\n150 gramas de cogumelo shimeji branco\r\n3 colheres (sopa) de molho shoyu\r\nsuco de 1/2 limão\r\n2 dentes de alho grandes, descascados e picados\r\n2 colheres (sopa) de azeite extravirgem\r\ncebolinha picada à gosto\r\n1 pitada generosa de sal\r\n\r\nPreparo\r\nDeixe os cogumelos recebendo luz do sol direta por 30 a 60 minutos, para que se tornem fonte de vitamina D.\r\nMisture os ingredientes do tempero formando um molho e despeje em um saco plastico para alimentos. Desmanche o “buquê” de cogumelos e coloque-os no saco plastico, feche bem e aperte delicadamente com as mãos para misturá-los bem com os temperos. Deixe marinando na geladeira por 30 a 60 minutos.\r\n\r\nDespeje os cogumelos em uma forma de alumínio ou uma folha grande de alumínio, feche bem e leve para assar em forno médio por cerca de 20 minutos. Sirva como acompanhamento para seus pratos, como recheio para massas e salgados ou em lanches.', 6, '2-shimeji-marinado.jpg', '2017-03-15 00:11:22'),
	(3, 'PATÊ DE AZEITONA', 'pate-facil-azeitonas', 'Ingredientes\r\n1/2 xícara de azeitonas pretas ou verdes picadas\r\n1/4 de xícara de água\r\n3 colheres (sopa) de azeite\r\n3 fatias de pão de forma vegano ou 1 pão francês grande\r\n\r\nPreparo\r\nMisture a água com o azeite; pique o pão bem miúdo e mergulhe na água. Leve todos os ingredientes ao liquidificador (ou processador), batendo no pulsar até que fique homogêneo. Se estiver seco, adicione mais uma pequena quantidade de água, o suficiente para conseguir bater. Conserve em geladeira.\r\nDica: você pode reaproveitar pães amanhecidos nesta receita.', 7, '3-pate-azeitona-facil.jpg', '2017-03-15 00:12:54'),
	(4, 'MOUSSE DE CHOCOLATE', 'mousse-chocolate-vegano', 'Imousse vegano de chocolatengredientes\r\nAprox. 100grs de chocolate meio amargo vegano, picado\r\n4 colheres (sopa) de chocolate em pó\r\n1/2 xícara de tofu amassado\r\n1 xícara de leite de amêndoas ou outro leite vegetal\r\n4 colheres (sopa) de açúcar orgânico\r\n1/2 xícara de água\r\n1 colher (chá) de agar-agar\r\n\r\nPreparo\r\nDerreta o chocolate em banho maria. Misture o àgar-àgar com a água e leve para ferver por 3 minutos, em fogo baixo.\r\nNo liquidificador, começe batendo o leite vegetal com o tofu, o chocolate em pó e o açúcar. Por último, adicione o chocolate derretido e o agar ainda quente. Bata tudo por cerca de 5 minutos. Despeje em taças individuais, ou em recipiente médio para sobremesa. Deixe esfriar e leve para a geladeira por pelo menos 30 minutos. Rende 4 porções.', 1, '4-mousse.jpg', '2017-03-15 00:13:52'),
	(5, 'Ovo Pochê', 'ovo-poche', 'Ingredientes\r\n4 unidade(s) de ovo\r\n1/2 litro(s) de água\r\n2 colher(es) (chá) de sal\r\n1 colher(es) (sobremesa) de vinagre branco\r\n\r\nModo de preparo\r\n1- Coloque a água numa panela e leve ao fogo para ferver, temperando-a com sal e vinagre, assim que isto aconteça. Quebre um ovo numa vasilha à parte e despeje sobre a água fervente. Observe que a água cobre quase todo o ovo, deixando apenas a parte superior da gema descoberta. Isso porque eu queria preparar as gemas moles. Caso as queira duras, coloque mais água.\r\n\r\n2- Deixe-os cozinhar por cerca de um minuto, até que a clara esteja bem branca, sem partes cruas e retire com o auxílio de uma escumadeira. Se gostar, moa pimenta do reino, na hora, sobre os ovos. ', 6, 'ovo-poche.jpg', '2012-01-15 16:50:57'),
	(6, 'Gelatina de laranja com chantilly', 'gelatina-de-laranja-com-chantilly', 'Ingredientes\r\n\r\n    500ml de suco de laranja coado\r\n    200g de açúcar\r\n    4 folhas de gelatina\r\n    4 colheres (sopa) de licor de laranja\r\n    100ml de creme de leite fresco\r\n    Ramos de hortelã\r\n    Óleo de amendoim\r\n\r\nModo de preparo\r\n\r\nColoque a gelatina em água fria por alguns minutos, escorra e esprema bem.\r\nLeve ao fogo 100ml de suco de laranja.\r\nQuando aquecer, acrescente a gelatina e deixe dissolver, mexendo sempre.\r\nAdicione o açúcar e mais 100ml de suco e cozinhe em fogo baixo, misturando de vez em quando.Retire do fogo antes de ferver e junto o suco restante e o licor de laranja.\r\nCoe o líquido em um coador forrado com um pano limpo e deixe amornar.\r\nDivida a gelatina em 4 forminhas ligeiramente untadas com o óleo, deixe esfriar e leve à geladeira por 2 horas.\r\nPouco antes de servir, bata o creme de leite em ponto de chantili e lave as folhas de hortelã.\r\nDesenforme as gelatinas nos pratos e decore com o creme e a hortelã.', 1, 'gelatina-laranja-chantilly.jpg', '2012-01-15 17:00:40'),
	(7, 'Almôndegas de microondas', 'almondegas-de-microondas', 'Ingredientes\r\n\r\nCarne:\r\n1/2 kg de carne moída\r\n1 ovo\r\n1 cebola pequena bem picada\r\n3 colheres (sopa) de salsa picada\r\n1 colher (sopa) de queijo parmesão ralado\r\n2 dentes de alho\r\nSal e pimenta do reino a gosto\r\n\r\nMolho:\r\n1 cebola média picada\r\n1 lata de molho de tomate\r\n1/2 xícara (chá) de água\r\n1 pitada de açúcar\r\nSal e pimenta do reino a gosto\r\n\r\nModo de Preparo\r\n\r\nMisture com as mãos a carne moída com o restante dos ingredientes\r\nTempere com sal e pimenta-do-reino a gosto\r\nFaça bolinhos e achate levemente\r\nColoque-os em um refratário e regue com óleo\r\nLeve ao microondas em potência alta por 8 minutos, pare na metade do tempo para mexer\r\nPrepare o molho e cubra as almôndegas\r\nVolte ao forno por 2 minutos\r\nSirva a seguir', 6, 'almondegas-de-microondas.jpg', '2012-01-15 17:09:10'),
	(8, 'Onion Rings (Anéis Temperados de Cebola)', 'onion-rings', 'Ingredientes\r\n\r\n2 cebolas grandes\r\n2 xícaras de farinha de trigo\r\n2 colheres chá de sal\r\n1 colher chá de pimenta do reino\r\n1/2 xícara maisena\r\n1 xícara de água fria\r\n2 gemas\r\nÓleo suficiente para fritar\r\n1 limão cortado em quatro\r\n\r\nModo de Preparo\r\n\r\nFatie as cebolas em anéis\r\nEm uma tigela média, junte 1/2 xícara de farinha com o sal e a pimenta\r\nPolvilhe os anéis de cebola com a farinha temperada\r\nEm outra tigela, junte o resto da farinha, a maizena, a água e as gemas dos ovos, fazendo uma massa homogênia\r\nEsquente o óleo em uma temperatura de mais ou menos 180º graus\r\nMergulhe na massa os anéis polvilhados\r\nRetire o excesso de massa\r\nMergulhe os anéis no óleo para fritar por 2 a 3 minutos, até ficarem dourados\r\nFica igual aos servidos em churrascarias', 6, 'onion-rings.jpg', '2012-01-15 17:15:56'),
	(9, 'Sopa de Legumes', 'sopa-de-legumes', 'Ingredientes\r\n1 tomate\r\n1 cebola\r\n2 batatas\r\n2 cenouras\r\n1 caldo de legumes\r\n1 colher de chá de margarina\r\nSal a gosto\r\n\r\nModo de Preparo\r\n\r\nCozinhe todas os legumes em 1,5 litros de água.\r\nBata tudo no liquidificador e leve ao fogo novamente para ferver com o caldo e a margarina.', 8, 'sopa-de-legumes.jpg', '2012-01-15 17:20:52')");


