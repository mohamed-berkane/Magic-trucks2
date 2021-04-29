<table class="table">
    <thead>
        <tr>
            <th scope="col"><img style="width: 150px;" src="<?= $_SERVER['BASE_URI'] ?>/images/<?= $viewVars['personnage']->getPicture() ?>" ?></th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"> <?= $viewVars['personnage']->getName() ?></th>

        </tr>
        <tr>
            <th scope="row"> <?= $viewVars['personnage']->getDescription() ?></th>

        </tr>

    </tbody>
</table>