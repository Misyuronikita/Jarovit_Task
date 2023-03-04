@extends('layouts.admin')

@section('content')
        <div class="content">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    </div>
                </div><!-- /.container-fluid -->
                <a href="{{route('admin.product.create')}}" class="btn btn-primary">
                    <i class="fas fa-user-plus">
                    </i>
                    Создать продукт
                </a>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card" style="width: 100%">
                    <div class="card-header">
                        <h3 class="card-title">Продукты</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 10%">
                                    #
                                </th>
                                <th style="width: 15%">
                                    Наименование товара
                                </th>
                                <th style="width: 30%">
                                    Описание
                                </th>
                                <th style="width: 15%">
                                    Стоимость
                                </th>
                                <th style="width: 15%">
                                    Размер скидки(%)
                                </th>
                                <th style="width: 15%">
                                     Есть на складе?
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($products))
                                @foreach($products as $product)
                                    <tr>
                                        <td style="color:black">
                                            {{$product->id}}
                                        </td>
                                        <td style="color:white">
                                            <a style="color:black">
                                                {{$product->name}}
                                            </a>
                                            <br/>
                                        </td>
                                        <td style="color:white">
                                            <a style="color:black">
                                                {{$product->description}}
                                            </a>
                                            <br/>
                                        </td>
                                        <td style="color:white">
                                            <a style="color:black">
                                                {{$product->main_price}}
                                            </a>
                                            <br/>
                                        </td>
                                        <td style="color:white">
                                            <a style="color:black">
                                                {{$product->sale}}
                                            </a>
                                            <br/>
                                        </td>
                                        <td style="color:white">
                                            <a style="color:black">
                                                {{$product->is_stock}}
                                            </a>
                                            <br/>
                                        </td>
                                        <td class="project-actions text-lg-right">
                                            <a class="btn btn-info btn-sm" href="#{{--{{route('services.edit', $service->id)}}--}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Редактировать
                                            </a>
                                            <a class="btn">
                                                <form action="#{{--{{route('services.destroy', $service->id)}}--}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Удалить
                                                    </button>
                                                </form>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
@endsection
