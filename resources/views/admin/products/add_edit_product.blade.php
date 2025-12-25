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
                            <li class="breadcrumb-item active">Продукты</li>
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
                <form @if(empty($productdata['id'])) action="{{ url('admin/add-edit-product') }}" @else action="{{ url('admin/add-edit-product/'.$productdata['id']) }}"  @endif name="productForm" id="productForm" method="post" enctype="multipart/form-data">@csrf
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
                                        <label>Выделить Категорию</label>
                                        <select name="category_id" id="category_id" class="form-control select2" style="width: 100%;">
                                            <option value="">Выделить</option>
                                            @foreach($categories as $section)
                                                <optgroup label="{{ $section['name'] }}"></optgroup>
                                                @foreach($section['categories'] as $category)
                                                    <option value="{{ $category['id'] }}">&nbsp;&nbsp;&nbsp;---&nbsp;&nbsp;&nbsp;{{ $category['category_name'] }}</option>
                                                    @foreach($category['subcategories'] as $subcategory)
                                                        <option value="{{ $subcategory['id'] }}">&nbsp;&nbsp;&nbsp;---&nbsp;&nbsp;&nbsp;{{ $subcategory['category_name'] }}</option>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="product_name">Название Продукта</label>
                                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Введите название продукта" @if(!empty($productdata['product_name'])) value="{{ $productdata['product_name'] }}" @else value="{{ old('product_name') }}" @endif>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="product_code">Код Продукта</label>
                                        <input type="text" class="form-control" id="product_name" name="product_code" placeholder="Введите Код продукта" @if(!empty($productdata['product_code'])) value="{{ $productdata['product_code'] }}" @else value="{{ old('product_code') }}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label class="product_color">Цвет Продукта</label>
                                        <input type="text" class="form-control" id="product_color" name="product_color" placeholder="Введите Цвет продукта" @if(!empty($productdata['product_color'])) value="{{ $productdata['product_color'] }}" @else value="{{ old('product_color') }}" @endif>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="product_price">Цена Продукта</label>
                                        <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Введите цену продукта" @if(!empty($productdata['product_price'])) value="{{ $productdata['product_price'] }}" @else value="{{ old('product_price') }}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label class="product_discount">Скидка на Продукт</label>
                                        <input type="text" class="form-control" id="product_discount" name="product_discount" placeholder="Введите скмдку на продукт" @if(!empty($productdata['product_discount'])) value="{{ $productdata['product_discount'] }}" @else value="{{ old('product_discount') }}" @endif>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="product_weight">Вес Продукта</label>
                                        <input type="text" class="form-control" id="product_weight" name="product_weight" placeholder="Введите вес продукта" @if(!empty($productdata['product_weight'])) value="{{ $productdata['product_weight'] }}" @else value="{{ old('product_weight') }}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="main_image">Фото Продукта</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="main_image" name="main_image">
                                                <label class="custom-file-label" for="main_image">Выберите файл</label>
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
                                        <label for="product_video">Видео Продукта</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="product_video" name="product_video">
                                                <label class="custom-file-label" for="product_video">Выберите файл</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Загрузить</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="product_name">Описание продукта</label>
                                        <textarea name="description" id="description" rows="3" class="form-control" placeholder="Описание продукта">
                                        @if(!empty($productdata['description'])) {{ $productdata['description'] }} @else {{ old('description') }} @endif
                                    </textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label class="wash_care">Уход за продуктом</label>
                                        <textarea name="wash_care" id="wash_care" rows="3" class="form-control" placeholder="Уход за продуктом">
                                        @if(!empty($productdata['wash_care'])) {{ $productdata['wash_care'] }} @else {{ old('wash_care') }} @endif
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Выделить Материал</label>
                                        <select name="fabric" id="fabric_id" class="form-control select2" style="width: 100%;">
                                            <option value="">Выделить</option>
                                            @foreach($fabricArray as $fabric)
                                                <option value="{{ $fabric }}">{{ $fabric }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Выделить Рукав</label>
                                        <select name="sleeve" id="sleeve_id" class="form-control select2" style="width: 100%;">
                                            <option value="">Выделить</option>
                                            @foreach($sleeveArray as $sleeve)
                                                <option value="{{ $sleeve }}">{{ $sleeve }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Выделить Принт</label>
                                        <select name="pattern" id="pattern_id" class="form-control select2" style="width: 100%;">
                                            <option value="">Выделить</option>
                                            @foreach($patternArray as $pattern)
                                                <option value="{{ $pattern }}">{{ $pattern }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Выделить Посадку</label>
                                        <select name="fit" id="fit_id" class="form-control select2" style="width: 100%;">
                                            <option value="">Выделить</option>
                                            @foreach($fitArray as $fit)
                                                <option value="{{ $fit }}">{{ $fit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Выделить Повод</label>
                                        <select name="occasion" id="occasion_id" class="form-control select2" style="width: 100%;">
                                            <option value="">Выделить</option>
                                            @foreach($occasionArray as $occasion)
                                                <option value="{{ $occasion }}">{{ $occasion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label class="product_name">Meta Название категории</label>
                                        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Введите meta название категории" @if(!empty($productdata['meta_title'])) value="{{ $productdata['meta_title'] }}" @else value="{{ old('meta_title') }}" @endif>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label class="product_name">Meta Описание категории</label>
                                        <textarea name="meta_description" id="meta_description" rows="3" class="form-control" placeholder="Meta Описание категории">
                                        @if(!empty($productdata['meta_description'])) {{ $productdata['meta_description'] }} @else {{ old('meta_description') }} @endif
                                    </textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label class="product_name">Meta Ключевые слова</label>
                                        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Введите Meta Ключевые слова" @if(!empty($productdata['meta_keywords'])) value="{{ $productdata['meta_keywords'] }}" @else value="{{ old('meta_keywords') }}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label class="product_name">В наличии</label>
                                        <input type="checkbox" name="is_featured" id="is_featured" value="1">
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

