@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.product.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.product.fields.name') }}
                    </th>
                    <td>
                        {{ $product->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.description') }}
                    </th>
                    <td>
                        {!! $product->description !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.price') }}
                    </th>
                    <td>
                        ${{ $product->price }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.add') }} {{ trans('global.images') }}
    </div>

    <div class="card-body">
        <div class="col-12">
            <form accept-charset="UTF-8"
                action="{{ route('admin.products.uploadImage', $product->id) }}"
                method="POST" enctype="multipart/form-data" class="dropzone hoverable" id="product_dropzone">
                <input type="hidden" id="url_images" name="url_images"
                    value="{{ route('admin.products.loadRowImages', $product->id) }}" />
                {{ csrf_field() }}
            </form>
        </div>
        <div class="col-12">
            <div id="container_img"></div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@parent
<script type="text/javascript">
    Dropzone.autoDiscover = false;
    Dropzone.prototype.defaultOptions.dictDefaultMessage = "Drag the files here to upload them";
    Dropzone.prototype.defaultOptions.dictFallbackMessage =
        "Your browser does not support drag-and-drop file uploading.";
    Dropzone.prototype.defaultOptions.dictFallbackText =
        "Use the backup form below to upload your files like in the old days.";
    Dropzone.prototype.defaultOptions.dictFileTooBig =
        "File is too large (@{{ filesize }}MiB). Maximum file size: @{{ maxFilesize }}MiB.";
    Dropzone.prototype.defaultOptions.dictInvalidFileType = "You can't upload files of this type.";
    Dropzone.prototype.defaultOptions.dictResponseError = "Server responded with code @{{ statusCode }}.";
    Dropzone.prototype.defaultOptions.dictCancelUpload = "<i class='fas fa-times-circle'></i> Cancel";
    Dropzone.prototype.defaultOptions.dictCancelUploadConfirmation =
    "Are you sure you want to cancel this upload?";
    Dropzone.prototype.defaultOptions.dictRemoveFile = "<i class='fas fa-trash-alt'></i> Delete";
    Dropzone.prototype.defaultOptions.dictMaxFilesExceeded = "You can't upload more files.";

    jQuery(document).ready(function () {
        try {
            load_images();
        } catch (err) {
            console.log(err.message);
            swal({
                title: 'Error',
                text: err.message,
                type: 'error',
                confirmButtonText: '<i class="fas fa-check"></i> Continue',
                showCloseButton: true,
                confirmButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                animation: false,
                customClass: 'animated zoomIn',
            });
        }
        try {
            var myDropzone = new Dropzone("#product_dropzone", {
                paramName: "image",
                maxFilesize: 30,
                addRemoveLinks: true,
                acceptedFiles: '.png,.jpg,.jpeg',
                timeout: 30000,
                parallelUploads: 10,
                init: function () {
                    this.on("addedfile", function (file) {});

                    this.on("error", function (file, response) {
                        console.log(response);
                        $(file.previewElement).find('.dz-error-message').text(response
                            .message);
                    });

                    this.on("sending", function (file, xhr, formData) {
                        xhr.ontimeout = (() => {
                            console.log('Server Timeout');
                            this.removeFile(file);

                        });
                    });

                    this.on("success", function (file, response) {
                        console.log(response);
                        this.removeFile(file);
                        if (response.status == 200) {
                            load_images();
                        }
                    });
                }
            });
        } catch (err) {
            console.log(err.message);
            swal({
                title: 'Error',
                text: "Dropzone is not supported by this browser.",
                type: 'error',
                confirmButtonText: '<i class="fas fa-check"></i> Continue',
                showCloseButton: true,
                confirmButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                animation: false,
                customClass: 'animated zoomIn',
            });
        }
    });

    function load_images() {
        var url_images = $("#url_images").val();
        load_div(url_images, "GET", {}, "img", true, false);
    }

    function confirm_delete(id, url_deleted) {
        start_loading();
        $.ajax({
                method: "POST",
                url: url_deleted,
                async: true,
                headers: {
                    'X-CSRF-TOKEN': _token
                },
                data: {
                    _method: 'DELETE'
                }
            })
            .done(function (response) {
                try {
                    console.log(response);

                    if (response.status == 200) {
                        load_images();
                    } else {
                        swal({
                            title: 'Error 500',
                            text: response.message,
                            type: 'error',
                            confirmButtonText: '<i class="fas fa-check"></i> Continue',
                            showCloseButton: true,
                            confirmButtonClass: 'btn btn-danger',
                            buttonsStyling: false,
                            animation: false,
                            customClass: 'animated zoomIn',
                        });
                    }
                } catch (err) {
                    console.log(err.message);
                }
            })
            .fail(function (response) {
                console.log(response.responseJSON);
                swal({
                    title: 'Error ' + response.status,
                    text: response.statusText,
                    type: 'error',
                    confirmButtonText: '<i class="fas fa-check"></i> Continue',
                    showCloseButton: true,
                    confirmButtonClass: 'btn btn-danger',
                    buttonsStyling: false,
                    animation: false,
                    customClass: 'animated zoomIn',
                });
            })
            .always(function () {
                end_loading()
            });
    }

    function delete_image(id, name, url_deleted) {
        swal({
            title: 'Delete image',
            text: 'You want to delete the image "' + name + '"?',
            type: 'question',
            confirmButtonText: '<i class="fas fa-trash-alt"></i> Delete',
            cancelButtonText: '<i class="fas fa-times"></i> Cancel',
            showCancelButton: true,
            showCloseButton: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            animation: false,
            customClass: 'animated zoomIn',
        }).then((result) => {
            if (result.value) {
                confirm_delete(id, url_deleted);
            } else {
                swal({
                    position: 'top-end',
                    type: 'error',
                    title: 'Operation cancelled by user',
                    showConfirmButton: false,
                    toast: true,
                    animation: false,
                    customClass: 'animated lightSpeedIn',
                    timer: 3000
                })
            }
        })
    }

</script>
@endsection
