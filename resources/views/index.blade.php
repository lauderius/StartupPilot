<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Ideias - Plataforma All-in-One</title>
    <meta name="description" content="Plataforma all-in-one para validar ideias de negócio com rapidez: crie landing pages, capture leads, agende testes A/B e gere relatórios de validação.">
    <meta name="keywords" content="validação de ideias, landing pages, captura de leads, testes A/B, empreendedorismo">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🚀</text></svg>">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#1f2937",
                        secondary: "#3b82f6",
                        accent: "#10b981"
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"]
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gray-50 text-gray-900 font-sans">
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-primary">
                <i class="fas fa-rocket text-secondary mr-2"></i>Validação de Ideias
            </div>
            <ul class="hidden md:flex space-x-6">
                <li><a href="#inicio" onclick="navigateTo(event, '#inicio')" class="text-gray-700 hover:text-secondary transition-colors">Início</a></li>
                <li><a href="#problema" onclick="navigateTo(event, '#problema')" class="text-gray-700 hover:text-secondary transition-colors">Problema</a></li>
                <li><a href="#solucao" onclick="navigateTo(event, '#solucao')" class="text-gray-700 hover:text-secondary transition-colors">Solução</a></li>
                <li><a href="#funcionalidades" onclick="navigateTo(event, '#funcionalidades')" class="text-gray-700 hover:text-secondary transition-colors">Funcionalidades</a></li>
                <li><a href="#contato" onclick="navigateTo(event, '#contato')" class="text-gray-700 hover:text-secondary transition-colors">Contato</a></li>
            </ul>
            <button class="md:hidden text-gray-700" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <ul class="px-4 py-2 space-y-2">
                <li><a href="#inicio" onclick="navigateTo(event, '#inicio')" class="block text-gray-700 hover:text-secondary">Início</a></li>
                <li><a href="#problema" onclick="navigateTo(event, '#problema')" class="block text-gray-700 hover:text-secondary">Problema</a></li>
                <li><a href="#solucao" onclick="navigateTo(event, '#solucao')" class="block text-gray-700 hover:text-secondary">Solução</a></li>
                <li><a href="#funcionalidades" onclick="navigateTo(event, '#funcionalidades')" class="block text-gray-700 hover:text-secondary">Funcionalidades</a></li>
                <li><a href="#contato" onclick="navigateTo(event, '#contato')" class="block text-gray-700 hover:text-secondary">Contato</a></li>
            </ul>
        </div>
    </header>

    <main>
        <section id="inicio" class="bg-gradient-to-r from-primary to-secondary text-white py-20">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Transforme Ideias em Produtos Validados</h1>
                <p class="text-xl md:text-2xl mb-8">Plataforma all-in-one para empreendedores validarem ideias de negócio rapidamente.</p>
                <img src="https://picsum.photos/800/400?random=1" alt="Ilustração de empreendedor trabalhando em ideias de negócio" class="w-full max-w-4xl mx-auto rounded-lg shadow-lg mb-8" loading="lazy">
                <a href="#contato" onclick="navigateTo(event, '#contato')" class="bg-accent hover:bg-green-600 text-white px-8 py-4 rounded-full text-lg font-semibold transition-colors inline-block">Comece Agora</a>
            </div>
        </section>

        <section id="problema" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">O Problema que Resolvemos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div>
                        <img src="https://picsum.photos/500/400?random=2" alt="Empreendedor frustrado com ideias não validadas" class="w-full rounded-lg shadow-md" loading="lazy">
                    </div>
                    <div>
                        <p class="text-lg mb-4">Empreendedores têm ideias brilhantes, mas falham em transformar isso em produtos testáveis e em validar clientes cedo.</p>
                        <p class="text-lg mb-4">Falta-lhes uma plataforma simples que una validação de mercado, criação rápida de landing pages, gestão de contactos (leads) e planeamento de micro-testes (experimentos) numa só ferramenta.</p>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Dificuldade em criar protótipos rápidos</li>
                            <li>Falta de ferramentas integradas para validação</li>
                            <li>Perda de tempo em processos manuais</li>
                            <li>Dificuldade em capturar e analisar leads</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="solucao" class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Nossa Proposta de Valor</h2>
                <div class="text-center mb-12">
                    <p class="text-xl text-gray-700">Plataforma all-in-one para validar ideias de negócio com rapidez — cria landing pages, captura leads, agenda testes A/B simples e gera relatórios de validação (KPIs) para decisões rápidas.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <i class="fas fa-bolt text-4xl text-secondary mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Criação Rápida</h3>
                        <p>Crie landing pages em minutos sem conhecimento técnico.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <i class="fas fa-users text-4xl text-secondary mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Captura de Leads</h3>
                        <p>Gerencie contactos e leads de forma eficiente.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <i class="fas fa-chart-line text-4xl text-secondary mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Relatórios de KPIs</h3>
                        <p>Gere insights para decisões rápidas e informadas.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="funcionalidades" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Funcionalidades Principais</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <img src="https://picsum.photos/300/200?random=3" alt="Criação de landing pages" class="w-full rounded-lg mb-4" loading="lazy">
                        <h3 class="text-lg font-semibold mb-2">Landing Pages</h3>
                        <p>Crie páginas atraentes para validar ideias.</p>
                    </div>
                    <div class="text-center">
                        <img src="https://picsum.photos/300/200?random=4" alt="Gestão de leads" class="w-full rounded-lg mb-4" loading="lazy">
                        <h3 class="text-lg font-semibold mb-2">Gestão de Leads</h3>
                        <p>Capture e organize contactos automaticamente.</p>
                    </div>
                    <div class="text-center">
                        <img src="https://picsum.photos/300/200?random=5" alt="Testes A/B" class="w-full rounded-lg mb-4" loading="lazy">
                        <h3 class="text-lg font-semibold mb-2">Testes A/B</h3>
                        <p>Agende e execute micro-testes simples.</p>
                    </div>
                    <div class="text-center">
                        <img src="https://picsum.photos/300/200?random=6" alt="Relatórios" class="w-full rounded-lg mb-4" loading="lazy">
                        <h3 class="text-lg font-semibold mb-2">Relatórios</h3>
                        <p>Análise de KPIs para validação rápida.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato" class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Entre em Contato</h2>
                <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
                    <form method="POST" action="{{ route('/contacto.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 mb-2">Nome</label>
                            <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 mb-2">E-mail</label>
                            <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 mb-2">Mensagem</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-secondary hover:bg-blue-700 text-white py-2 px-4 rounded-md transition-colors">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-primary text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 Validação de Ideias. Todos os direitos reservados.</p>
            <div class="mt-4 space-x-4">
                <a href="#" onclick="navigateTo(event, '#')" class="hover:text-secondary transition-colors"><i class="fab fa-facebook"></i></a>
                <a href="#" onclick="navigateTo(event, '#')" class="hover:text-secondary transition-colors"><i class="fab fa-twitter"></i></a>
                <a href="#" onclick="navigateTo(event, '#')" class="hover:text-secondary transition-colors"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Define data at the beginning
        const navigationData = [
            { "id": "inicio", "label": "Início" },
            { "id": "problema", "label": "Problema" },
            { "id": "solucao", "label": "Solução" },
            { "id": "funcionalidades", "label": "Funcionalidades" },
            { "id": "contato", "label": "Contato" }
        ];

        // Navigation function
        function navigateTo(event, target) {
            event.preventDefault();
            const element = document.querySelector(target);
            if (element) {
                element.scrollIntoView({ behavior: "smooth" });
            }
        }

        // Toggle mobile menu
        function toggleMenu() {
            const menu = document.getElementById("mobile-menu");
            menu.classList.toggle("hidden");
        }

        // Form submission (placeholder)
        document.getElementById("contact-form").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Obrigado pelo contato! Entraremos em contato em breve.");
            this.reset();
        });
    </script>
</body>
</html>
