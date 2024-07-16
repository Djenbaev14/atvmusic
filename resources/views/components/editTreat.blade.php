@extends('layouts.app')


@section('content')
    <h4 class="py-3 m-0"><span class="text-muted fw-light">Лечений /</span> Изменить категорию
    </h4>
    <h6 class="text-muted">Лечений</h6>

    <div class="row">

        <div class="table-responsive col-xl-12">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card mb-4">
                        <div class="card-header p-0 col-lg">
                            <div class="nav-align-top">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link waves-effect active" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home"
                                            aria-selected="tqre">O'zbekcha</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link waves-effect" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile"
                                            aria-selected="tqre">Qaraqalpaqsha</button>
                                    </li>
                                    <span class="tab-slider" style="left: 0px; width: 91.1719px; bottom: 0px;"></span>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">

                            <form class="browser-default-validation needs-validation row form-hand" method="POST"
                                action="{{ route('treatments.update', ['treatment' => $slide]) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="tab-content col-xl-9">
                                    <div class="tab-pane fade active   show" id="navs-top-home" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-floating form-floating-outline mb-4">
                                                    <textarea class="form-control h-px-75" id="basic-default-bio" name="title_uz" placeholder="Mavzuni kiriting"
                                                        rows="3">{{$slide->title_uz}}</textarea>
                                                    @error("title_uz")
                                                        <p class="help-block text-danger">{{ $message }}</p>
                                                    @enderror
                                                    <label for="basic-default-bio">Mavzu</label>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="form-floating form-floating-outline mb-4">
                                                    <textarea class="ckeditor form-control h-px-75" id="basic-default-bio" name="description_uz" placeholder="Tavsifini kiriting"
                                                        rows="3">{{ $slide->description_uz }}</textarea>
                                                    @error("description_uz")
                                                        <p class="help-block text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-floating form-floating-outline mb-4">
                                                    <textarea class="form-control h-px-75" id="basic-default-bio" name="title_qr" placeholder="Тема" rows="3">{{ $slide->title_qr }}</textarea>
                                                    @error("title_qr")
                                                        <p class="help-block text-danger">{{ $message }}</p>
                                                    @enderror
                                                    <label for="basic-default-bio">Тема</label>
                                                </div>
                                                <div class="form-floating form-floating-outline mb-4">
                                                    <textarea class="ckeditor form-control h-px-75" id="basic-default-bio" name="description_qr" placeholder="Описание"
                                                        rows="3">{{ $slide->description_qr }}</textarea>
                                                        
                                                    @error("description_qr")
                                                        <p class="help-block text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Изменить</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <h5 class="card-header">Выберите фото</h5>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Формат (.jpg, .jpeg,
                                                .png)</label>
                                            <input class="form-control" type="file" name="image" required
                                                value="{{ asset(old('images')) ? asset(old('images')) : $slide->image }}"
                                                id="image" onchange="previewFile()">
                                        </div>
                                    </div>
                                    <img src="{{ asset(old('images') ? old('images') : 'images/' . $slide->image) }}"
                                        class="form-control readonly" id="imageShow" class="img-uploaded mb-1"
                                        width="100%" height="200px" style="object-fit: contain" alt="Suwret korinisi"
                                        accept="image/png, image/gif, image/jpeg">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
