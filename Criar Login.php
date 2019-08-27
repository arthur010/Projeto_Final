<?php include './header.php' ?>
<link rel="stylesheet" type="text/css" href="Criar_Login.css">

<h2>Crie aqui sua conta</h2> 
   <form>
       <div class="form-group">    
        <label for="nome">Nome</label>   
        <input type="text" id="nome"  placeholder="Informe o nome" class="form-control" required>
       </div>
       
       <div class="form-group">
           <label for="senha">Senha</label>
           <input type="password" id="senha" placeholder="Digite sua senha" class="form-control" required>
    </div>
  
       <div class="form-group">
           <label for="email">email</label>
           <input type="email" id="email" placeholder="Digite seu email" class="form-control" required>
       </div>

     <div class="form-group">
        <label for="confsenha">Confirmar Senha</label>
        <input type="password" id="confsenha" placeholder="Digite sua senha" class="form-control" required> 
     </div>
    
       <div class="Botão">
    <input type="reset" value="Limpar">
             
<!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
  Enviar
</button>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Cadastro concluído</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Seu cadastro foi feito com sucesso
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary"data-dismiss="modal">Concluir </button>
      </div>
    </div>
  </div>
</div>
   </div>
    </form>  
  
    <?php include './footer.php' ?>