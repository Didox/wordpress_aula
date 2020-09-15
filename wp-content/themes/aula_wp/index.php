<?php
/**
 * O tema do danilo do torne-se um programador
 *
 * bla bla
 *
 * @link http://www.torneseumprogramador.com.br
 *
 * @package Didox Business & Technology
 * @subpackage Aula Wordpress
 * @since 0.0.1
 */

get_header();
?>
    
    <div class="container-fluid imagem-topo" style="background-image: url(/images/capa.png);">
  <div class="container-fluid div-topo">

    <div>
      <div class="div-col-text">
        <h1 class="div-col-h1" style="text-transform:uppaercase;">Torne-se um PROGRAMADOR</h1>
        <p class="div-col-p">Aprenda gratuitamente com os nossos conteúdos gravados, anote tudo e pague somente para tirar dúvidas em aulas particulares.</p>
      </div>
      <div>
        <iframe class="iframe" src="https://www.youtube.com/embed/2GxesFE4ETg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
    <div class="coluna1">
      

        <h1>teste deploy DevOps itau</h1>
  
  <div class="container-fluid cursos">
    <br><br>
    <h1 class="curso-h1">Cursos</h1>
    <br>
    <div class="container">
      <?php
      $args = array(
        'post_type'=>'aula',
        'posts_per_page'=> 6,
      );
      $query = new WP_Query( $args );
      while ( $query->have_posts() ) : $query->the_post(); ?>
        <a href="<?php echo get_permalink(); ?>" class="link-aula">
          <h1>
            <?php the_title(); ?>
          </h1>
          <div>
            <?php the_field('modulo'); ?>
          </div>
        </a>
        <hr>
      <?php endwhile; ?>
    </div>
    <br><br><br>
  </div>

  <div class="container-fluid cursos">
    <br><br>
    <h1 class="curso-h1">Matérias</h1>
    <br>
    <div class="container">
      <?php
      $args = array(
        'posts_per_page'=> 2,
      );
      $query = new WP_Query( $args );
      while ( $query->have_posts() ) : $query->the_post(); ?>
        <a href="<?php echo get_permalink(); ?>" class="link-aula">
          <h1>
            <?php the_title(); ?>
          </h1>
        </a>
        <hr>
      <?php endwhile; ?>
    </div>
    <br><br><br>
  </div>





  

      



 
  
  <div class="container-fluid ul-aulas" id="UL" >
    <br><br>
    <h1 class="ulAulas-h1">Últimas aulas</h1>
    <br>
    <div class="container-fluid aulas" style="text-align: center;">
     
        
       <a href="/aula?id=zpZpRggY6FE&aula=1&tipo=wordpress&professor=Danilo">
          <img data-original="http://img.youtube.com/vi/zpZpRggY6FE/maxresdefault.jpg" src="http://img.youtube.com/vi/zpZpRggY6FE/maxresdefault.jpg" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".2s">
       </a>
      
        
       <a href="/aula?id=ygQtOrIcT1E&aula=68&tipo=ruby&professor=Danilo">
          <img data-original="http://img.youtube.com/vi/ygQtOrIcT1E/maxresdefault.jpg" src="http://img.youtube.com/vi/ygQtOrIcT1E/maxresdefault.jpg" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".2s">
       </a>
      
        
       <a href="/aula?id=B3VGTzUHRMc&aula=83&tipo=c-sharp&professor=Danilo">
          <img data-original="http://img.youtube.com/vi/B3VGTzUHRMc/maxresdefault.jpg" src="http://img.youtube.com/vi/B3VGTzUHRMc/maxresdefault.jpg" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".2s">
       </a>
      
        
       <a href="/aula?id=tYq3027KHGw&aula=1&tipo=arquitetura&professor=Danilo">
          <img data-original="http://img.youtube.com/vi/tYq3027KHGw/maxresdefault.jpg" src="http://img.youtube.com/vi/tYq3027KHGw/maxresdefault.jpg" class="img-fluid img-aulas wow animated bounceInUp" data-wow-duration="1s" data-wow-delay=".2s">
       </a>
      
        
    </div>
    <br><br><br> 
  </div>
  






      <div class="container-fluid" id="AP" class="div-compra">
  <br><br><br><br>
  <div class="container-fluid div-compra-2">
    <div class="card card-compra">
      <div class="card-body" style="padding:0px">
        <h5 class="card-title card-title-h5" style="background: #e32b2b;text-shadow: 7px 6px 9px #69282e;">Aulas <span>Particulares</span></h5>

        <div class="div-img-compra">
          <img src="/images/aula-virtual.png" class="img-compra">
          <div class="div-text-card">
            <p class="card-text p-card-text"><img src="/images/checked.png" style="height: 17px;"> <span>Tenha um <b>MENTOR</b> ao seu Lado;</span></p>

            <p class="card-text p-card-text"><img src="/images/checked.png" style="height: 17px;"> <span>Aprenda com quem sabe fazer na <b>PRÁTICA</b>;</span></p>

            <p class="card-text p-card-text"><img src="/images/checked.png" style="height: 17px;"> <span>Seja <b>DIARIMENTE</b> motivado;</span></p>

            <p class="card-text p-card-text"><img src="/images/checked.png" style="height: 17px;"> <span>Estude um quem tem AUTORIADE no assunto</span></p>
          </div>
        </div>

        <br>
        
        <div class="div-valor-compra">
          <p><b>R$</b> <span class="valor-compra">80,00</span><b>/hora</b></p>
          <a href="#" class="btn btn-compra" style="background: #dd2b2b;" data-toggle="modal" data-target="#modalExemplo">Comprar</a>
        </div>
        
      </div>
    </div>

    <div class="card card-compra-project">
      <div class="card-body" style="padding:0px">
        <h5 class="card-title card-title-h5-2">De vida ao seu PROJETO</h5>

        <div class="div-img-compra">
          <img src="/images/icone-projetos.png" class="img-compra-project">
          <div class="div-text-card">
            <p class="card-text p-card-text"><img src="/images/checked.png" style="height: 17px;"> <span>Desenvolva do MENOR ao MAIOR sistema com suporte a todo momento;</span></p>
            <p class="card-text p-card-text"><img src="/images/checked.png" style="height: 17px;"> <span>Saiba como Rentabilizar e Escalar seu sistema;</span></p>
            <p class="card-text p-card-text"><img src="/images/checked.png" style="height: 17px;"> <span>Aprenda como EVOLUIR o seu projeto;</span></p>
          </div>
        </div>
        <br>
        <div class="div-valor-compra">
          <p><b>R$</b> <span class="valor-compra">120,00</span><b>/hora</b></p>
          <a href="#" class="btn btn-compra"  style="background:#0271b9;"data-toggle="modal"data-target="#modalDEV">Comprar</a> 
        </div>
      </div>
    </div>
  </div> 
