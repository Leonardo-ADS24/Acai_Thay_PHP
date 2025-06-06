<?php  require 'header.php'; ?>

    <main>
        <section id="contato" class="py-5">
            <div class="container">
                <div class="row alingn-items-center">
                    <div class="col-md-6 mb-4 mb-md 0">
                        <h1>Fale Conosco</h1>
                        <form action="/action_page.php">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu Nome">
                                <label for="nome">Nome:</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu Email">
                                <label for="email">Email:</label>
                            </div>
                            <div class="mb-3 mt-3">
                                <textarea name="mensagem" id="mensagem" class="form-control" placeholder="Digite sua Mensagem" rows="5"></textarea>
                            </div>
                            <div class="d-grid gap 2">
                                <button type="submit" class="btn btn-primary btn-lg botao-enviar">Enviar Mensagem</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h2>Redes Sociais</h2>
                        <p>Siga nossa página no Instsgram e fique por dentro das nossas novidades !</p>
                        <a href="" class="btn btn-primary btn-lg rounded-circle p-3 lh-1 botao-instagram"  target="_blank"><i class="bi bi-instagram fs-3"></i></a>
                        <p>Envie um email para:</p>
                        <i class="bi bi-envelope-fill fs-3"></i><p><a href="acaidathaycomercial@gmail.com">  acaidathaycomercial@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php  require 'footer.php'; ?>