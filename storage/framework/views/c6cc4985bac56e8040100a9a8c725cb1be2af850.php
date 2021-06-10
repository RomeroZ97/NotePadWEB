

<?php $__env->startSection('title'); ?>
    Usuários
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('flashs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .dropdown-menu.show{
            position: relative !important;
            margin: 0 !important;
            float: right;
        }
    </style>
    <div class="card">
        <div class="card-body collapse show">
            <a href="<?php echo e(route('site_create')); ?>">
                <button type="button" class="btn waves-effect waves-light btn-info">Novo usuário</button>
            </a>
            
            
        </div>
    </div>

    <table class="tablesaw table-striped table-hover table-bordered table tablesaw-columntoggle" data-tablesaw-mode="columntoggle" id="tablesaw-509">
        <thead>
        <tr>
            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist">ID</th>
            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist">Nome</th>
            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" class="tablesaw-priority-3">E-mail</th>

            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($usuarios as $user) {?>
            <tr>
                <td class="title"><?php echo $user->usu_codigo ?></td>
                <td class="tablesaw-priority-3"><?php echo $user->usu_nome ?></td>
                <td class="tablesaw-priority-2"><?php echo $user->usu_email ?></td>
                <td>                                                   
                    <a style="float: left; padding-right: 5px;" href="<?php echo e(route('usuarios_edit', $user->usu_codigo)); ?> ">
                        <button type="button" class="btn waves-effect waves-light btn-warning">Editar</button>
                    </a>
                    <!--
                    <a style="float: left; padding-right: 5px;" href="{{ route('usuarios_editPass', <?php echo $user->usu_codigo ?>) }}">
                        <button type="button" class="btn waves-effect waves-light btn-success">Alterar Senha</button>
                    </a>-->
                    
                    

                    <form style="float: right;" method="post" action="<?php echo e(route('usuarios_delete', $user->usu_codigo)); ?>">
                        <?php echo csrf_field(); ?>
                        <button onclick="send_form()" type="submit" class="btn waves-effect waves-light btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
    <script>
        function send_form() {
            event.preventDefault();
            var form = event.target.form;

            Swal.fire({
                title: "Tem certeza?",
                text: "Deseja mesmo excluir este usuário?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sim, excluir",
                cancelButtonText: "CANCELAR",
            }).then(function (result) {
                if (result.value) {
                    form.submit();
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SiteNotepad\resources\views/usuarios/index.blade.php ENDPATH**/ ?>