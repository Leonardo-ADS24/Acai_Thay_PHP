<?php  require 'header.php'; ?> <!-- Esta linha inclui o cabçalho padrão do site -->

    <main>
        <!-- Seção de contato com formulário e dados para contato -->
        <section id="contato" class="py-5 pb-7">
            <div class="container ">
                <div class="row alingn-items-center">
                    <div class="col-md-6 mb-4 mb-md 0">
                        <h1>Fale Conosco</h1>
                        <form action="dados_formulario.php" method="POST" target="_blank">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu Nome" required>
                                <label for="nome">Nome:</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu Email" required>
                                <label for="email">Email:</label>
                            </div>
                            <div class="mb-3 mt-3">
                                <textarea name="mensagem" id="mensagem" class="form-control" placeholder="Digite sua Mensagem" rows="5" required></textarea>
                            </div>
                            <div class="d-grid gap 2">
                                <button type="submit" class="btn btn-primary btn-lg botao-enviar">Enviar Mensagem</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h2>Contatos</h2>
                        <br>
                        <p>Siga-nos no Instagram para novidades!</p>
                        <a href="https://www.instagram.com/acaidathayofc1/" class="btn btn-primary btn-lg rounded-circle p-3 lh-1 botao-personalizado"  target="_blank"><i class="bi bi-instagram fs-3"></i></a><span>  acaidathayofc1</span>
                        <br><br>
                        <p>Nos chame no WhatsApp para pedidos ou dúvidas:</p>
                        <a href="https://wa.me/5535988916047" class="btn btn-primary btn-lg rounded-circle p-3 lh-1 botao-personalizado"  target="_blank"><i class="bi bi-whatsapp fs-3"></i></a><span> (35)988916047</span>
                        <br><br>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php  require 'footer.php'; ?> <!-- Esta linha inclui o rodapé padrão do site -->