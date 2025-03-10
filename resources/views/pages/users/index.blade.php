@extends('layouts.app.app')

@section('content')

<h4>Kullanıcı Yönetimi</h4>
<hr/>
<div class="card">
    <div class="card-header">
        <a href="{{ route('users/new') }}"><button type="button" class="btn btn-success min-btn">Yeni Ekle</button></a>
        <button type="button" class="btn btn-primary min-btn editUserBtn">Düzenle</button>
        <button type="button" class="btn btn-danger min-btn deleteUserBtn">Sil</button>
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
