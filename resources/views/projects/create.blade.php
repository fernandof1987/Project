@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        

    <form class="form-horizontal" method="post" action="{{ route('projects.store') }}">
        <fieldset>

        <!-- Form Name -->
            <legend>Novo Projeto</legend>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nome</label>  
                <div class="col-md-4">
                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Descrição</label>
                <div class="col-md-4">                     
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="notes">Notas</label>
                <div class="col-md-4">                     
                    <textarea class="form-control" id="notes" name="notes"></textarea>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Prioridade</label>
                <div class="col-md-4">
                    <select id="priority" name="priority" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="salvar"></label>
                <div class="col-md-4">
                    <button class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </fieldset>
    </form>
    
    </div>
    
@endsection