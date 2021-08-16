<div class="row">
    <div class="col-sm-8">
        <ul>
            <?php foreach(\App\Table\Article::getLast() as $post): ?>
            <h2>
                <a href="<?= $post->url; ?>">
                    <?= $post ->titre; ?>
                </a>
                <p><em><?= $post->categorie;?></em></p>
            </h2>
            <p>
                <?= $post->extrait; ?>
            </p>

            <?php endforeach; ?>
        </ul>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach(\App\Table\Categorie::all() as $categorie): ?>
                <li>
                   <a href="<?= $categorie->url;?>">
                        <?= $categorie->titre;?>
                   </a>
                </li>
            <?php endforeach;?>
        </ul>
            
    </div>
</div>