@extends('layouts.admin-master', ['pageName'=> 'whatcontent', 'title' => 'Add Content'])
@push('admin-css')
    <link href="{{ asset('summernote/summernote-bs4.min.css') }}" rel="stylesheet">  
@endpush    
@section('admin-content')
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-area">
                    <h4 class="heading"><i class="fa fa-address-card"></i> Update Company What we do section</h4>
                    <form action="{{ route('whatwe.update', $whatwe) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="title1">Who we are title <span class="text-danger">*</span> </label>
                                <input type="text" name="title1" value="{{ $whatwe->title1 }}" class="form-control form-control-sm shadow-none mb-2 @error('title1') is-invalid @enderror" id="title1">
                                @error('title1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group">
                                    <label for="description1">Who we are description <span class="text-danger">*</span> </label>
                                    <textarea name="description1" id="description1" class="form-control @error('description1') is-invalid @enderror" id="description1" rows="3">{{ $whatwe->description1 }}</textarea>
                                </div>
                                @error('description1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="title3">Passion Section Title</label>
                                <input type="text" name="title3" value="{{ $whatwe->title3 }}" class="form-control form-control-sm mb-2 shadow-none @error('title3') is-invalid @enderror" id="title3" placeholder="Our Passion">
                                @error('title3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="image" class="">Passion Section Photo (size 1280*1280)</label>
                                <input class="form-control form-control-sm" id="image" type="file" name="image" onchange="readURL(this);">
                                <div class="form-group my-2">
                                    <img class="form-controlo img-thumbnail" src="#" id="previewImage" style="width: 160px;height: 130px;">
                                </div>


                            </div>
                            <div class="col-md-6 mb-2">
                            <label for="title2">What we do title<span class="text-danger">*</span> </label>
                                <input type="text" name="title2" value="{{ $whatwe->title2 }}" class="form-control form-control-sm mb-2 shadow-none @error('title2') is-invalid @enderror" id="title2">
                                @error('title2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group">
                                    <label for="description2">What we do description<span class="text-danger">*</span> </label>
                                    <textarea name="description2" id="description2" class="form-control @error('description2') is-invalid @enderror" id="description2" rows="3">{{ $whatwe->description2 }}</textarea>
                                </div>
                                @error('description2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group">
                                    <label for="description3">What we do description<span class="text-danger">*</span> </label>
                                    <textarea name="description3" id="description3" class="form-control @error('description3') is-invalid @enderror" id="description3" rows="3">{{ $whatwe->description3 }}</textarea>
                                </div>
                                @error('description3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr class="mt-0">
                        <div class="clearfix mt-1">
                            <div class="float-md-right">
                                <button type="reset" class="btn btn-dark btn-sm">Reset</button>
                                <button type="submit" class="btn btn-info btn-sm">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@push('admin-js')
<script src="{{ asset('summernote/summernote-bs4.min.js') }}"></script>
<script>
    $('#description1').summernote({
        tabsize: 2,
        height: 160,
        placeholder: 'Write who we are'
    });
    $('#description2').summernote({
        tabsize: 2,
        height: 160,
        placeholder: 'Write what we do'
    });
    $('#description3').summernote({
        tabsize: 2,
        height: 160,
        placeholder: 'Write passion of our company'
    });
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#previewImage')
                    .attr('src', e.target.result)
                    .width(160)
                    .height(130);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    document.getElementById("previewImage").src="{{ $whatwe->image }}";
</script>
@endpush