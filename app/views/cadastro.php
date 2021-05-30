<div class="row container">
    <div class="col s12">
        <h1 class="light">Cadastro</h1>        
    </div>
    <div class="col s12">
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
    </div>
</div>
