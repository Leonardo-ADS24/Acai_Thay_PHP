<?php require 'header.php' ?> <!-- Esta linha inclui o cabçalho padrão do site -->

    <!-- Carrossel principal da página inicial -->
    <div id="carroselPrincipal" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover" data-bs-interval="5000">
        <div class="carousel-inner">
            <!-- Primeira imagem do carrossel -->
            <div class="carousel-item active">
                <img src="_imagens/banner_01.png" class="d-block w-100" alt="Primeiro slide">
            </div>
            <!-- Segunda imagem do carrossel -->
            <div class="carousel-item">
                <img src="_imagens/banner_02.png" class="d-block w-100" alt="Segundo slide">
            </div>
            <!-- Terceira imagem do carrossel -->
            <div class="carousel-item">
                <img src="_imagens/banner_03.png" class="d-block w-100" alt="Terceiro slide">
            </div>
        </div>
        <!-- Controle do carrossel  -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carroselPrincipal" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carroselPrincipal" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carroselPrincipal" data-bs-slide-to="2"  aria-label="Slide 3"></button>
        </div>
    </div>
    <main>
        <!-- Seção para links de pedidos online -->
        <section id="Pedidos" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="_imagens/IFood_logo.svg" class="img-fluid rounded" alt="Logo Ifood"  width="250px"> <br>
                        <img src="_imagens/whatsapp_logo.svg" class="img-fluid rounded" alt="Logo Watsapp" width="250px">
                    </div>
                    <div class="col-md-6">
                        <h1>FAÇA SEU PEDIDO ONLINE !</h1>
                        <p class="lead">
                            Nosso serviço de delivery de açaí torna mais fácil do que nunca saborear o melhor do açaí no conforto da sua casa !
                        </p>
                        <p>Pelo WhatsApp, você pode fazer seu pedido de forma prática e personalizada,conversando diretamente conosco.</p>
                        <p>Estamos também no iFood onde você encontra nosso cardápio completo com descrições detalhadas e com fotos dos nossos saborosos açaí.</p>
                        <p>Seja pelo WhatsApp ou iFood, nosso compromisso é entregar um açaí delicioso, feito com ingredientes de qualidade, para satisfazer seu paladar onde quer que você esteja!</p>
                        <a href="https://wa.me/5535988916047" class="btn btn-success btn-whatsapp" target="_blank"><i class="bi bi-whatsapp"></i> Peça Pelo WhatsApp</a>
                        <a href="https://www.ifood.com.br/delivery/varginha-mg/acai-da-thay-jardim-orlandia/9b211048-fdd8-48b9-83ac-06359eca7a19" target="_blank" class="btn btn-danger btn-ifood"> <img src="_imagens/ifood_logo_branco.svg" class="img-fluid rounded svg-ifood" alt="Logo Ifood"  style=" height: 20px; margin-right: 5px; color:white;">Peça pelo iFood</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Seção "Sobre Nós" com resumo da história da empresa -->
        <section id="Nos" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h2 class="mb-4">Sobre Nós</h2>
                        <p>
                            Fundada em 2021, nossa açaiteria nasceu de um sonho empreendedor com um delivery artesanal, operado pelo WhatsApp e com entregas feitas pela família.
                            Apesar dos desafios iniciais que nos levaram a pausar as operações, retornamos com mais experiência e planejamento, tornando-nos parceiros do iFood.
                            Hoje, oferecemos açaí de qualidade, preparado com carinho, refletindo nossa história de superação e paixão em cada copo.
                        </p>
                        <a href="sobre.php" class="btn btn-success btn-sobre">Saiba mais Sobre Nós</a>
                    </div>
                    <div class="col-md-6 ">
                        <img src="_imagens/08_acai.jpg" class="d-block mx-auto rounded img-fluid" alt="Açaí da Thay Imagem representstiva - Sobre Nós" >
                    </div>
                </div>
            </div>
        </section>
        <!-- Seção de apresentação dos produtos -->
        <section id="Produtos" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="_imagens/09_acai.jpeg" class="d-block mx-auto rounded img-fluid" alt="Açaí da Thay Imagem representstiva - Produtos" >
                    </div>
                    <div class="col-md-6 ">
                        <h2 class="mb-4">Produtos</h2>
                        <p>
                            No Açaí da Thay, em Varginha-MG, oferecemos uma variedade irresistível de produtos para todos os gostos!
                            Nossas <strong>Combinações com Desconto (Limitado)</strong> trazem promoções especiais com combinações exclusivas por tempo limitado, perfeitas para quem busca sabor e economia.
                            O <strong>Magnífico Açaí</strong> é a escolha ideal para os amantes de um açaí encorpado, com acompanhamentos premium que elevam a experiência.
                            Para os pequenos, o <strong>Açaí Kids</strong> é preparado com porções adequadas e sabores suaves, garantindo diversão e qualidade.
                            Já o <strong>Açaí Cremoso</strong> Suave oferece uma textura leve e refrescante, ideal para quem prefere um toque mais delicado.
                            Peça já pelo iFood ou Whatsapp e experimente.
                        </p>
                        <a href="produtos.php" class="btn btn-success btn-produtos">Conheça Nossos Produtos</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php require 'footer.php' ?> <!-- Esta linha inclui o rodapé padrão do site -->