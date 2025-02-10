<div class="container-fluid">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Nova demanda Demanda</h3>
            </div>
            <!-- form start -->
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Descrição</label>
                                <input type="text" class="form-control" name="descricao" value="">
                                <input type="hidden" name="tipo" value="1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Descrição Web</label>
                                <input type="text" class="form-control" name="descricao_web" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Grupo</label>
                                <input type="text" class="form-control" name="grupo" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Área</label>
                                <input type="text" class="form-control" id="" name="area" value="">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Atendimento</label>
                                <input type="text" class="form-control" id="" name="atendimento" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Prazo</label>
                                <input type="text" class="form-control" id="" name="prazo" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ativo</label>
                                <input type="text" class="form-control" id="" name="ativo" value="1">
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
