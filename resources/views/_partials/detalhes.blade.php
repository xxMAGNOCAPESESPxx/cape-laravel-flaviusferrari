<div class="container-fluid">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Detalhes da Demanda</h3>
            </div>
            <!-- form start -->
            <form action="{{ route('edit') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Código</label>
                                <input type="text" class="form-control" id="" name="codigo" value="{{ $demanda->codigo }}">
                                <input type="hidden" name="tipo" value="{{ $demanda->tipo->codigo }}">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Descrição</label>
                                <input type="text" class="form-control" name="descricao" value="{{ $demanda->descricao }}">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Descrição Web</label>
                                <input type="text" class="form-control" name="descricao_web" value="{{ $demanda->descricaoweb }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Grupo</label>
                                <input type="text" class="form-control" name="grupo_name" value="{{ $demanda->grupo->descricao }}">
                                <input type="hidden" class="form-control" name="grupo" value="{{ $demanda->grupo->codigo }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Área</label>
                                <input type="text" class="form-control" id="" name="area_name" value="{{ $demanda->area->descricao }}">
                                <input type="hidden" class="form-control" id="" name="area" value="{{ $demanda->area->codigo }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Atendimento</label>
                                <input type="text" class="form-control" id="" name="atendimento_name" value="{{ $demanda->atendimento->descricao }}">
                                <input type="hidden" name="atendimento" value="{{ $demanda->atendimento->codigo }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Prazo</label>
                                <input type="text" class="form-control" id="" name="prazo" value="{{ $demanda->prazo }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ativo</label>
                                <input type="text" class="form-control" id="" name="ativo_name" value="{{ $demanda->ativo->descricao }}">
                                <input type="hidden" name="ativo" value="{{ $demanda->ativo->codigo }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{ route('home') }}" class="btn btn-outline-secondary">Voltar</a>
                    <button type="submit" class="btn btn-success float-right">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
