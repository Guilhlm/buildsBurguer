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

CREATE TABLE tb_usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    usuario VARCHAR(100),
    senha VARCHAR(100)
);

INSERT INTO tb_usuarios (nome, usuario, senha)
VALUES
    ('guilherme', 'guilherme@gmail.com', 'senha'),
    ('admin', 'admin@gmail.com', 'admin');