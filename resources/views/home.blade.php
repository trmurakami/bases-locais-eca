@extends('template')
@section('conteudo')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Bases Locais ECA/USP</h1>
        <p class="col-lg-10 fs-4">Base SONORA</p>
    </div>
    <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="result">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Digite o termo da pesquisa" name="search">
            <label for="floatingPassword">Pesquisar</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Buscar</button>
        <hr class="my-4">
        <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>
    </div>
    </div>
</div>
@stop
