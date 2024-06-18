CREATE TABLE tb_categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome int
);

INSERT INTO tb_categoria (nome) VALUE ('lanche');
INSERT INTO tb_categoria (nome) VALUE ('combo');
INSERT INTO tb_categoria (nome) VALUE ('porcoes');
INSERT INTO tb_categoria (nome) VALUE ('bebidas');
INSERT INTO tb_categoria (nome) VALUE ('doces');

CREATE TABLE tb_produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150),
    preco DECIMAL(4, 2),
    imagem VARCHAR(200),
    categoria INT
);

INSERT INTO tb_produto (titulo, preco, imagem, categoria) VALUE ('Hamburguer Kids', 15.90, 'hmbSimples.png', 1);
INSERT INTO tb_produto (titulo, preco, imagem, categoria) VALUE ('Hamburguer Completo', 29.90, 'hmbCompleto.png', 1);
INSERT INTO tb_produto (titulo, preco, imagem, categoria) VALUE ('Hamburguer Extra Queijo', 35.00, 'hmbQueijo.png', 1);
