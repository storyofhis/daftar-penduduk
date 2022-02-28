<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Form Daftar Penduduk</title>
</head>
<body>
    <div class="fixed h-full w-full flex items-center justify-center bg-opacity-50 bg-gray-700">
       <div class="z-10">
           <div class="w-56 h-64 text-center rounded-lg">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-dark">Form Pendataan Penduduk 2021</h5>
                    </a>

                    @if (count($errors) > 0)
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </span>
                    </div>
                    @endif

                    <form action="/process-screening" method="POST" class="bg-dark shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        {{ csrf_field() }}
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-group mb-6">
                            <label for="nama" class="block text-gray-700 text-sm font-bold mb-2 dark:text-dark">
                                NAMA LENGKAP
                            </label>
                        <input type="text" class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
                            aria-describedby="emailHelp123" placeholder="Nama Lengkap" name="nama" value="{{ old('nama') }}">
                        </div>
                        <div class="form-group mb-6">
                            <label for="nik" class="block text-gray-700 text-sm font-bold mb-2 dark:text-dark">
                                NIK
                            </label>
                        <input type="text" class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
                            aria-describedby="emailHelp124" placeholder="NIK" name="nik" value="{{ old('nik') }}" >
                        </div>
                    </div>
                    <div class="form-group mb-6">
                        <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2 dark:text-dark">
                            ALAMAT
                        </label>
                        <input type="text" class="form-control block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125"
                        placeholder="Alamat" name="alamat" value="{{ old('alamat') }}">
                    </div>
                    <div class="form-group mb-6">
                        <label for="tempat-lahir" class="block text-gray-700 text-sm font-bold mb-2 dark:text-dark">
                            TEMPAT LAHIR
                        </label>
                        <input type="text" class="form-control block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126"
                        placeholder="Tempat Lahir" name="tempat-lahir" value="{{ old('tempat-lahir') }}">
                    </div>
                    <div class="form-group mb-6">
                        <label for="tanggal-lahir" class="block text-gray-700 text-sm font-bold mb-2 dark:text-dark">
                            TANGGAL LAHIR
                        </label>
                        <div date-rangepicker class="flex items-center">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input name="tanggal-lahir" value="{{ old('tanggal-lahir') }}" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex justify-center">
                        <div class="mb-3 w-96">
                            <label for="foto-ktp" class="block text-gray-700 text-sm font-bold mb-2 dark:text-dark">
                               FOTO KTP
                            </label>
                          <input class="form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                          transition
                          ease-in-out
                          m-0
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile" name="foto-ktp" value="{{ old('foto-ktp') }}">
                        </div>
                    </div>                    
                    <button type="submit" class="
                        w-full
                        px-6
                        py-2.5
                        bg-blue-600
                        text-white
                        font-medium
                        text-xs
                        leading-tight
                        uppercase
                        rounded
                        shadow-md
                        hover:bg-blue-700 hover:shadow-lg
                        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                        active:bg-blue-800 active:shadow-lg
                        transition
                        duration-150
                        ease-in-out
                        inline-flex items-center text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >Screening Form
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>