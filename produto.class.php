<?php class Produto
{
    public function __construct(private string $nome = "",
    private string $descricao = "", private float $preco = 0.00, private array $categoria = array()){}

    //metodos gets

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }

    //metodo sets

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
    public function setCategoria($categoria)
    {
        $this->categoria[] = $categoria;
    }

}

?>