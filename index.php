<?php require 'header.php' ?>

    <div id="carroselPrincipal" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="_imagens/slyde01.png" class="d-block w-100" alt="Primeiro slide">
            </div>
            <div class="carousel-item">
                <img src="_imagens/slyde02.png" class="d-block w-100" alt="Segundo slide">
            </div>
            <div class="carousel-item">
                <img src="_imagens/slyde03.png" class="d-block w-100" alt="Terceiro slide">
            </div>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carroselPrincipal" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carroselPrincipal" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carroselPrincipal" data-bs-slide-to="2"  aria-label="Slide 3"></button>
        </div>
    </div>
    <main>
        <section id="Pedidos" class="py-5">
            <div class="container">
                <div class="row aling-items-center">
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
                        <p>Estamos também no iFood onde vocÊ cencontra nosso cardápio completo com descrições detalhadas e com fotos dos nossos saborosos açaí.</p>
                        <p>Seja pelo WhatsApp ou iFood, nosso compromisso é entregar u açaí delicioso, feito com ingredientes de qualidade, para satisfazer seu paladar onde quer que você esteja!</p>
                        <a href="https://web.whatsapp.com/send?phone=5535988421926" class="btn btn-primary btn-whatsapp" target="_blank"><i class="bi bi-whatsapp"></i> Peça Pelo WhatsApp</a>
                        <a href="https://www.ifood.com.br/delivery/varginha-mg/acai-da-thay-jardim-orlandia/9b211048-fdd8-48b9-83ac-06359eca7a19" target="_blank" class="btn btn-primary btn-ifood"> <img src="_imagens/untitled.svg" class="img-fluid rounded svg-ifood" alt="Logo Ifood"  style=" height: 20px; margin-right: 5px; color:white;">Peça pelo iFood</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="Nos" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Coluna do Texto -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h2 class="mb-4">Sobre Nós</h2>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, doloribus atque? Expedita dolore illo?
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda fuga perspiciatis, ex deleniti eligendi veritatis minima saepe voluptates aut in atque ea quis id iusto earum velit odit, sequi molestiae?
                           Eius inventore cupiditate a doloribus fuga quia rem vel ad cumque incidunt. Adipisci similique tempora unde qui dignissimos omnis, nam sequi ea numquam! Reiciendis at, nisi iure maxime laborum ab.
                        </p>
                        <a href="sobre.php" class="btn btn-primary">Saiba mais sobre Nós</a>
                    </div>
                    <!-- Coluna da Imagem -->
                    <div class="col-md-6 ">
                        <img src="_imagens/08_acai.jpg" class="d-block mx-auto rounded" alt="Açaí da Barra - Nossa História" >
                    </div>
                </div>
            </div>
        </section>
        <section id="Produtos" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Coluna do Texto -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="_imagens/09_acai.jpeg" class="d-block mx-auto rounded" alt="Açaí da Barra - Nossa História" >
                    </div>
                    <!-- Coluna da Imagem -->
                    <div class="col-md-6 ">
                        <h2 class="mb-4">Produtos</h2>
                        <p class="lead">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati velit vitae ipsa pariatur eius omnis quos ipsam error!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ut error sunt totam exercitationem, culpa in amet, odio aspernatur ratione, necessitatibus excepturi ipsam voluptatem consequuntur pariatur autem esse odit praesentium?
                        </p>
                        <a href="produtos.php" class="btn btn-primary">Conheça Nossos Produtos</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php require 'footer.php' ?>