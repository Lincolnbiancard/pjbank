<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'descricaoProduto'       => 'Corona',
                    'qtdeProduto'          => 10,
                    'precoProduto'         => 11.50,
                ],
                [
                    'descricaoProduto'       => 'Skol Beats',
                    'qtdeProduto'          => 5,
                    'precoProduto'         => 15.50,
                ],
                [
                    'descricaoProduto'       => 'Carne Patinho',
                    'qtdeProduto'          => 500,
                    'precoProduto'         => 19.99,
                ],
                [
                    'descricaoProduto'       => 'Caldo Knor',
                    'qtdeProduto'          => 10,
                    'precoProduto'         => 2.50,
                ], 
                [
                    'descricaoProduto'       => 'Coca-cola',
                    'qtdeProduto'          => 10,
                    'precoProduto'         => 7.50,
                ],
                [
                    'descricaoProduto'       => 'Amaciante',
                    'qtdeProduto'          => 5,
                    'precoProduto'         => 7,
                ],
                [
                    'descricaoProduto'       => 'Creme dental Colgate',
                    'qtdeProduto'          => 10,
                    'precoProduto'         => 3.50,
                ],
                [
                    'descricaoProduto'       => 'Maçã kg',
                    'qtdeProduto'          => 10,
                    'precoProduto'         => 3.50,
                ],
                [
                    'descricaoProduto'       => 'Tomate kg',
                    'qtdeProduto'          => 20,
                    'precoProduto'         => 5,
                ],
                [
                    'descricaoProduto'       => 'Pente de cabelo',
                    'qtdeProduto'          => 5,
                    'precoProduto'         => 10,
                ],
                [
                    'descricaoProduto'       => 'Gillete Prestobarba',
                    'qtdeProduto'          => 7,
                    'precoProduto'         => 17.50,
                ],
                [
                    'descricaoProduto'       => 'Bonno biscoito',
                    'qtdeProduto'          => 10,
                    'precoProduto'         => 3.50,
                ],
                [
                    'descricaoProduto'       => 'Passatempo biscoito',
                    'qtdeProduto'          => 10,
                    'precoProduto'         => 2.50,
                ],
                [
                    'descricaoProduto'       => 'Fanta Uva',
                    'qtdeProduto'          => 10,
                    'precoProduto'         => 5.50,
                ],
                [
                    'descricaoProduto'       => 'Fanta LAranja',
                    'qtdeProduto'          => 10,
                    'precoProduto'         => 5.50,
                ],
                [
                    'descricaoProduto'       => 'Ração pra cachrro',
                    'qtdeProduto'          => 6,
                    'precoProduto'         => 22.50,
                ],
                [
                    'descricaoProduto'       => 'Xicara de vidro',
                    'qtdeProduto'          => 2,
                    'precoProduto'         => 7.50,
                ],
                [
                    'descricaoProduto'       => 'Chocotone Bauduco',
                    'qtdeProduto'          => 5,
                    'precoProduto'         => 12,
                ],
                [
                    'descricaoProduto'       => 'Frango kg',
                    'qtdeProduto'          => 30,
                    'precoProduto'         => 25.50,
                ],
                [
                    'descricaoProduto'       => 'Mouse microsft',
                    'qtdeProduto'          => 10,
                    'precoProduto'         => 15,
                ],  
        ]);
        
        }
    }

