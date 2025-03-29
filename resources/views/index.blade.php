<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <title class="text-2xl">Dr. Edvaneide landing page</title>
    </head>
    <body>
        <nav id="init" class="fixed top-0 left-0 w-full glassmorphism p-4 font-primary border-bottom">
            <div class="flex justify-center items-center gap-50">
                <a href="/" class="text-lg font-bold text-blue-600">Assinatura</a>

                <ul class="flex space-x-6 nav-li">
                    <li><a href="#init">Início</a></li>
                    <li><a href="#about">Sobre nós</a></li>
                    <li><a href="#depoiment">Depoimentos</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            
                <div>
                    <a href="#" class="flex items-center btn-consult px-4 py-2 rounded-lg shadow-md hover:bg-green-600">
                        <i class="bi bi-whatsapp text-xl mr-2"></i>
                        <span>Agendar consulta</span>
                    </a>
                </div>
            </div>
        </nav>
        
        <header class="flex justify-center items-center h-[100dvh]">
            <div class="max-w-lg">
                <h2 class="lead text-xl">Dr. Edvaneide</h2>
                <h1 class="text-7xl uppercase"><span class="copper">Sorria</span> com confiança!</h1>
                <p class="py-4 font-bold">Agende sua consulta e conquiste o sorriso dos seus sonhos.</p>
                <div class="flex items-center">
                    <a href="#" class="flex items-center btn-consult text-darker px-15 py-5 rounded-lg shadow-md hover:bg-green-600">
                        <i class="bi bi-whatsapp text-xl mr-2"></i>
                        <span>Agendar consulta</span>
                    </a>
                </div>
                <div class="py-5">
                    <a href="#depoiment">
                        <img src="{{ asset('svg/Views.svg') }}" alt="img-povo-usando-o-app">
                    </a>
                </div>
            </div>
            <div class="absolute top-156 border-1 rounded-xl border-gray-400 py-5 px-35 glassmorphism text-xl">
                <ul class="flex items-center gap-10">
                    <li class="flex items-center gap-2">
                        <div class="bg-white px-2 p-1 border-1 copper-border rounded-full">
                            <i class="bi bi-bookmark"></i>
                        </div>
                        <div>
                            <span>Dentista Especialista</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="bg-white px-2 p-1 border-1 copper-border rounded-full">

                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <div>
                            <span>+ De 3 Mil Cirurgias</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="bg-white px-2 p-1 border-1 copper-border rounded-full">
                            <i class="bi bi-gem"></i>
                        </div>
                        <div>
                            <span>Resultados Incríveis</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <img src="{{ asset('svg/Doctor.svg') }}" alt="dentist-image">
            </div>
        </header>

        <main class="flex flex-col justify-center items-center">
            <section class="h-[100dvh] text-center max-w-[1100px] mx-auto px-5">
                <h1 class="text-6xl font-bold">Como podemos transformar seu sorriso e sua vida?</h1>
                
                <div class="flex flex-wrap justify-center pt-7 gap-6">
                    <div class="bg-gray-200 rounded-xl w-[300px] shadow-xl">
                        <div class="p-5 text-start">
                            <h4 class="text-3xl font-semibold">Odontologia estética</h4>
                            <p class="text-md">A dentística é a área que trata a estética na odontologia, com procedimentos como clareamento, facetas e lentes.</p>
                        </div>
                        <img class="rounded-b-xl w-full" src="https://fakeimg.pl/300/ff0000" alt="dentes">
                    </div>
            
                    <div class="bg-gray-200 rounded-xl w-[300px] shadow-xl">
                        <div class="p-5 text-start">
                            <h4 class="text-3xl font-semibold">Periodontia</h4>
                            <p class="text-md">A periodontia trata dos tecidos ao redor dos dentes, cini a gengiva, o osso e o ligamento periodontal.</p>
                        </div>
                        <img class="rounded-b-xl w-full mt-9" src="https://fakeimg.pl/300/ff0000" alt="dentes">
                    </div>
            
                    <div class="bg-gray-200 rounded-xl w-[300px] shadow-xl">
                        <div class="p-5 text-start">
                            <h4 class="text-3xl font-semibold">Implantodontia</h4>
                            <p class="text-md">Os implantes dentários são a solução mais moderna e segura para substituir dentes perdidos.</p>
                        </div>
                        <img class="rounded-b-xl w-full mt-15" src="https://fakeimg.pl/300/ff0000" alt="dentes">
                    </div>
                </div>
            </section>
            
            <section class="h-[100dvh] flex items-center justify-center max-w-5xl mx-auto px-5 gap-x-10">
                <div class="text-start flex-1">
                    <h4 class="text-xl text-gray-500 font-semibold">Conheça a dentista</h4>
                    <h2 class="text-7xl font-bold copper">Edvaneide</h2>
                    <p class="text-gray-600 mt-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi velit 
                        illum laudantium repudiandae distinctio totam earum. Et quibusdam 
                        quisquam, minima ipsum illo recusandae aspernatur quam temporibus 
                        quod. Quam, autem consequatur.
                    </p>
                    <p class="text-gray-600 mt-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi velit 
                        illum laudantium repudiandae distinctio totam earum. Et quibusdam 
                        quisquam, minima ipsum illo recusandae aspernatur quam temporibus 
                        quod. Quam, autem consequatur.
                    </p>
                    
                    <a href="#" class="mt-6 inline-flex items-center btn-consult text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-600 transition">
                        <i class="bi bi-whatsapp text-xl mr-2"></i>
                        <span>Agendar consulta</span>
                    </a>
                </div>
            
                <div class="flex-1">
                    <img src="{{ asset('svg/Doctor.svg') }}" alt="dentist-image" class="max-w-full h-auto">
                </div>
            </section>
            
            <section id="depoiment" class="text-center max-w-6xl mx-auto py-16 px-6">
                <h2 class="text-6xl font-bold">Mas será que vou gostar do resultado?</h2>
                <p class="text-gray-600 mt-4">Veja o que os pacientes dizem!</p>
            
                <div class="mt-10 flex flex-wrap justify-center gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 text-center max-w-md">
                        <img src="https://i.pravatar.cc/100?img=3" alt="Foto Usuário" class="w-16 h-16 mx-auto rounded-full">
                        <h4 class="mt-3 font-semibold text-blue-600">João Silva</h4>
                        <div class="flex justify-center mt-2 text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="text-gray-700 italic mt-3">"Minha experiência foi incrível! Atendimento excelente e resultado impecável."</p>
                    </div>
            
                    <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 text-center max-w-md">
                        <img src="https://i.pravatar.cc/100?img=5" alt="Foto Usuário" class="w-16 h-16 mx-auto rounded-full">
                        <h4 class="mt-3 font-semibold text-blue-600">Maria Oliveira</h4>
                        <div class="flex justify-center mt-2 text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="text-gray-700 italic mt-3">"Me senti muito confortável durante o tratamento. Profissionalismo e carinho em cada detalhe!"</p>
                    </div>
            
                    <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 text-center max-w-md">
                        <img src="https://i.pravatar.cc/100?img=7" alt="Foto Usuário" class="w-16 h-16 mx-auto rounded-full">
                        <h4 class="mt-3 font-semibold text-blue-600">Carlos Mendes</h4>
                        <div class="flex justify-center mt-2 text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="text-gray-700 italic mt-3">"Melhor dentista da região! Recomendo para todos que conheço."</p>
                    </div>
                </div>
            
                <a href="#" class="mt-8 inline-flex items-center text-white px-6 py-3 rounded-lg btn-consult transition">
                    <i class="bi bi-pencil-square text-xl mr-2"></i>
                    <span>Deixar meu depoimento</span>
                </a>
            </section>
            
            <section class="text-center max-w-6xl mx-auto py-16 px-6">
                <h2 class="text-4xl font-bold">Perguntas Frequentes</h2>
                <p class="text-gray-600 mt-4">Tire suas dúvidas sobre nossos serviços.</p>
            
                <div class="mt-10 space-y-4">
                    <div x-data="{ open: false }" class="border border-gray-300 rounded-lg shadow-lg">
                        <button @click="open = !open" class="w-full text-left p-4 font-semibold flex justify-between items-center">
                            Quais tratamentos vocês oferecem?
                            <span x-show="!open">➕</span>
                            <span x-show="open">➖</span>
                        </button>
                        <p x-show="open" class="p-4 text-gray-700 border-t">Oferecemos clareamento, facetas, lentes de contato dental, implantes, ortodontia e mais.</p>
                    </div>
            
                    <div x-data="{ open: false }" class="border border-gray-300 rounded-lg shadow-lg">
                        <button @click="open = !open" class="w-full text-left p-4 font-semibold flex justify-between items-center">
                            O tratamento é doloroso?
                            <span x-show="!open">➕</span>
                            <span x-show="open">➖</span>
                        </button>
                        <p x-show="open" class="p-4 text-gray-700 border-t">Usamos técnicas modernas para minimizar qualquer desconforto. A maioria dos pacientes relata pouca ou nenhuma dor.</p>
                    </div>
            
                    <div x-data="{ open: false }" class="border border-gray-300 rounded-lg shadow-lg">
                        <button @click="open = !open" class="w-full text-left p-4 font-semibold flex justify-between items-center">
                            Quanto tempo dura o tratamento?
                            <span x-show="!open">➕</span>
                            <span x-show="open">➖</span>
                        </button>
                        <p x-show="open" class="p-4 text-gray-700 border-t">Isso depende do tratamento, mas a maioria dos procedimentos pode ser concluída em poucas consultas.</p>
                    </div>
                </div>
            </section>
            
        </main>
        <footer class="py-10">
            <div class="text-center">
                footer
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script> <!-- alpine e pra o accordion funcionar -->
    </body>
</html>