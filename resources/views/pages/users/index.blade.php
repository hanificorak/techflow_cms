@extends('layouts.app.app')

@section('content')

<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-success min-btn">Yeni Ekle</button>
        <button type="button" class="btn btn-primary min-btn">Düzenle</button>
        <button type="button" class="btn btn-danger min-btn">Sil</button>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered" id="usersTable">
            <thead>
                <tr>
                    <th>Adı Soyadı</th>
                    <th>E-Mail Adresi</th>
                    <th>Telefon Numarası</th>
                    <th>Durumu</th>
                    <th width="150">İşlem</th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('js')
    <script type="text/javascript">
        var checkInterval = setInterval(function() {
            if (app.loader !== undefined && app.loader !== null) {
                app.loader.setModule("Users");
                clearInterval(checkInterval);
            }
        }, 500);
    </script>
@endsection
