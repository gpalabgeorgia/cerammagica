@extends('layouts.admin_layout.admin_layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Баннеры</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Баннеры</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if(Session::get('success_message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 10px;">
                                {{ Session::get('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Баннер</h3>
                                <a href="{{ url('admin/add-edit-banner') }}" style="max-width: 150px; float: right; display: inline-block;" class="btn btn-block btn-success">Добавить</a>
                            </div>
                            <div class="card-body">
                                <table id="banner" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Описание</th>
                                        <th>Линк</th>
                                        <th>Фото</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($banners as $banner)
                                        <tr>
                                            <td>{{ $banner['id'] }}</td>
                                            <td>{{ $banner['title'] }}</td>
                                            <td>{{ $banner['description'] }}</td>
                                            <td>{{ $banner['link'] }}</td>
                                            <td>
                                                <img style="width: 150px;" src="{{ asset('images/banner_images/'.$banner['image']) }}" alt="">
                                            </td>
                                            <td>
                                                @if($banner['status']==1)
                                                    <a class="updateBannerStatus" id="banner-{{ $banner['id'] }}" banner_id="{{ $banner['id'] }}" href="javascript:void(0);"><i class="fas fa-toggle-on" aria-hidden="true" status="Активный"></i></a>
                                                @else
                                                    <a class="updateBannerdStatus" id="banner-{{ $banner['id'] }}" banner_id="{{ $banner['id'] }}" href="javascript:void(0);"><i class="fas fa-toggle-off" aria-hidden="true" status="Неактивный"></i></a>
                                                @endif
                                                &nbsp;&nbsp;
                                                <a title="Редактировать Баннер" href="{{ url("admin/add-edit-banner/".$banner['id']) }}"><i class="fas fa-edit"></i></a>
                                                &nbsp;&nbsp;
                                                <a title="Удалить Баннер" href="javascript:void(0)" class="confirmDelete" record="banner" recordid="{{ $banner['id'] }}"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
