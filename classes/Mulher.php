<?php

    // Chamando a classe abstrata Pessoa com o require_once()
    require_once("./classes/Pessoa.php");

    // Criando uma classe herdeira (que estende) a classe abstrata Pessoa
    class Mulher extends Pessoa {

        // Função que retorna o diagnóstico de acordo com o peso 'ideal'
        public function pesoIdeal() {

            // Estamos atrelando o valor do IMC à variável $condicao
            $condicao = $this->calcularIMC();

            // Vamos usar o switch para contemplar os ranges de valores.
            // O switch vai comparar um valor frente aos caso. Então vamos ver se as condições que precisamos usar são true. 
            switch (true) {
                case ($condicao < 14.5):
                    $condicao = "Desnutrição";
                break;
                case ($condicao < 18.5):
                    $condicao = "Subnutrição";
                break;
                case ($condicao < 24):
                    $condicao = "Peso Ideal";
                break;
                case ($condicao < 29):
                    $condicao = "Sobrepeso";
                break;
                case ($condicao < 34.9):
                    $condicao = "Obesidade";
                break;
                case ($condicao < 39):
                    $condicao = "Obesidade Severa";
                break;
                default:
                    $condicao = "Obesidade Mórbida";
                break;
            }

            // Após redefinirmos o valor de $condicao (com a condicional switch) vamos retornar o nosso 'diagnóstico.
            return $condicao;
            
            /*
             * DESAFIO I
             * 
             * Para a mulher, temos os seguintes diagnósticos:
             * IMC | Condição
             * - 14.5 | Desnutrição
             * - 18.5 | Subnutrição
             * - 24 | Peso Ideal
             * - 29 | Sobrepeso
             * - 34.9 | Obesidade
             * - 39 | Obesidade Severa
             * + 39 | Obesidade Mórbida
             * 
             *  > COMO PODEMOS CRIAR ESSA REGRA DE FORMA QUE NOS RETORNE O DIAGNÓSTICO A PARTIR DO IMC
            */

        }

    }

?>