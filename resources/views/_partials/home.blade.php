<div class="container-fluid">
    <div class="col-md-6 col-md-offset-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Demandas</h3>
            </div>
            <!-- form start -->
            <form action="{{ route('detalhes') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tipo</label>
                                <select class="form-control" name="tipo">
                                    <option value="1">Código da Demanda</option>
                                    <option value="2">Descrição da Demanda</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Info</label>
                                <input type="text" class="form-control" name="info" value="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{ route('cadastro') }}" class="btn btn-outline-secondary">Cadastrar</a>
                    <button type="submit" class="btn btn-primary float-right">Localizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
