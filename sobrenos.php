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
      <h1 class="text-3xl text-2xl font-medium title-font text-white lg:w-1/3 lg:mb-0 mb-4">Sobre nós</h1>
      <br><br><br><br>
      <div class="flex w-full mb-20 flex-wrap">
        <p class="leading-relaxed text-xl">Bem-vindos a SlimFit, onde você pode encontrar tudo que precisa para melhorar seu físico e seu estilo de vida. Com profissionais experientes, equipamentos de última geração e uma comunidade vibrante, estaremos aqui para apoiá-lo em cada etapa do seu caminho para um corpo saudável e forte. Na nossa academia, somos mais do que simplesmente um lugar para se exercitar. Nossa história começou com um pequeno grupo de pessoas que se reuniram para apoiar um ao outro em seus exercícios e treinamentos. Somos uma comunidade que se esforça para melhorar a si mesma e apoiar uns aos outros. Ninguém fica para trás ou é deixado para trás aqui. Todos nós estamos juntos na nossa jornada para melhorarmos e crescermos, um passo de cada vez. Então, venha se unir a nós e desbloquear seu potencial máximo na nossa academia. Vamos fazer isso juntos!</p>
      </div>
    </div>
  </section>
  
  <hr>

  <section class="text-white body-font">
    <div class="container px-5 py-24 mx-auto">
      <h1 class="text-3xl text-2xl font-medium title-font text-white lg:w-1/3 lg:mb-0 mb-4">Depoimentos</h1>
      <br><br><br>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8Z3ltfGVufDB8fDB8&auto=format&fit=crop&w=500&q=60/720x400" alt="blog">
            <div class="p-6">
              <h1 class="title-font text-lg font-medium mb-3">Davi C.</h1>
              <p class="leading-relaxed mb-3">Frequento esta academia há um ano e posso dizer com propriedade que a equipe aqui é super amigável e experiente. Eles estão dispostos a ajudá-lo com quaisquer serviços, seja respondendo dúvidas ou ensinando a postura correta dos exercícios por exemplo. Constantemente os vejo conversando e orientando outros frequentadores.</p>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://images.unsplash.com/photo-1558611848-73f7eb4001a1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGd5bXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60/721x401" alt="blog">
            <div class="p-6">
              <h1 class="title-font text-lg font-medium mb-3">Giovane M.</h1>
              <p class="leading-relaxed mb-3">Esta academia tem tudo. Os recém-chegados serão recebidos por alguns dos funcionários mais amigáveis ​​e competentes que já conheci em qualquer lugar. Os mais experientes encontrarão ambientes e comodidades melhores do que a maioria em qualquer lugar de São Paulo.</p>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://images.unsplash.com/photo-1549060279-7e168fcee0c2?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTJ8fGd5bXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60/722x402" alt="blog">
            <div class="p-6">
              <h1 class="title-font text-lg font-medium mb-3">Ionatan D.</h1>
              <p class="leading-relaxed mb-3">Hoje foi minha primeira vez nessa academia e simplesmente adorei! Equipe super simpática e informativa, ótima seleção de cursos e boas vibrações ao redor. Fui em uma manhã de segunda a sexta, então não estava lotado. Definitivamente voltarei!</p>
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