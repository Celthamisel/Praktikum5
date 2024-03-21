@extends('layout.main')
@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <h1 class="w-full px-3 mb-6 text-2xl font-bold">Buku Tamu</h1>

        <!-- Card untuk form buku tamu -->
        <div class="w-full px-3 mb-6">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="px-6 py-4">
                    <form action="/submit_guestbook_entry" method="post">
                        @csrf <!-- CSRF token untuk keamanan form -->
                        <div class="mb-4">
                            <label for="name" class="block mb-1 font-semibold text-gray-700">Nama:</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-1 font-semibold text-gray-700">Email:</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block mb-1 font-semibold text-gray-700">Pesan:</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required></textarea>
                        </div>
                        <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Card untuk form buku tamu -->

        <!-- Footer -->
        <footer class="w-full px-6">
            <div class="flex flex-wrap items-center justify-between -mx-3">
                <div class="w-full max-w-full px-3 mb-6 lg:mb-0 lg:w-1/2 lg:flex-none">
                    <div class="text-sm leading-normal text-center text-gray-500 lg:text-left">
                        © <script>document.write(new Date().getFullYear())</script> made with <i class="fa fa-heart text-red-500"></i> by <a href="https://www.creative-tim.com" class="font-semibold text-blue-500" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
                <div class="w-full max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <ul class="flex justify-center mb-0 list-none lg:justify-end">
                        <li class="mr-4">
                            <a href="https://www.creative-tim.com" class="text-sm font-normal text-gray-500 transition-colors hover:text-blue-500" target="_blank">Creative Tim</a>
                        </li>
                        <li class="mr-4">
                            <a href="https://www.creative-tim.com/presentation" class="text-sm font-normal text-gray-500 transition-colors hover:text-blue-500" target="_blank">About Us</a>
                        </li>
                        <li class="mr-4">
                            <a href="https://creative-tim.com/blog" class="text-sm font-normal text-gray-500 transition-colors hover:text-blue-500" target="_blank">Blog</a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license" class="text-sm font-normal text-gray-500 transition-colors hover:text-blue-500" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </div>
    <!-- end cards -->
</div>
@endsection