</div>




<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 0; background-color: #f5f5f5;">
      <div class="modal-header" style="border: none;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-body-conteudo" >
        <h1 style="font-weight: 700">Comprar hora AULA</h1>
        <p style="font-size: 20pt; font-weight: 300;">Selecione a quantidade de horas desejadas</p>

        <form action="https://www.paypal.com/cgi-bin/webscr" target="_blank" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="Y3DYA26UXKXFN">
        <div style="display:inline-block;">
            <div style="margin-bottom: 14px;">
              <select name="os0" style="color: #716b6b; padding: 6px; width: 114%; border: 2px solid #716b6b;">
                <option value="1 hora aula">1 hora aula R$80,00</option>
                <option value="2 horas aula">2 horas aula R$160,00</option>
                <option value="3 horas aula">3 horas aula R$240,00</option>
                <option value="4 horas aula">4 horas aula R$320,00</option>
              </select>
            </div>
         </div>
        <p style="font-size: 20pt; font-weight: 300;">Escolha a forma de pagamento</p>
        <div>
          <input type="hidden" name="currency_code" value="BRL">
          <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!" style="width: 35%; float:left">
        </div>
      </form>

      <br>
      <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" target="_blank">
      <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
      <input type="hidden" name="code" value="441830870000FA14446F0FB34B063C62" />
      <input type="hidden" name="iot" value="button" />
      <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
      </form>


          <br>
        <div>
           <div style="float: left;margin-right: 30px;">
             <p><span style="font-weight: 900;">Skype</span> <br><span>didox_59</span></p>
           </div>
           <div>
             <p><span style="font-weight: 900;">Hangouts</span> <br><span><a href="mailto:danilo.aparecido.santos@gmail.com" target="_blank">danilo.aparecido.santos@gmail.com</a></span></p>
           </div>
           <div>
             <p><span style="font-weight: 900;">Whatsapp</span> <br><span><a href="https://api.whatsapp.com/send?phone=5511976144154&amp;text=Oi%20Danilo%2C%20quero%20marcar%20uma%20consultoria%20ou%20aula%20particular" target="_blank">+55 11 97614-4154</a></span></p>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDEV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 0; background-color: #f5f5f5;">
      <div class="modal-header" style="border: none;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-body-projeto">
        <h1 style="font-weight: 700">Escolha a forma de pagamento</h1>
        <p class="p-modal-projeto"><a href="mailto:danilo.aparecido.santos@gmail.com" target="_blank">danilo.aparecido.santos@gmail.com</a></p>


        <form action="https://www.paypal.com/cgi-bin/webscr" target="_blank" method="post" target="_top" style="float:left">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="LAERB93YFNHN4">
          <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!" style="width: 96%">
          </form>

        <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" target="_blank" method="post">
          <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
          <input type="hidden" name="code" value="566F638B2C2CD4500489EFAFBBBB2E3D" />
          <input type="hidden" name="iot" value="button" />
          <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
          </form>
        <br><br>
      </div>
    </div>
  </div>
