<?php
class Produto
{
    public function CadastroProduto() //
    {
        if (isset($_SESSION['nivel']) && !empty($_SESSION['nivel']) && isset($_POST) && !empty($_POST)) {

            if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {

                $titulo = $_POST['titulo'];
                $preco = $_POST['preco'];
                $imagem = $_FILES['imagem'];
                $categoria = $_POST['categoria'];
                $descricao = $_POST['descricao'];
                $titulo = htmlspecialchars($titulo); // coverte em string
                $preco = floatval($preco);
                $categoria = htmlspecialchars($categoria);
                $descricao = htmlspecialchars($descricao);

                $nomeCaminho = './assets/img/produtos/' . round(microtime(true)) . '-' . basename($imagem['name']);
                move_uploaded_file($imagem['tmp_name'], $nomeCaminho);


                try {

                    $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $ScriptCadastro = $conn->prepare("INSERT INTO tb_produtos (titulo, imagem, preco, categoria, descricao) VALUES (:titulo, :imagem, :preco, :categoria, :descricao)");
                    $ScriptCadastro->bindParam(':titulo', $titulo);
                    $ScriptCadastro->bindParam(':imagem', $nomeCaminho);
                    $ScriptCadastro->bindParam(':preco', $preco);
                    $ScriptCadastro->bindParam(':categoria', $categoria);
                    $ScriptCadastro->bindParam(':descricao', $descricao);
                    $ScriptCadastro->execute();

                    echo "<script>alert('produto cadastrado');</script>";
                } catch (PDOException) {
                    echo "<script>alert('seguinte deu uma coisa no treco');</script>";
                }
            } else {

                echo "<script>alert('seguinte deu erro');</script>";
            }
        }
    }

    public function ListarProdutos() //
    {
        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $scriptListagemProduto = "SELECT * FROM tb_produtos";
        $resultadoListagemProduto = $conn->query($scriptListagemProduto)->fetchAll();
        return $resultadoListagemProduto;
    }

    public function Listar1Produto($id) //
    {
        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $scriptListar1Produto = "SELECT * FROM tb_produtos WHERE id = {$id}";
        $resultado = $conn->query($scriptListar1Produto)->fetch();
        return $resultado;
    }

    public function FiltroProduto() //
    {
        if (empty($_POST['buscar'])) {

            $buscar = "";
        } else {

            $buscar = $_POST['buscar'];
        }

        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $consulta = $conn->prepare("SELECT * FROM tb_produtos WHERE titulo LIKE :buscar ORDER BY RAND()");

        $buscaComCuringa = "%" . $buscar . "%";
        $consulta->bindParam(':buscar', $buscaComCuringa);
        $result = $consulta->execute();
        $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function DeletarProduto()
    {
        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $scriptDeleteProduto = "DELETE FROM tb_produtos WHERE id = :id";

        $preparo = $conn->prepare($scriptDeleteProduto);

        $preparo->execute([

            // ":id" => $id_delete
        ]);
    }
}