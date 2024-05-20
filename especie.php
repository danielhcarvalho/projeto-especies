<?php

    class Especie 
    {
        private $nome = "";
        private $familia = "";
        private $quantidade = 0;
        private $peso = 0.0;

        public function __construct($nome, $familia, $quantidade, $peso)
        {
            $this->nome = strtoupper($nome);
            $this->familia = strtoupper($familia);
            $this->quantidade = $quantidade;
            $this->peso = $peso;

        }

        public function salvar() 
        {
            if($this->nome != "" && $this->familia != "" && $this->quantidade > 0 && $this->peso > 0.0)
            {
            $con = new mysqli("localhost", "root", "", "devweb2_1etapa_prova_final");
            $stmt = $con->prepare('INSERT INTO especies(nome, familia, quantidade, peso) VALUES (?, ?, ?, ?)');
            $stmt->bind_param('ssid', $this->nome, $this->familia, $this->quantidade, $this->peso);
            $stmt->execute();
            $stmt->close();
            $con->close();

            echo "Dados registrados com sucesso!";
            }
            else 
            {
                echo "Nenhum dos campos podem estar vazios!";
            }

        }

        public function get_nome()
        {
            return $this->nome;
        }
        public function get_familia()
        {
            return $this->familia;
        }
        public function get_quantidade()
        {
            return $this->quantidade;
        }
        public function get_peso()
        {
            return $this->peso;
        }
}
?>