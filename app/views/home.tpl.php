
<div class="image-sonic">
    





    <table class="table">
        <thead>

            <th scope="row">images</th>
            <td colspan="2" class="table-active">name</td>
            <td>Description</td>


        </thead>
        <tbody>
            <?php foreach ($viewVars['personnages'] as $personnagesObj) : ?>
            <tr class="table-active">
                
                    <th scope="row"><img style="width: 150px;" src="<?= $_SERVER['BASE_URI'] ?>/images/<?= $personnagesObj->getPicture() ?>" ?></th>
                    <td colspan="2" style="font-weight: bolder;" class="table-active"><a href="<?=$router->generate('main-portrait',['id'=>$personnagesObj->getId()])?>"><?= $personnagesObj->getName() ?></a></td>
                    <td class="description"><?= $personnagesObj->getDescription() ?> </td>
                    
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>