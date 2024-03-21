@extends('layout.main')
@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <h1 class="w-full px-3 mb-6 text-2xl font-bold">Biodata</h1>
        <div class="w-full max-w-full px-3 mt-6">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full lg:w-1/2 px-3 mb-6 lg:mb-0">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="px-4 py-2">
                            <h2 class="text-xl font-bold text-gray-800">My Information</h2>
                        </div>
                        <div class="px-4 py-2">
                            <p class="text-gray-700"><span class="font-bold">Name:</span> Celtha Missella</p>
                            <p class="text-gray-700"><span class="font-bold">Age:</span> 19</p>
                            <p class="text-gray-700"><span class="font-bold">Gender:</span> Female</p>
                            <p class="text-gray-700"><span class="font-bold">Major:</span> Information System</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-3">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="px-4 py-2">
                            <h2 class="text-xl font-bold text-gray-800">Contact Information</h2>
                        </div>
                        <div class="px-4 py-2">
                            <p class="text-gray-700"><span class="font-bold">Email:</span> celtha@gmail.com</p>
                            <p class="text-gray-700"><span class="font-bold">Phone:</span> +1234567890</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cards -->
</div>
<footer class="pt-4">
    <div class="w-full px-6 mx-auto">
        <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                    ©
                    <script>
                        document.write(new Date().getFullYear() + ",");
                    </script>
                    made with <i class="fa fa-heart"></i> by
                    <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Celtha Missella</a>
                    for a better web.
                </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                    <!-- Add your list items here -->
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection
