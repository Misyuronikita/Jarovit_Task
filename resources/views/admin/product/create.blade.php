@extends('layouts.admin')
@section('content')
        <form action="{{route('admin.product.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="naming">Наименование</label>
                <input type="text" name="name" class="form-control" id="naming" aria-describedby="emailHelp" placeholder="Введите наименование">
                @error('name')
                <p style="color:red;">{{@$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="mainPrice">Основная стоимость</label>
                <input type="number" name="main_price" class="form-control" id="mainPrice" placeholder="Введите стоимость">
                @error('main_price')
                <p style="color:red;">{{@$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="sale">Размер скидки(%)</label>
                <input type="number" name="sale" class="form-control" id="sale" placeholder="Введите размер скидки(%)">
                @error('sale')
                <p style="color:red;">{{@$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea type="text" name="description" class="form-control" id="description" placeholder="Введите описание"></textarea>
                @error('description')
                <p style="color:red;">{{@$message}}</p>
                @enderror
            </div>
            <div class="form-check">
                <input type="checkbox" name="is_stock" class="form-check-input" id="isExist">
                <label class="form-check-label" for="isExist">Есть в наличии?</label>
                @error('is_stock')
                <p style="color:red;">{{@$message}}</p>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
@endsection
