<?php $title='Utilisateur non confirmé';?>
<?php ob_start();?>

<div class="container mt-4">

    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col">Identifiant</th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">E-mail</th>
            <th scope="col">confirmer</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($data=$users->fetch()) {
            ?>
            <tr>
                <form action="index.php?action=conf&amp;id=<?= $data['id'] ?>" method="POST">
                    <th scope="row"><?= $data['id'] ?></th>
                    <td><?= $data['nom'] ?></td>
                    <td><?= $data['prenom'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td>
                        <button type="submit" class="btn btn-outline-success">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-check"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM6 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm6.854.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                            confirmer
                        </button>
                    </td>
                </form>
            </tr>
            <?php
        }
            ?>
        </tbody>
    </table>


</div>




<?php $content=ob_get_clean();?>
<?php require('TemplateLoggedIn.php');
