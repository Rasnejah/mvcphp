<div class="row container">
    <div class="col s12">
        <h1 class="light">Pagina Consulta</h1>
        
            <table class="striped">
                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
            <tbody>
                <?php foreach($registrationQuery as $register): ?>
                    <tr>
                        <td><?php echo $register['name'];?></td>
                        <td><?php echo $register['email'];?></td>
                        <td>
                            <a href="?router=Site/editar/&id=<?php echo $register['id']?>" class="btn-small">Alterar</a>
                            <a href="?router=Site/confirmarExclusao/&id=<?php echo $register['id']?>" class="btn-small red">excluir</a>
                        </td>
                    </tr>                   
                <?php endforeach; ?>
            </tbody>
            </table>
        </h2>
    </div>
</div>
