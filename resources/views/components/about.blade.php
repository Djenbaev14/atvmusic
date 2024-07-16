@extends('layouts.app')

@push('body')
    <style>
        .form-hand {
            display: flex !important;
            gap: 15px !important;
        }
    </style>
@endpush

@section('content')
    <h4 class="py-3 m-0"> О нас</h4>
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
                        action="{{ route('about')}}" enctype="multipart/form-data">
                        
                        @csrf
                        {{-- <div class="tab-content col-xl-12">
                            <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div>
                                            <textarea class="ckeditor form-control" id="post_content" cols='30' name='body' placeholder="Kontent"
                                                rows="10"> {{count($body)>0 ? $body[0]->body:''}} </textarea>
                                            
                                            <label for="basic-default-bio">Kontent</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light">Сохранить</button>
                                </div>
                            </div>
                        </div> --}}
                        
                        <div class="tab-content col-xl-12">
                            <div class="tab-pane fade active   show" id="navs-top-home" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <textarea class="ckeditor form-control h-px-75" id="basic-default-bio" name="body_uz" placeholder="Tavsifini kiriting"
                                                rows="3">{{count($body)>0 ? $body[0]->body_uz:''}}</textarea>
                                            @error("body_uz")
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
                                            <textarea class="ckeditor form-control h-px-75" id="basic-default-bio" name="body_qr" placeholder="Описание"
                                                rows="3">{{count($body)>0 ? $body[0]->body_qr:''}}</textarea>
                                                
                                            @error("body_qr")
                                                <p class="help-block text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light">Добавить</button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection


// @push('body')
//     <script>
//         $('.slide2').addClass('active');
//     </script>
// @endpush


@push('script')
@endpush
