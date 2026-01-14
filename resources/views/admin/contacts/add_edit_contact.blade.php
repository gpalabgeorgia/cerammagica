@extends('layouts.admin_layout.admin_layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Контакты</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Контакты</li>
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
                <form @if(empty($contact['id'])) action="{{ url('admin/add-edit-contact') }}" @else action="{{ url('admin/add-edit-contact/'.$contact['id']) }}"  @endif name="contactForm" id="contactForm" method="post" enctype="multipart/form-data">@csrf
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
                                        <label class="mobile">Телефон</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Введите номер телефона" @if(!empty($contact['mobile'])) value="{{ $contact['mobile'] }}" @else value="{{ old('mobile') }}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label class="email">Эл.почта</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Введите аддресс эл.почты" @if(!empty($contact['email'])) value="{{ $contact['email'] }}" @else value="{{ old('email') }}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label class="work">Часы</label>
                                        <input type="text" class="form-control" id="work" name="work" placeholder="Введите рабочие Часы" @if(!empty($contact['work'])) value="{{ $contact['work'] }}" @else value="{{ old('work') }}" @endif>
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
