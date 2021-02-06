<nav class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>home"><img class="img-responsive" src="<?= base_url(); ?>assets/images/logo.png" alt="Elementum Atibaia"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>home">HOME</a></li>
                        <li><a href="<?php echo base_url(); ?>conceito">CONCEITO</a></li>
                        <li><a href="<?php echo base_url(); ?>galeria">GALERIA</a></li>
                        <li><a href="<?php echo base_url(); ?>seguranca">SEGURANÇA</a></li>
                        <li><a href="<?php echo base_url(); ?>ficha-tecnica">FICHA TÉCNICA</a></li>
                        <li><a href="<?php echo base_url(); ?>implantacao">IMPLANTAÇÃO</a></li>
                        <li><a href="<?php echo base_url(); ?>localizao">LOCALIZAÇÃO</a></li>
                        <li><a href="<?php echo base_url(); ?>contato">CONTATO</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>













<div class="galeria">
    <section class="galeria-elementum slider">
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-01.png?1551369906080" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-02.png?1551369906080" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-03.png?1551369906080" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-04.png?1551369906080" alt="Elementum Residencial Atibaia">
        </div>
        <div>
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/slide-05.png?1551369906080" alt="Elementum Residencial Atibaia">
        </div>
    </section>
</div>







<div id="contato" class="contato">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                            <input id="nome" type="text" class="nome line-r-off form-control" name="nome" required="required" placeholder="Nome*:" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                            <input id="email" type="email" class="email line-l-off form-control" name="email" required="required" placeholder="Email*:" />
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 form-group">
                            <input id="telefone" class="phone line-r-off form-control" type="tel" name="phone" required="required" placeholder="Celular*:" />
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 form-group">
                            <input id="cidade" class="cidade line-r-off line-l-off form-control" type="text" name="cidade" placeholder="Cidade" />
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 form-group">
                            <input id="estado" class="estado line-l-off form-control" type="text" name="estado" placeholder="Estado" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 form-group box-check">
                            <label class="checkbox-inline" style="padding-left: 15px;">Preferência forma de contato:</label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkboxEmail" class="checkboxEmail" value="x"> E-mail
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkboxWhatsApp" class="checkboxWhatsApp" value="x"> WhatsApp
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkboxTelefone" class="checkboxTelefone" value="x"> Telefone
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 form-group box-check">
                            <label class="checkbox-inline" style="padding-left: 15px;">Li e concordo com a <a href="<?php echo base_url(); ?>politicadeprivacidade">Política de privacidade</a></label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkboxPolitica" class="checkboxPolitica" required="required" value="Sim"><span style="color: transparent;">.</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss" required="required" placeholder="Mensagem*:"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 form-group">
                            <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">

            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>politicadeprivacidade">Política de privacidade</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div id="cookies" class="cookies">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 box">
        <div class="col-xs-12 col-sm-9 col-md-9">
            <p>
                Usamos cookies para garantir que obtenha sempre a melhor experiência ao visitar o nosso website, para medir a utilização e o desempenho, bem como apresentar anúncios. Ao clicar em “Aceito”, concorda com as nossas configurações padrão.
            </p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <a href="#" class="btn_cookie btn center-block">Aceito</a>
        </div>
    </div>
</div>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>