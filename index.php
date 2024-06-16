<?php
session_start();
$_SESSION;

include_once("conexao.php");
include_once("funcoes.php");

$user_data = check_login($con);
?>

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
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4 text-center">
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">+50</h2>
          <p class="leading-relaxed">Instrutores Especializados</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">+500</h2>
          <p class="leading-relaxed">Alunos</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">+100</h2>
          <p class="leading-relaxed">Equipamentos</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">+200</h2>
          <p class="leading-relaxed">Exercícios</p>
        </div>
      </div>
    </div>
  </section>

  <hr>

  <section class="text-white body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="flex w-full mb-20 flex-wrap">
        <h1 class="text-3xl text-2xl font-medium title-font text-white lg:w-1/3 lg:mb-0 mb-4">YOGA</h1>
        <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-xl">Oferecemos aulas de yoga para ajudar a reduzir o estresse, alongar, fortalecer e equilibrar corpo e mente. Todas as aulas estão abertas a todos os níveis. Também oferecemos aulas de ginástica para melhorar sua força central e cardio, para complementar sua jornada.</p>
      </div>
      <div class="flex flex-wrap md:-m-2 -m-1">
        <div class="flex flex-wrap w-1/2">
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="w-full object-cover h-full object-center block" src="./img/yoga1.jpg">
          </div>
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="w-full object-cover h-full object-center block" src="./img/yoga2.jpg">
          </div>
        </div>
        <div class="flex flex-wrap w-1/2">
          <div class="md:p-2 p-1 w-full">
            <img alt="gallery" class="w-full h-full object-cover object-center block" src="./img/yoga3.webp">
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr>

  <section class="text-white body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="flex w-full mb-20 flex-wrap">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-white lg:w-1/3 lg:mb-0 mb-4">Equipamentos</h1>
        <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-xl">Nossa área fitness inclui esteiras, bicicletas, aparelhos elípticos e máquinas de remo. Pesos livres (incluindo equipamento de levantamento de peso), máquina de cabo cruzado, treinador de corda Marpro e uma variedade de equipamentos para treinamento de peso corporal que permitem que você aprimore sua força e trabalhe os desequilíbrios musculares.</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="./img/equipamentos1.avif">
            <div class="px-8 py-7 relative z-10 w-full border-4 border-white-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1"></h2>
              <h1 class="title-font text-lg font-medium text-black mb-3">Henry David Thoreau,</h1>
              <p class="leading-relaxed text-black"> "O sucesso geralmente vem para aqueles que estão ocupados demais para procurá-lo."</p>
              <br></br>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="./img/equipamentos2.webp">
            <div class="px-8 py-10 z-10 w-full border-4 border-white-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1"></h2>
              <h1 class="title-font text-lg font-medium text-black mb-3">Arnold Schwarzenegger,</h1>
              <p class="leading-relaxed text-black">"As últimas três ou quatro repetições é o que faz o músculo crescer. Essa área de dor é o que divide um campeão de alguém que não é um campeão."</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="./img/equipamentos3.avif">
            <div class="px-8 py-7 relative z-10 w-full border-4 border-white-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1"></h2>
              <h1 class="title-font text-lg font-medium text-black mb-3">Abraham Lincoln,</h1>
              <p class="leading-relaxed text-black">"As coisas podem chegar até aqueles que esperam, mas são somente sobras deixadas por aqueles que lutam."</p>
              <br></br>
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