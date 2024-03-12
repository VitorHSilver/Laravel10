<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    // Listar as Contas
    public function index()
    {
        //retornará uma view(pagina)
        return view('contas.index');
    }
    // Detalhes da conta
    public function show()
    {
        //retornará uma view(pagina)
        return view('contas.show');
    }
    // Carregar o formulário cadastrar nova conta
    public function create()
    {
        //retornará uma view(pagina)
        return view('contas.create');
    }
    // Cadastrar no banco dse dados nova conta
    public function store()
    {
        //retornará uma view(pagina)
        dd("Cadastrar");
    }
    // Carregar o formulario editar a conta
    public function edit()
    {
        //retornará uma view(pagina)
        return view('contas.edit');
    }
    // editar no banco de dados a conta
    public function update()
    {
        dd("Editar");
    }
    // excluir a conta do banco de dados
    public function delete()
    {
        //retornará uma view(pagina)
        dd("Apagar");
    }
}
