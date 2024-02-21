@extends('layout.base')

@section('title', 'Cadastro de usuário')

@section('content', '')
    <form action="{{route('salvar')}}" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"/>

        <div class="field">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"/>

        <div class="field">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha"/>
        </div>

        <div class="btn">
            <button type="submit">Salvar</button>
        </div>
    </form>
@endsection
