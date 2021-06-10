

<?php $__env->startSection('title'); ?>
    Usuários
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card card-body">
        <h4 class="card-title">Editar usuário</h4>
        <h5 class="card-subtitle"> Altere as informações necessárias. </h5>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($user->usu_codigo == $usu_cod): ?>
            <form method="post" action="<?php echo e(route('usuarios_save', $user->usu_codigo)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group cad-form">              
              <div class="row">
                <div class="col-2 cad-label">
                  <label for="nome">Nome</label>
                </div>
                <div class="col-10 cad-input">
                  <input type="text" id="usu_nome" name="usu_nome" value="<?php echo $user->usu_nome ?>" class="form-control form-input" maxlength="50">
                </div>
              </div>
            </div>

            <div class="form-group cad-form">              
              <div class="row">
                <div class="col-2 cad-label">
                  <label for="nome">Cpf</label>
                </div>
                <div class="col-10 cad-input">
                  <input type="text" id="usu_cpf" name="usu_cpf" value="<?php echo $user->usu_cpf ?>" class="form-control form-input cpf">
                </div>
              </div>
            </div>

            <div class="form-group cad-form">              
              <div class="row">
                <div class="col-2 cad-label">
                <label for="email">Email</label>
                </div>
                <div class="col-10 cad-input">
                <input type="email" id="email" name="email" value="<?php echo $user->usu_email ?>" class="form-control form-input" maxlength="50">
                </div>
              </div>
            </div>

            <div class="form-group cad-form">              
              <div class="row">
                <div class="col-2 cad-label">
                  <label for="nome">Telefone</label>
                </div>
                <div class="col-10 cad-input">
                  <input type="text" id="telefone" name="telefone" value="<?php echo $user->usu_telefone ?>" class="form-control form-input telefone">
                </div>
              </div>
            </div>

            <div class="form-group cad-form">              
              <div class="row">
                <div class="col-2 cad-label">
                  <label for="senha">Senha</label>
                </div>
                <div class="col-10 cad-input">
                  <input type="password" class="form-control form-input" value="<?php echo $user->usu_senha ?>" id="senha" name="senha" maxlength="30">
                </div>
              </div>
            </div>
            <div class="form-group">
                        <button type="submit" class="btn btn-success m-r-10" onclick="return validarForm()">Confirmar</button>
                        <a href="<?php echo e(route('usuarios')); ?>"><button type="button" class="btn btn-dark">Cancelar</button></a>
            </div>

        </form>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <script>
        var nome = document.getElementById("usu_nome");
        var cpf = document.getElementById("usu_cpf");
        var email = document.getElementById("email");
        var telefone = document.getElementById("telefone");
        var senha = document.getElementById("senha");
        var aceitatermos = document.getElementById("aceitatermos");

        function validarForm() {
            if(nome.value != "" && email.value != "" && senha.value != "" && telefone.value != "" && cpf.value != "" && aceitatermos.checked==true){
                    nome.setCustomValidity("");
                    email.setCustomValidity("");
                    senha.setCustomValidity("");
                    cpf.setCustomValidity("");
                    telefone.setCustomValidity("");
                    aceitatermos.setCustomValidity("");
                    return true;
            }
            else{
                if (nome.value == ""){
                    nome.setCustomValidity("Informe seu nome completo!");
                    nome.reportValidity();
                    return false;
                }
                else{
                  if (cpf.value == ""){
                                cpf.setCustomValidity("Confirme seu cpf!");
                                cpf.reportValidity();
                                return false;
                            }
                    
                    else{
                      if (email.value == ""){
                        email.setCustomValidity("Informe seu email!");
                        email.reportValidity();
                        return false;
                        }
                        
                        else{
                          if (telefone.value == ""){
                                telefone.setCustomValidity("Informe seu telefone!");
                                telefone.reportValidity();
                                return false;
                              }
                          
                            else{
                              if (senha.value == ""){
                            senha.setCustomValidity("Informe uma senha!");
                            senha.reportValidity();
                            return false;
                            }
                            else{
                              if(aceitatermos.checked==false){
                                aceitatermos.setCustomValidity("É necessário confirmar!");
                                aceitatermos.reportValidity();
                              return false;
                              }
                              else{
                                nome.setCustomValidity("");
                    email.setCustomValidity("");
                    senha.setCustomValidity("");
                    cpf.setCustomValidity("");
                    telefone.setCustomValidity("");
                    aceitatermos.setCustomValidity("");
                    return true;
                              }
                            }
                            }
                        }
                    }
                }
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SiteNotepad\resources\views/usuarios/edit.blade.php ENDPATH**/ ?>