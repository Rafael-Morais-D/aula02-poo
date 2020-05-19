<?php

    // Chamando a classe abstrata Pessoa com o require_once()
    require_once("./classes/Pessoa.php");

    // Criando uma classe herdeira (que estende) a classe abstrata Pessoa
    class Homem extends Pessoa {

        // Função que retorna o diagnóstico de acordo com o peso 'ideal'
        public function pesoIdeal() {

            // Estamos atrelando o valor do IMC à variável $condicao
            $condicao = $this->calcularIMC();

            // Vamos usar o switch para contemplar os ranges de valores.
            // O switch vai comparar um valor frente aos caso. Então vamos ver se as condições que precisamos usar são true. 
            switch (true) {
                case ($condicao < 16):
                    $condicao = "Desnutrição";
                break;
                case ($condicao < 19):
                    $condicao = "Subnutrição";
                break;
                case ($condicao < 25):
                    $condicao = "Peso Ideal";
                break;
                case ($condicao < 30):
                    $condicao = "Sobrepeso";
                break;
                case ($condicao < 35):
                    $condicao = "Obesidade";
                break;
                case ($condicao < 40):
                    $condicao = "Obesidade Severa";
                break;
                default:
                    $condicao = "Obesidade Mórbida";
                break;
            }

            // Após redefinirmos o valor de $condicao (com a condicional switch) vamos retornar o nosso 'diagnóstico.
            return $condicao;

        }

    }

?>