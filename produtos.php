<?php require 'header.php' ?>

        <section id="sobre_Nos" class="py-5">
            <div class="container ">
                <div class="row align-items-center">
                    <!-- Coluna do Texto -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h1 class="mb-4">Nosso Açaí</h1>
                        <p>
                           Nosso açaí se destaca pela qualidade premium e autenticidade, inspirando-se em referências como o Açaí da Thay, em Varginha-MG, conhecido por sua cremosidade e sabor marcante.
	                       Nossas opções vão desde as tradicionais tigelas com granola e frutas frescas até combinações personalizadas com acompanhamentos variados, como leite condensado e castanhas, atendendo a todos os paladares com energia e saúde em cada porção.
                        </p>
                    </div>
                    <!-- Coluna da Imagem -->
                    <div class="col-md-6 ">
                        <img src="_imagens/08_acai.jpg" class="d-block mx-auto rounded img-fluid" alt="Açaí da Barra - Nossa História" >
                    </div>
                </div>
            </div>
        </section>
        <section id="carrossel_Produtos" class="py-5 ">
            <div class="container">
                <h2 class="text-center mb-5">Nossos Produtos</h2>
                <div id="carroselPrincipal" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class=" row justify-content-center">
                                <div class="col-md-8 text-center">
                                    <img src="_imagens/09_acai.jpeg" class="img-fluid rounded mb-3 imagens-carrosel" alt="Açaí cremoso suave">
                                    <h3>Açaí cremoso suave</h3>
                                    <p>Um açaí leve e refrescante, com textura cremosa e delicada, ideal para quem busca um sabor mais suave.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class=" row justify-content-center">
                                <div class="col-md-8 text-center">
                                    <img src="_imagens/08_acai.jpg"  class="img-fluid rounded mb-3 imagens-carrosel" alt="Açaí kids">
                                    <h3>Açaí kids</h3>
                                    <p>Perfeito para crianças, com porções menores e sabores suaves que tornam cada colherada divertida e deliciosa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class=" row justify-content-center">
                                <div class="col-md-8 text-center">
                                    <img src="_imagens/mag.jpg" class="img-fluid rounded mb-3 imagens-carrosel" alt="Magnífico Açaí">
                                    <h3>Magnífico Açaí</h3>
                                    <p>Desfrute de um açaí encorpado e sofisticado, repleto de complementos premium para uma experiência inesquecível.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class=" row justify-content-center">
                                <div class="col-md-8 text-center">
                                    <img src="_imagens/comb.jpg" class="img-fluid rounded mb-3 imagens-carrosel" alt="Combinações ">
                                    <h3>Combinações</h3>
                                    <p>Aproveite nossas promoções exclusivas por tempo limitado, com combinações deliciosas de açaí e acompanhamentos a preços especiais!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carroselPrincipal" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#carroselPrincipal" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </section>

        <div class="container-link">
            <a class="link-ifood" href="https://www.ifood.com.br/delivery/varginha-mg/acai-da-thay-jardim-orlandia/9b211048-fdd8-48b9-83ac-06359eca7a19" target="_blank">
                <img src="_imagens/IFood_logo.svg" alt="Logo do ifood" height="50px" width="auto">
            </a>
            <p>Refresque seu dia com nosso açaí.<br>Peça agora pelo iFood ou Whatsapp</p>
            <a href="https://web.whatsapp.com/send?phone=5535988421926" target="_blank" aria-label="Fazer pedido pelo WhatsApp">
                <img src="_imagens/whatsapp_logo.svg" alt="Logo do whatsapp" height="60px" width="auto">
            </a>
        </div>

<?php require 'footer.php'?>