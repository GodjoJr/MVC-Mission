<?php
/** 
 * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
 * Et un formulaire pour ajouter un article. 
 */

?>

<h2>Edition des articles</h2>

<table>
    <thead>

        <tr>
            <th>
                <div>
                    Titre
                    <a href="index.php?action=admin&orderBy=title&direction=ASC" class="sort asc">▲</a>
                    <a href="index.php?action=admin&orderBy=title&direction=DESC" class="sort desc">▼</a>
                </div>
            </th>
            <th>
                <div>
                    Contenu
                </div>
            </th>
            <th>
                <div>
                    Date de création
                    <a href="index.php?action=admin&orderBy=date_creation&direction=ASC" class="sort asc">▲</a>
                    <a href="index.php?action=admin&orderBy=date_creation&direction=DESC" class="sort desc">▼</a>
                </div>
            </th>
            <th>
                <div>
                    Nombre de vue(s)
                    <a href="index.php?action=admin&orderBy=views&direction=ASC" class="sort asc">▲</a>
                    <a href="index.php?action=admin&orderBy=views&direction=DESC" class="sort desc">▼</a>
                </div>
            </th>
            <th>
                <div>
                    Nombre de commentaire(s)
                    <a href="index.php?action=admin&orderBy=comment_count&direction=ASC" class="sort asc">▲</a>
                    <a href="index.php?action=admin&orderBy=comment_count&direction=DESC" class="sort desc">▼</a>
                </div>
            </th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $article->getTitle() ?></td>
                <td><?= $article->getContent(200) ?></td>
                <td><?= Utils::convertDateToFrenchFormat($article->getDateCreation()) ?></td>
                <td><?= $article->getViews() ?></td>
                <td><?= $article->getCommentCount() ?></td>
                <td><a class="submit" href="index.php?action=showUpdateArticleForm&id=<?= $article->getId() ?>">Modifier</a>
                </td>
                <td><a class="submit" href="index.php?action=deleteArticle&id=<?= $article->getId() ?>" <?= Utils::askConfirmation("Êtes-vous sûr de vouloir supprimer cet article ?") ?>>Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

</div>

<a class="submit" href="index.php?action=showUpdateArticleForm">Ajouter un article</a>