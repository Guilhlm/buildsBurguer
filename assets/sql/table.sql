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