</div>




      <br><br><br><br>

<div class="container-fluid imagem-calendario agendar">
  <div class="container-fluid div-image-2">
     
     <div class="div-container-text">
       <h1 class="text-h1">Agende uma Reunião</h1>

       <p class="p-text"> Aqui você pode marcar uma reunião ou consultoria comigo, após marcar irei verificar se o seu pagamento está correto para que possamos dar os próximos passos, vejo você em nossa reunião !!!</p>

       <a href="/agenda" class="btn btn-agendar">Agendar</a>
     </div>

  </div>
</div>
      
<div class="container-fluid mentorias">
  <br><br>
  <div class="container">
    <div class="wow animated flipInX" data-wow-duration=".3s" data-wow-delay=".3s">
        <h1 class="h1-mentorias">Mentorias</h1>
      </div>
      <br><br><br>

    <div>
       <a href="/mentorias/meio_de_pagamento">
        <img src="images/zero_pagamento.png" class="img-fluid img-mentorias" style="float: left;margin-right: 4%;">
      </a>

      <div style="padding-bottom: 10%;">
        <br>
        <h2 class="h2-mentoria-home">Do Zero ao Meio de Pagamento</h2>
        <p class="p-mentoria-home">Os meios de pagamento online são ferramentas que permitem a realização de transações financeiras entre empresas e clientes no mundo digital. Neste curso faremos com que você aprenda algumas técnicas de produtos digitais e modelagem para colocá-lo à venda.</p>
      </div>
    </div>

     <div>
       <a href="/mentorias/zero_api">
          <img src="images/zero_api.png" class="img-fluid img-mentorias" style="float: right;margin-left: 4%;">
      </a>

      <div style="padding-bottom: 12%;">
        <br>
        <h2 class="h2-mentoria-home" >Do Zero a API</h2>
        <p class="p-mentoria-home" > As APIs são uma forma de integrar sistemas, possibilitando benefícios como a segurança dos dados, facilidade no intercâmbio entre informações com diferentes linguagens de programação e a monetização de acessos. Aprenda a como fazer essa integração ao seu sistema com o curso completo Do Zero a API.</p>
      </div>
    </div>
  </div>
  <br><br>
</div>





      
<div class="container-fluid sobre" style="background-attachment: fixed;">

  <div class="container-fluid sobre-interno">
    <div class="container">
      <div style="padding-top: 11%;">
        <h1 class="titulo-sobre">Danilo Aparecido</h1>
        <p style="text-indent: 40px"> <i>Oi meu nome é Danilo, fundei o torne-se um programador com objetivo de levar tecnologia e educação para todas as pessoas que deseja aprender. Minha proposta para você é: Aprenda gratuitamente com os nossos conteúdos gravados, anote tudo e pague somente para tirar dúvidas em aulas particulares. Se o nosso conteúdo ajudar você, já iremos saber que fizemos um bom trabalho, obrigado por estar aqui.</i>
        </p>

        <p style="text-indent: 40px">
          Para mais sobre mim acesse:
          <br>
          <a href="http://www.daniloaparecido.com.br">http://www.daniloaparecido.com.br</a>
        </p>
      </div>
  </div>
