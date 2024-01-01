@extends('layouts.app')

@section('content')
<div id="container">
    <div id="cadastro"  class=" bg-gray-900 dark:bg-gray-800">
        <h2 class=" mb-4 items-center justify-center text-3xl font-extrabold text-white bg-gray-900 p-3">Cadastrar<span class="bg-blue-100 text-blue-800 text-base font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">CONTA</span></h2>
        
            <form  id="form-cadastro" action="{{ url('/cadastrar-conta') }}" method="POST">
                @csrf
                
                    
                    <select id="jogo-select" class="10 selectpicker bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Selecione um jogo</option>
                    <option value="novo">Novo jogo</option>
                    </select>
                

                
                    <input type="text" id="novo-jogo-input" name="novo_jogo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="display: none;" placeholder="Nome do novo jogo" required>
                
                
                
                    <input type="text" id="usuario" name="usuario" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="Nome do usuario da Conta" required>
                    
                    
                    <input type="password" id="senha" name="senha" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="Nome do usuario da Conta" required>
                    

                    <button type="submit" id="btn-cadastrar" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</button>
             </form>

            <div id="msg-cadastro"></div>
        </div>

        <div id="pesquisa" class="bg-gray-900 dark:bg-gray-800">
        <h2 class="mb-4 items-center justify-center text-3xl font-extrabold text-white bg-gray-900  p-3">Pesquisar<span class="bg-blue-100 text-blue-800 text-base font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">CONTAS</span></h2>

            <div class="search-input">
                <form id="form-pesquisa" method="POST">
                    @csrf
                    
                    
                    <input type="text" id="jogoInput" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Digite o nome do jogo">
                    
                    <div id="suggestions"></div>
                    
                  
                </form>
            </div>

            <div id="msg-pesquisa"></div>
            <div id="resultado"></div>
        </div>
    </div>  
@endsection
@push('scripts')
@endpush