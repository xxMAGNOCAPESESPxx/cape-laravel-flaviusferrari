@extends('layout.basico')

@section('content')
    <!-- MAIN CONTENT -->
    <section class="content">

        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Gerenciamento de Demandas</h3>
            </div>
            <div class="card-body">
                @include('_partials.' . $partial)
            </div>

            <!-- FOOTER -->
            <div class="card-footer">

            </div>
        </div>
    </section>
@endsection
