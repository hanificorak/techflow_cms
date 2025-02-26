@extends('layouts.app.app')

@section('content')

<h4>Kullanıcı Kayıt İşlemleri</h4>
<hr/>
<div class="card">
    <div class="card-header">
        <a href="{{ route('users') }}"><button type="button" class="btn btn-primary min-btn">Listeye Dön</button></a>

        <button type="button" class="btn btn-success min-btn float-end">Bilgileri Kaydet</button>
    </div>
    <div class="card-body">
        <form id="usersForm">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label class="col-form-label">Adı Soyadı *</label>
                    <input type="text" class="form-control" name="name_surname" placeholder="Adı soyadı yazınız."/>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label class="col-form-label">E-Mail Adresi *</label>
                    <input type="email" class="form-control" name="email" placeholder="E-Mail adresi yazınız."/>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label class="col-form-label">Şifre *</label>
                    <input type="password" class="form-control" name="password" placeholder="Şifre yazınız."/>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label class="col-form-label">Şifre Tekrarı *</label>
                    <input type="password" class="form-control" name="password_rep" placeholder="Şifrenizi tekrar yazınız."/>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label class="col-form-label">Telefon Numarası </label>
                    <input type="number" class="form-control" name="phone" placeholder="Telefon numarası yazınız."/>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label class="col-form-label">Durum *</label>
                    <select class="form-control">
                        <option value="1" selected>Aktif</option>
                        <option value="0">Pasif</option>
                    </select>
                </div>
            </div>
          </div>
        </form>
    </div>
</div>

@endsection