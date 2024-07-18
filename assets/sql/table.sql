CREATE TABLE tb_categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome int
);

INSERT INTO tb_categorias (nome) VALUE ('lanche');
INSERT INTO tb_categorias (nome) VALUE ('combo');
INSERT INTO tb_categorias (nome) VALUE ('porcoes');
INSERT INTO tb_categorias (nome) VALUE ('bebidas');
INSERT INTO tb_categorias (nome) VALUE ('doces');

CREATE TABLE tb_produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150),
    preco DECIMAL(4, 2),
    imagem VARCHAR(200),
    categoria INT,
    descricao VARCHAR(255)
);

INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer Kids', 15.90, 'hmbSimples.png', 1, 'Delicioso hamburguer kids, perfeito para os pequenos. Sabor inesquecível em tamanho reduzido.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer Completo', 29.90, 'hmbCompleto.png', 1, 'Hamburguer completo com todos os ingredientes que você adora. Uma refeição completa em cada mordida.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer Extra Queijo', 35.00, 'hmbQueijo.png', 1, 'Hamburguer com extra queijo, perfeito para os amantes de queijo. Uma explosão de sabor.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer com Cogumelos', 45.90, 'hmbCogumelo.png', 1, 'Hamburguer suculento com cogumelos frescos. Um toque gourmet para o seu paladar.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer Preto', 15.90, 'hambPreto.png', 1, 'Hamburguer preto, uma opção diferente e deliciosa. Surpreenda-se com o sabor único.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer Nutella', 29.90, 'hmbdoce.png', 1, 'Hamburguer com Nutella, uma combinação irresistível de doce e salgado. Para os amantes de novidades.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer Bacon', 35.00, 'hmbQueijo.png', 1, 'Hamburguer com bacon crocante, o toque perfeito de sabor defumado. Uma delícia a cada mordida.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer com Fritas', 45.90, 'hmbFritas.png', 1, 'Hamburguer acompanhado de fritas crocantes. A combinação clássica que nunca falha.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer de Costela', 48.90, 'hambcostela.jpeg', 1, 'Hamburguer de costela, suculento e saboroso. Um verdadeiro deleite para os amantes de carne.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer Extra Cebola', 32.00, 'hmbesxtracebola.jpeg', 1, 'Hamburguer com extra cebola, perfeito para quem ama o sabor marcante da cebola.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer Super Carne', 85.90, 'hmbsuper.jpeg', 1, 'Hamburguer super carne, para os verdadeiros amantes de carne. Uma experiência única e saborosa.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Hamburguer Breakfest', 18.90, 'hmbbreakfest.jpeg', 1, 'Hamburguer breakfest, ideal para começar o dia com energia. Delicioso e nutritivo.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Combo Simples', 28.90, 'combosimples.jpeg', 2, 'Combo simples, ideal para quem busca uma refeição prática e saborosa. Satisfação garantida.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Combo 2 pessoas', 59.90, 'combo2pessoas.jpg', 2, 'Combo para 2 pessoas, perfeito para compartilhar com alguém especial. Sabores que combinam.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Combo Cevada', 45.00, 'combosevada.jpg', 2, 'Combo cevada, uma combinação especial para os amantes de cevada. Sabor incomparável.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Combo 3 mini hambs', 55.90, 'combo3minis.jpg', 2, 'Combo com 3 mini hamburgueres, uma opção versátil e deliciosa. Experimente todos os sabores.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Combo KiGuaranads', 28.90, 'comboguarana.jpg', 2, 'Combo com guaraná, uma combinação refrescante e saborosa. Perfeito para qualquer ocasião.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Combo Milkshake Completo', 49.90, 'combomilk.jpg', 2, 'Combo com milkshake completo, ideal para os amantes de doces. Delicioso e refrescante.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Combo X-salada', 17.00, 'comboxsalada.jpg', 2, 'Combo X-salada, uma opção saudável e saborosa. Perfeito para uma refeição equilibrada.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Combo 2 por 1', 32.90, 'combo2por1.jpg', 2, 'Combo 2 por 1, uma promoção imperdível para compartilhar com amigos. Duas vezes mais sabor.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Combo jack daniels', 95.90, 'combojack.jpg', 2, 'Combo Jack Daniels, para os apreciadores de um bom drink. Sabor sofisticado.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Combo 2 salgados 1 doce', 76.90, 'combo21doce.jpg', 2, 'Combo com 2 salgados e 1 doce, uma combinação perfeita para todos os gostos. Delicie-se.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Combo Dark', 55.00, 'combodark.jpg', 2, 'Combo Dark, uma experiência única e misteriosa. Sabores intensos e marcantes.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Triplo e mais', 15.90, 'tripledark.jpg', 2, 'Triplo e mais, uma explosão de sabores em um único combo. Experimente a novidade.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Batata frita', 5.90, 'batatafrita.jpg', 3, 'Batata frita crocante, um acompanhamento perfeito para qualquer refeição. Simplesmente delicioso.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Onions Rigs', 7.90, 'onionrigs.jpg', 3, 'Onion rings crocantes, um petisco irresistível para compartilhar com amigos.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('12 Fragos fritos', 25.00, 'fragofrito.jpg', 3, '12 frangos fritos, perfeitos para uma refeição completa ou para compartilhar. Sabor inigualável.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Batata recheada', 17.90, 'bttchedar.jpg', 3, 'Batata recheada, uma combinação de sabores que vai te surpreender. Saborosa e nutritiva.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Torresmo', 5.90, 'torresmo.jpg', 3, 'Torresmo crocante, uma delícia brasileira que você vai adorar. Perfeito para petiscar.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Banana Frita', 4.90, 'bannafrita.jpg', 3, 'Banana frita, uma opção diferente e deliciosa. Surpreenda-se com o sabor único.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Bolinha Extra Queijo', 12.00, 'bolinhaqueijo.png', 3, 'Bolinha de extra queijo, um petisco saboroso e irresistível. Perfeito para qualquer hora.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Linguica', 11.90, 'linguiçia.jpg', 3, 'Linguiça suculenta, um petisco clássico e delicioso. Ideal para compartilhar.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Salada gurme', 15.90, 'gurmetsalda.jpg', 3, 'Salada gourmet, uma opção saudável e saborosa. Perfeita para uma refeição leve.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Macarrao', 29.90, 'risotodemacarrao.jpg', 3, 'Macarrão delicioso, uma refeição completa e saborosa. Perfeito para qualquer ocasião.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Saladinha do mal', 305.00, 'saldiinha.jpg', 3, 'Saladinha do mal, uma opção ousada e deliciosa. Para quem busca algo diferente.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Saladinha do chefe', 450.90, 'salsadachefe.jpg', 3, 'Saladinha do chefe, uma combinação exclusiva e saborosa. Perfeita para momentos especiais.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Suco de laranja com abacaxi', 9.90, 'laranjaAbacaxi.png', 4, 'Suco de laranja com abacaxi, uma combinação refrescante e saudável. Perfeito para qualquer momento.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Suco de laranja', 9.90, 'sucolaranja.png', 4, 'Suco de laranja natural, refrescante e saudável. Perfeito para qualquer momento.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Cha com cafe', 11.90, 'chacafe.png', 4, 'Chá com café, uma combinação única e saborosa. Perfeito para qualquer hora do dia.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Fanta xing-ling', 7.90, 'fantaxingling.jpg', 4, 'Fanta xing-ling, uma opção diferente e saborosa. Experimente e surpreenda-se.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('coquinha gelada', 15.90, 'coquinha.jpg', 4, 'Coquinha gelada, refrescante e saborosa. Perfeita para qualquer momento.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('spite', 9.90, 'spite.jpg', 4, 'Spite, uma opção refrescante e saborosa. Ideal para qualquer ocasião.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Suco de coca', 3500.00, 'pepsi.jpg', 4, 'Suco de coca, uma opção diferente e única. Perfeito para os aventureiros do sabor.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Redbull da asas', 11.90, 'redbull.jpg', 4, 'Redbull da asas, energético e refrescante. Perfeito para dar um impulso extra.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Monster', 1.90, 'mlhrmonter.jpg', 4, 'Monster, uma opção energética e saborosa. Ideal para qualquer momento.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Monster Red', 9.90, 'monsterred.jpg', 4, 'Monster Red, energético e refrescante. Perfeito para dar um impulso extra.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Agua voss', 50.00, 'voss.jpg', 4, 'Água Voss, pura e refrescante. Ideal para hidratação com estilo.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('coca-zero', 5.90, 'cocazero.png', 4, 'Coca-zero, refrescante e sem açúcar. Perfeita para qualquer momento.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Cerveja skol 1L', 22.90, 'cerveja.jpg', 4, 'Cerveja Skol 1L, refrescante e saborosa. Ideal para compartilhar com amigos.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Balde de Heiniken', 79.90, 'baldehei.png', 4, 'Balde de Heineken, perfeito para festas e celebrações. Compartilhe com os amigos.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('caipirinha', 15.90, 'caipirinha.png', 4, 'Caipirinha, o clássico drink brasileiro. Refrescante e saboroso.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Drink de açai c/ Vodka', 9.90, 'drinkaçai.jpg', 4, 'Drink de açaí com vodka, uma combinação exótica e deliciosa. Perfeito para qualquer ocasião.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Cerveja Corona', 11.90, 'corona.jpg', 4, 'Cerveja Corona, refrescante e saborosa. Ideal para qualquer momento.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Black label', 209.90, 'blacklabel.jpg', 4, 'Black Label, um whisky sofisticado e encorpado. Perfeito para momentos especiais.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Jack Daniels', 350.00, 'jackdaniels.jpg', 4, 'Jack Daniels, um whisky clássico e saboroso. Perfeito para apreciadores.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Bebida jameson', 450.90, 'jameson.jpg', 4, 'Bebida Jameson, um whisky irlandês de qualidade. Perfeito para momentos especiais.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Jose corvo', 50.90, 'josecorvo.jpg', 4, 'José Cuervo, uma tequila de sabor inconfundível. Ideal para festas.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Garrafa LA-brisa', 89.90, 'labrisa.jpg', 4, 'Garrafa La-Brisa, um vinho sofisticado e saboroso. Perfeito para momentos especiais.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Vinho Carvão', 102.00, 'vinhocarvao.jpg', 4, 'Vinho Carvão, um vinho encorpado e saboroso. Ideal para ocasiões especiais.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Smirnoff', 45.90, 'Smirnoff.jpg', 4, 'Smirnoff, uma vodka clássica e versátil. Perfeita para qualquer ocasião.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Brigadeiro', 3.90, 'brigadeiro.jpg', 5, 'Brigadeiro, um doce brasileiro clássico e irresistível. Perfeito para qualquer momento.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Chocolate c/ framboesa', 19.90, 'chomornago.jpg', 5, 'Chocolate com framboesa, uma combinação perfeita de sabores. Delicioso e sofisticado.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Rosquinha de Chocolate', 10.00, 'roscacho.jpg', 5, 'Rosquinha de chocolate, um doce clássico e saboroso. Perfeito para qualquer hora.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Sorvete de creme', 18.90, 'taçasorvete.png', 5, 'Sorvete de creme, uma sobremesa clássica e refrescante. Perfeita para qualquer momento.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Sorvete de morango', 15.90, 'sorvetemorango.jpg', 5, 'Sorvete de morango, uma sobremesa deliciosa e refrescante. Ideal para qualquer hora.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Brownie de chocolate', 22.90, 'brownie.png', 5, 'Brownie de chocolate, uma sobremesa rica e saborosa. Perfeita para os amantes de chocolate.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Panqueca Doce', 8.90, 'panquecadoce.png', 5, 'Panqueca doce, uma sobremesa deliciosa e versátil. Perfeita para qualquer momento.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Musse com Mertilos', 27.90, 'musseframb.png', 5, 'Musse com mirtilos, uma sobremesa leve e saborosa. Ideal para qualquer ocasião.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Cupcake roxo', 15.90, 'cupcake.png', 5, 'Cupcake roxo, um bolinho divertido e delicioso. Perfeito para qualquer momento.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Macarrons de Chocolate', 9.90, 'macarronsbranco.png', 5, 'Macarons de chocolate, uma sobremesa sofisticada e deliciosa. Perfeita para qualquer ocasião.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Sorvete Magnum', 11.00, 'magnumcomcobertura.png', 5, 'Sorvete Magnum, uma sobremesa indulgente e deliciosa. Perfeita para qualquer momento.');
INSERT INTO tb_produtos (titulo, preco, imagem, categoria, descricao) VALUE ('Milk-shake de chocolate', 17.90, 'milkshake.png', 5, 'Milk-shake de chocolate, uma bebida deliciosa e refrescante. Perfeita para qualquer hora.');

CREATE TABLE tb_usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    usuario VARCHAR(100),
    senha VARCHAR(100),
    id_pessoa INT NOT NULL
);

INSERT INTO tb_usuarios (nome, usuario, senha, id_pessoa)
VALUES
    ('admin', 'admin@gmail.com', 'admin', '1'),
    ('ana', 'ana@gmail.com', 'ana123', '2'),
    ('carlos', 'carlos@gmail.com', 'carlos123', '3'),
    ('maria', 'maria@gmail.com', 'maria123', '4'),
    ('jose', 'jose@gmail.com', 'jose123', '5'),
    ('joão', 'joão@gmail.com', 'joão123', '6'),
    ('luciana', 'luciana@gmail.com', 'luciana123', '7'),
    ('felipe', 'felipe@gmail.com', 'felipe123', '8'),
    ('roberta', 'roberta@gmail.com', 'roberta123', '9'),
    ('gabriel', 'gabriel@gmail.com', 'gabriel123', '10'),
    ('patricia', 'patricia@gmail.com', 'patricia123', '11');

    
CREATE TABLE tb_pessoas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    ano_nascimento YEAR(4),
    cpf VARCHAR(11),
    telefone_1 VARCHAR(15)
);

INSERT INTO tb_pessoas (nome, ano_nascimento, cpf, telefone_1)
VALUES
    ('guilherme', '2008', '123.456.789', '(11) 1111-1111'),
    ('ana', '1985', '987.654.321-00', '(22) 9876-5432'),
    ('carlos', '2000', '234.567.890-12', '(33) 2345-6789'),
    ('maria', '1993', '876.543.210-98', '(44) 8765-4321'),
    ('jose', '1980', '345.678.901-23', '(55) 3456-7890'),
    ('joão', '1995', '765.432.109-87', '(66) 7654-3210'),
    ('luciana', '1988', '456.789.012-34', '(77) 4567-8901'),
    ('felipe', '2005', '654.321.098-76', '(88) 6543-2109'),
    ('roberta', '1990', '567.890.123-45', '(99) 5678-9012'),
    ('gabriel', '1987', '543.210.987-65', '(00) 5432-1098'),
    ('patricia', '2002', '890.123.456-78', '(12) 8901-2345');

    CREATE TABLE tb_vendas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    data_venda DATETIME NOT NULL,
    id_pessoa INT NOT NULL,
    id_produto INT NOT NULL,
    quantidade INT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);