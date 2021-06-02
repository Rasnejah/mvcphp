<div class="row container">
    <div class="col s12">
        <h1 class="light">Confirmar Exclusão de registro?</h1>
        <p class="col s6"><strong>Nome: </strong><?php echo $registrationQueryById[0]['name'] ?></p>
        <p class="col s6"><strong>Nome: </strong><?php echo $registrationQueryById[0]['email'] ?></p>
        <form action="?router=Site/delete/" method="POST">
                    <input type="hidden" name="id"   value="<?php echo $registrationQueryById[0]['id'] ?>">
                    <input type="submit" value="Excuir Cadastro" class="btn-small red">
                    <a href="?router=site/"  class="btn-small">Cancelar</a>
         </form>
    </div>
</div>
