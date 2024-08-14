@extends('index')

@section('content')
    <div class="row g-5">
        <div class="text-center col-md-12">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Criar Post
            </h3>
        </div>
        <div class="col-md-12">
            <form class="row g-3">
                <div class="col-md-12">
                    <label class="form-label">Título</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Conteúdo</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Categoria</label>
                    <div class="input-group col-6">
                        <button class="btn btn-outline-secondary" type="button">+ Adicionar</button>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecionar</option>
                            @foreach ($categories as $category)
                            <option value="2">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tags</label>
                    <input type="text" class="form-control" placeholder="tag1, tag2, tag3...">
                </div>
                <div class="col-12">
                    <label class="form-label">Url da imagem</label>
                    <input type="text" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                        aria-describedby="button-addon1">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Publicar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
