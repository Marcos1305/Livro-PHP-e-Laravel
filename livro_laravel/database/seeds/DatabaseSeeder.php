<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('ProdutoTableSeeder');
    }

}
class ProdutoTableSeeder extends Seeder
{
    public function run()
    {
        DB::insert('INSERT INTO produtos(nome, quantidade, valor, descricao) VALUES (?,?,?,?)', ['Geladeira', 2, 5.900, 'Side by Side com gelo na porta']);
        DB::insert('INSERT INTO produtos(nome, quantidade, valor, descricao) VALUES (?,?,?,?)', ['Fogão', 5, 950.00, 'Painel automático e forno elétrico']);
        DB::insert('INSERT INTO produtos(nome, quantidade, valor, descricao) VALUES (?,?,?,?)', ['Microondas', 1, 1520.00, 'Manda SMS quando termina de esquentar']);

    }
}
