@extends('layouts.admin_layout.admin_layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Каталог</h1>
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
                @if($errors->any())
                    <div class="alert alert-danger" style="margin-top: 10px;">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::get('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 10px;">
                        {{ Session::get('success_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form @if(empty($banner['id'])) action="{{ url('admin/add-edit-banner') }}" @else action="{{ url('admin/add-edit-banner/'.$banner['id']) }}"  @endif name="bannerForm" id="bannerForm" method="post" enctype="multipart/form-data">@csrf
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">{{ $title }}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="title">Название Баннера</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Введите название баннера" @if(!empty($banner['title'])) value="{{ $banner['title'] }}" @else value="{{ old('title') }}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label class="description">Текст Баннера</label>
                                        <textarea name="description" id="description" rows="3" class="form-control" placeholder="Текст Баннера">
                                        @if(!empty($banner['description'])) {{ $banner['description'] }} @else {{ old('description') }} @endif
                                    </textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="link">Линк Баннера</label>
                                        <input type="text" class="form-control" id="link" name="link" placeholder="Введите Линк Баннера" @if(!empty($banner['link'])) value="{{ $banner['link'] }}" @else value="{{ old('link') }}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Фото Баннера</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Выберите файл</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Загрузить</span>
                                            </div>
                                        </div>
                                        <div>Рекомендованный размер фото: Width=450px, Height=568px</div>
                                        @if(!empty($banner['image']))
                                            <div>
                                                <img style="width: 60px; margin-top: 5px;" src="{{ asset('images/banner_images/'.$banner['image']) }}" alt="">
                                                &nbsp;
                                                <a class="confirmDelete" href="javascript:void(0)" record="banner-image" recordid="{{ $banner['id'] }}">Удалить фото</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Согласиться</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

