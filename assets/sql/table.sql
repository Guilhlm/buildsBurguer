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
    categoria INT
);

INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer Kids', 15.90, 'hmbSimples.png', 1);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer Completo', 29.90, 'hmbCompleto.png', 1);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer Extra Queijo', 35.00, 'hmbQueijo.png', 1);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer com Cogumelos', 45.90, 'hmbCogumelo.png', 1);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer Preto', 15.90, 'hambPreto.png', 1);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer Nutella', 29.90, 'hmbCompleto.png', 1);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer Bacon', 35.00, 'hmbQueijo.png', 1);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer com Fritas', 45.90, 'hmbFritas.png', 1);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer de Costela', 48.90, 'hambcostela.jpeg', 1);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer Extra Cebola', 32.00, 'hmbesxtracebola.jpeg', 1);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer Super Carne', 85.90, 'hmbsuper.jpeg', 1);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Hamburguer Breakfest', 18.90, 'hmbbreakfest.jpeg', 1);

INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Combo Simples', 28.90, 'combosimples.jpeg', 2);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Combo 2 pessoas', 59.90, 'combo2pessoas.jpg', 2);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Combo Cevada', 45.00, 'combosevada.jpg', 2);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Combo 3 mini hambs', 55.90, 'combo3minis.jpg', 2);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Combo KiGuaranads', 28.90, 'comboguarana.jpg', 2);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Combo Milkshake Completo', 49.90, 'combomilk.jpg', 2);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Combo X-salada', 17.00, 'comboxsalada.jpg', 2);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Combo 2 por 1', 32.90, 'combo2por1.jpg', 2);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Combo jack daniels', 95.90, 'combojack.jpg', 2);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Combo 2 salgados 1 doce', 76.90, 'combo21doce.jpg', 2);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Combo Dark', 55.00, 'combodark.jpg', 2);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Triplo e mais', 15.90, 'tripledark.jpg', 2);

INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Batata frita', 5.90, 'batatafrita.jpg', 3);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Onions Rigs', 7.90, 'onionrigs.jpg', 3);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('12 Fragos fritos', 25.00, 'fragofrito.jpg', 3);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Batata recheada', 17.90, 'bttchedar.jpg', 3);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Torresmo', 5.90, 'torresmo.jpg', 3);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Banana Frita', 4.90, 'bannafrita.jpg', 3);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Bolinha Extra Queijo', 12.00, 'bolinhaqueijo.png', 3);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Linguica', 11.90, 'linguiçia.jpg', 3);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Salada gurme', 15.90, 'gurmetsalda.jpg', 3);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Macarrao', 29.90, 'risotodemacarrao.jpg', 3);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Saladinha do mal', 305.00, 'saldiinha.jpg', 3);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Saladinha do chefe', 450.90, 'salsadachefe.jpg', 3);

INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Suco de laranja com abacaxi', 9.90, 'laranjaAbacaxi.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Suco de laranja', 9.90, 'sucolaranja.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Cha com cafe', 11.90, 'chacafe.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Fanta xing-ling', 7.90, 'fantaxingling.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('coquinha gelada', 15.90, 'coquinha.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('spite', 9.90, 'spite.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Suco de coca', 3500.00, 'pepsi.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Redbull da asas', 11.90, 'redbull.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Monster', 1.90, 'mlhrmonter.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Monster Red', 9.90, 'monsterred.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Agua voss', 50.00, 'voss.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('coca-zero', 5.90, 'cocarzero.png', 4);

INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Cerveja skol 1L', 22.90, 'cerveja.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Balde de Heiniken', 79.90, 'baldehei.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('caipirinha', 15.90, 'caipirinha.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Drink de açai c/ Vodka', 9.90, 'drinkaçai.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Cerveja Corona', 11.90, 'corona.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Black label', 209.90, 'blacklabel.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Jack Daniels', 350.00, 'jackdaniels.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Bebida jameson', 450.90, 'jameson.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Jose corvo', 50.90, 'josecorvo.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Garrafa LA-brisa', 89.90, 'labrisa.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Vinho Carvão', 102.00, 'vinhocarvao.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Smirnoff', 45.90, 'Smirnoff.jpg', 4);


INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Brigadeiro', 3.90, 'brigadeiro.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Chocolate c/ framboesa', 19.90, 'chomornago.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Rosquinha de Chocolate', 10.00, 'roscacho.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Sorvete de creme', 18.90, 'taçasorvete.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Sorvete de morango', 15.90, 'sorvetemorango.jpg', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Brownie de chocolate', 22.90, 'brownie.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Panqueca Doce', 8.90, 'panquecadoce.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Musse com Mertilos', 27.90, 'musseframb.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Cupcake roxo', 15.90, 'cupcake.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Macarrons de Chocolate', 9.90, 'macarronsbranco.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Sorvete Magnum', 11.00, 'magnumcomcobertura.png', 4);
INSERT INTO tb_produtos (titulo, preco, imagem, categoria) VALUE ('Milk-shake de chocolate', 17.90, 'milkshake.png', 4);

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