<div class="row container">
    <div class="col s12">
        <h1 class="light center"><?php echo  $title; ?></h1>        
    </div>
    <div class="col s12">       
        <?php if( $editForm):?>
                    <form action="?router=Site/update/" method="POST">
                    <input type="hidden" name="id"   value="<?php echo $registrationQueryById[0]['id'] ?>">
                        <div class="input-field col s12">
                            <input type="text" name="name" id="name" required value="<?php echo $registrationQueryById[0]['name'] ?>">
                            <label for="name">Digite seu nome</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="email" id="email" required value="<?php echo $registrationQueryById[0]['email'] ?>">
                            <label for="email">Digite seu E-mail</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="submit" value="enviar" class="btn-small">
                            <input type="reset" value="Limpar" class="btn-small red">
                        
                        </div>
                    </form>                       
            <?php else:?>
                <form action="?router=site/cadastro/" method="POST">
            <div class="input-field col s12">
                <input type="text" name="name" id="name" required>
                <label for="name">Digite seu nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" required>
                <label for="email">Digite seu E-mail</label>
            </div>
            <div class="input-field col s12">
                <input type="submit" value="enviar" class="btn-small">
               
            </div>
        </form>
            <?php endif; ?>
    </div>
</div>
