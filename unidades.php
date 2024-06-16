<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>slimfit.com.br</title>
</head>
<body style="background-color:rgb(99, 102, 241);">
  <header class="text-white body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
        <a class="ml-3 text-xl" href="index.php">SLIMFIT</a>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-white" href="index.php">PÁGINA INICIAL</a>
        <a class="mr-5 hover:text-white" href="unidades.php">UNIDADES</a>
        <a class="mr-5 hover:text-white" href="sobrenos.php">SOBRE NÓS</a>
          <style>
            .dropdown{
              position: relative;
              display: inline-block;
            }
            
            .dropdown-content{
              display: none;
              position: absolute;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              padding: 12px 16px;
            }
            
            .dropdown:hover .dropdown-content{
              display: block;
            }
          </style>
          <div class="dropdown">
            <a class="mr-5 hover:text-white">ÁREA DO USUÁRIO</a>
            <div class="dropdown-content">
              <p><a href="lista_usuarios.php">Configurações</a></p>
              <p><a href="logout.php">Logout</a></p>
            </div>
          </div>
      </nav>
    </div>
  </header>

<br><br>

  <section class="text-white body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <h1 class="text-3xl text-2xl font-medium title-font text-white lg:w-1/3 lg:mb-0 mb-4">Unidades</h1>
      <br><br><br>
      <div class="flex w-full mb-20 flex-wrap">
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="Fachada da unidade Liberdade" class="absolute inset-0 w-full h-full object-cover object-center" src="">
            <div class="px-8 py-7 relative z-10 w-full border-4 border-white-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1"></h2>
              <h1 class="title-font text-lg font-medium text-black mb-3">Liberdade</h1>
              <p class="leading-relaxed text-black">Avenida da Liberdade, 902 - Liberdade, São Paulo - SP</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="Fachada da unidade Santa Cecília" class="absolute inset-0 w-full h-full object-cover object-center" src="">
            <div class="px-8 py-7 relative z-10 w-full border-4 border-white-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1"></h2>
              <h1 class="title-font text-lg font-medium text-black mb-3">Santa Cecília</h1>
              <p class="leading-relaxed text-black">Alameda Barros, 59 - Santa Cecília, São Paulo - SP</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="Fachada da unidade Avenida Paulista" class="absolute inset-0 w-full h-full object-cover object-center" src="">
            <div class="px-8 py-7 relative z-10 w-full border-4 border-white-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1"></h2>
              <h1 class="title-font text-lg font-medium text-black mb-3">Avenida Paulista</h1>
              <p class="leading-relaxed text-black">Avenida Paulista, 664 - Bela Vista, São Paulo - SP</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr><hr>

  <footer class="text-white body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <p class="text-sm text-white sm:ml-4 sm:pl-4 sm:py-2 sm:mt-0 mt-4">© 2024 SlimFit</p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-white">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-white">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-white">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-white">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          </svg>
        </a>
      </span>
    </div>
  </footer>
</body>
</html>