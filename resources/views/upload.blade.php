@extends('frontend.layouts.app', [
    'title'=>'Unram Scholar',
    'bgWhite'=>'bg-[#E9F1FB]',
    'isUploadBtn'=>false
    ])
@section('content')
<!-- Centered Search Section -->
    <section class="flex items-center justify-center min-h-[calc(100vh-200px)] px-4">
        <form class="max-w-xl w-full mx-auto" action="{{route('upload.file')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500">JSON FORMATED</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" name="fileJson" onchange="updateFileName(this)" />
                </label>
            </div> 
            <div class="flex flex-col items-center justify-center w-full">
                <div id='file-name' class='text-gray-700'>File: <span class='font-semibold'>-</span></div>
                <button id="upload-btn" class="mt-8 px-8 py-4 bg-blue-600 rounded-md text-white hover:bg-blue-500 cursor-not-allowed" type="submit" disabled>Upload</button>
            </div>
        </form>
    </section>
@endsection

@push('scripts')
<script>
    function updateFileName(input) {
        let uploadButton = document.getElementById("upload-btn");

        if (input.files.length > 0) {
            let fileName = input.files[0].name;
            document.getElementById("file-name").innerHTML = `File: <span class="font-semibold">${fileName}</span>`;
            uploadButton.disabled = false;
            uploadButton.classList.remove("bg-gray-400", "cursor-not-allowed");
            uploadButton.classList.add("bg-blue-600", "hover:bg-blue-500", "cursor-pointer");
        }else{
            uploadButton.disabled = true;
            uploadButton.classList.remove("bg-blue-600", "hover:bg-blue-500", "cursor-pointer");
            uploadButton.classList.add("bg-gray-400", "cursor-not-allowed");
        }
    }

</script>
@endpush
@push('styles')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@push('addon-alert-success')
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endpush
@push('addon-alert-error')
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endpush