</div>
</div>
      <div class="container-fluid div-comentario number1">
  <br><br>
    <h1 class="h1-comentario">
      O que nossos alunos e parceiros estão falando do projeto Torne-se um Programador?
    </h1>

  <section class="regular slider">
    <div>
      <div class="div-image-user">
        <img src="images/Isaac Martiniano.jpg" class="img-user">
      </div>
       <div class="card card-comentario">
        <div class="div-comentario-text">
          <div>
             <p class="p-comentario">
              Putz encontrei esse canal hoje. Anos luz a frente dos ensino do meu curso na faculdade. Parabens brother vc tem um método muito detalhado e esclarecedor de passar conhecimento. Forte abraço! Muito obrigado por passar tanto conhecimento!</p>
             <p class="p-nome-user"><i><b>Isaac Martiniano</b></i></p>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="div-image-user">
        <img src="images/Patrick Siqueira.jpg" class="img-user">
      </div>
       <div class="card card-comentario">
        <div class="div-comentario-text">
          <div>
             <p class="p-comentario">
              Primeiramente muito obrigado por disponibilizar materiais tao importante, conserteza vou compartilhar e acompanhar todos os seus videos, valeu por tudo. A principio nao tinha algum contato com a programação, mais agora terei contato completo com os seus videos. novamente muito obrigado.</p>
             <p class="p-nome-user"><i><b>Patrick Siqueira</b></i></p>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="div-image-user">
        <img src="images/Ralf Montel.jpg" class="img-user">
      </div>
       <div class="card card-comentario">
        <div class="div-comentario-text">
          <div>
             <p class="p-comentario">
              Cara, te amo, namoral. Aprendi a programar por conta própria com o sonho de empreender, mas por ser autodidata, acabava que aprendia bem as paradas porém coisas como essa de planejamento passava em branco por eu ta sozinho e sem orientação. Ae por exemplo não sabia como organizar um layout, usabilidade e coisas como essa que vc passou(era tudo no papel). </p>
             <p class="p-nome-user"><i><b>Ralf Montel</b></i></p>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="div-image-user">
        <img src="images/Anderson Godoy.jpg" class="img-user">
      </div>
       <div class="card card-comentario">
        <div class="div-comentario-text">
          <div>
             <p class="p-comentario">
              Danilo, meus sinceros parabéns pelo projeto... são caras como você que eu ainda tenho esperança... Eu tenho dificuldades com as Sintaxes, mas assistindo as suas aulas, tudo está ficando mais claro na minha mente. continue o seu Ótimo trabalho! Deus o abençoe!</p>
             <p class="p-nome-user"><i><b>Anderson Godoy</b></i></p>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="div-image-user">
        <img src="images/Michel Bernardo.jpg" class="img-user">
      </div>
       <div class="card card-comentario">
        <div class="div-comentario-text">
          <div>
             <p class="p-comentario">
              Impressionante, tenho vários cursos de js pagos mas consigo entender melhor aqui. O diferencial é que me sinto na sala de aula começando no quadro, parece que ficou mas focado, fora a didática top.</p>
             <p class="p-nome-user"><i><b>Michel Bernardo</b></i></p>
          </div>
        </div>
      </div>
    </div>
  </section>

   <br><br>
</div>



