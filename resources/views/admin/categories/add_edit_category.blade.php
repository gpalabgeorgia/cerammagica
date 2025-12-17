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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Категории</li>
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
                <form action="{{ url('admin/add-edit-category') }}" name="categoryForm" id="categoryForm" method="post" enctype="multipart/form-data">@csrf
                    <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Добавить категорию</h3>
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
                                    <label class="category_name">Название категории</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Введите название категории">
                                </div>
                                <div class="form-group">
                                    <label>Выберите уровень категории</label>
                                    <select name="parent_id" id="parent_id" class="form-control select2" style="width: 100%;">
                                        <option value="0">Главная категория</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Выделить секцию</label>
                                    <select name="section_id" id="section_id" class="form-control select2" style="width: 100%;">
                                        <option value="">Выделить</option>
                                        @foreach($getSections as $section)
                                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Фото Категории</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="category_image" name="category_image">
                                            <label class="custom-file-label" for="category_image">Выберите файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузить</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label class="category_name">Скидка категории</label>
                                    <input type="text" class="form-control" id="category_discount" name="category_discount" placeholder="Скидка категории">
                                </div>
                                <div class="form-group">
                                    <label class="category_name">Описание категории</label>
                                    <textarea name="description" id="description" rows="3" class="form-control" placeholder="Описание категории"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label class="category_name">URL категории</label>
                                    <input type="text" class="form-control" id="url" name="url" placeholder="URL категории">
                                </div>
                                <div class="form-group">
                                    <label class="category_name">Meta Название категории</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Введите meta название категории">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label class="category_name">Meta Описание категории</label>
                                    <textarea name="meta_description" id="meta_description" rows="3" class="form-control" placeholder="Meta Описание категории"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label class="category_name">Meta Ключевые слова</label>
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Введите Meta Ключевые слова">
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
