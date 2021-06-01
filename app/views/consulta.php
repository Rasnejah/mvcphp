<div class="row container">
    <div class="col s12">
        <h1 class="light">Pagina Consulta</h1>
        <h2>
            <?php foreach($registrationQuery as $register): ?>
                <p>
                    nome: <?php echo $register['name'];?><br>
                    email:<?php echo $register['email'];?>
                </p>
            <?php endforeach; ?>
        </h2>
    </div>
</div>
