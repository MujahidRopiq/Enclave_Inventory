<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="grid grid-cols-2 gap-5 min-h-screen">
  <div class="flex items-top p-10 px-24 pt-40">
      <div class="w-full">
        <h1 class="font-bold text-3xl mb-1">Sign In</h1>
        <p>Please enter your credentials.</p>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
        @if(Session::has('error'))
        <div class="font-bold text-red-500 text-sm" role="alert">
            {{ Session::get('error') }}
        </div>
        @endif
        <form action="{{ route('login') }}" method="post" class="mt-8 w-full">
        @csrf
          <div class="space-y-4 mb-6">
            <div class="">
              <label class="font-medium">Email Address</label>
              <input type="email" name="email" class="block w-full rounded-md border p-1" required/>
            </div>
            <div class="">
              <label class="font-medium">Password</label>
              <input type="password" name="password" class="block w-full rounded-md border p-1" required/>
            </div>
          </div>
          <div class="grid grid-cols-[160px_1fr]">
            <div class="flex items-center justify-between">
              <a href="/register" class="font-bold text-gray-500 text-sm hover:underline hover:text-red-300">Register Pegawai</a>
            </div>
            <button type="submit" class="bg-red-900 text-white w-full py-1 rounded-md hover:bg-red-700">Login</button>
          </div>
          
        </form>
      </div>
    </div>
    <div class="p-10 flex items-center justify-center">
      <img src="img\log_img.png" alt="login_img" class="object-cover rounded-xl" style="width:26rem;">
    </div>
  </div>
</body>
</html>