<div class="container-fluid div-comentario number2">
  <br><br>
  <h1 class="h1-comentario">
    O que nossos alunos e parceiros estão falando do projeto Torne-se um Programador?
  </h1>

  <br><br>
  <div style="border-left: 4px solid #5c5e9b; padding-left: 6px;">
    <p class="p-comentario2">
      <i>"Putz encontrei esse canal hoje. Anos luz a frente dos ensino do meu curso na faculdade. Parabens brother vc tem um método muito detalhado e esclarecedor de passar conhecimento. Forte abraço! Muito obrigado por passar tanto conhecimento!"
      </i>
    </p>
    <p class="p-nome-user2" style="color: #524c4c;"><b>Isaac Martiniano</b></p>
  </div>
  <br><br>
  <div style="border-right: 4px solid #5c5e9b; padding-right: 6px; text-align: end">
    <p class="p-comentario2">
      <i>"Impressionante, tenho vários cursos de js pagos mas consigo entender melhor aqui. O diferencial é que me sinto na sala de aula começando no quadro, parece que ficou mas focado, fora a didática top."
      </i>
    </p>
    <p class="p-nome-user2" style="color: #524c4c;"><b>Michel Bernardo</b></p>
  </div>
  <br><br>
  <div style="border-left: 4px solid #5c5e9b; padding-left: 6px;">
    <p class="p-comentario2">
      <i>"Cara, te amo, namoral. Aprendi a programar por conta própria com o sonho de empreender, mas por ser autodidata, acabava que aprendia bem as paradas porém coisas como essa de planejamento passava em branco por eu ta sozinho e sem orientação. Ae por exemplo não sabia como organizar um layout, usabilidade e coisas como essa que vc passou(era tudo no papel)."
      </i>
    </p>
    <p class="p-nome-user2" style="color: #524c4c;"><b>Michel Bernardo</b></p>
  </div>
  <br><br>
  <div style="border-right: 4px solid #5c5e9b; padding-right: 6px; text-align: end">
    <p class="p-comentario2">
      <i>"Primeiramente muito obrigado por disponibilizar materiais tao importante, conserteza vou compartilhar e acompanhar todos os seus videos, valeu por tudo. A principio nao tinha algum contato com a programação, mais agora terei contato completo com os seus videos. novamente muito obrigado."
      </i>
    </p>
    <p class="p-nome-user2" style="color: #524c4c;"><b>Patrick Siqueira</b></p>
  </div>
  <br><br><br><br>
</div>




    </div>
    <div class="container-fluid enviar-email" style="">
  <br> 
  <h1> ELEVE SEUS GANHOS E POTENCIALIZE SUA PERFORMANCE</h1>
  <h4> Receba aviso de aulas e vagas todas as semanas</h4>
  <br>
  <div class="row divizoes-row" id="formMail">
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="form-group">
        <input type="text" id="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NOME">
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
     <div class="form-group">
        <input type="email" id="email" class="form-control" id="exampleInputPassword1" placeholder="EMAIL">
      </div>
    </div>
  </div>
  <br>
  <button onclick="app.saveMail('#formMail');" class="btn">ENVIAR</button>
  <br><br><br><br>
</div>


<div id="faleDanilo" style="position: fixed; top: calc(100% - 115px); right: 0px; background: rgb(255, 255, 255); padding: 10px; border: 2px solid rgb(71, 159, 201); text-align: left; border-radius: 6px; margin-right: 2px; line-height: 14px; display: none;">
  <a style="color: #0b3346" href="https://api.whatsapp.com/send?phone=5511976144154&amp;text=Oi%20Danilo%2C%20quero%20marcar%20uma%20consultoria%20ou%20aula%20particular" target="_blank">
    <div style="float: left;">
      <img src="http://www.torneseumprogramador.com.br/imagens/danilo_whatsapp.jpg" style="width: 80px;background: transparent;">
    </div>
    <div style="float: left;margin-left: 10px;">
      Olá ...<br>fale comigo pelo whatsapp<br>
      Clicando aqui<br>
      <img src="http://www.torneseumprogramador.com.br/imagens/whatsapp.png" style="width: 40px;background: transparent;">
    </div>
  </a>
</div>

<div id="logoWhats" style="position: fixed; top: calc(100% - 50px); right: 0px;">
  <a href="https://api.whatsapp.com/send?phone=5511976144154&amp;text=Oi%20Danilo%2C%20quero%20marcar%20uma%20consultoria%20ou%20aula%20particular" target="_blank" title="Fale comigo pelo whatsapp">
    <img src="/imagens/whatsapp.png" style="width: 40px;background: transparent;">
  </a>
</div>
<?php
get_footer();


