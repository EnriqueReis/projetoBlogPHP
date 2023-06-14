<?php

    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postID = $_GET['id'];
        $currentPost;

        foreach($posts as $posts){
            if($posts['id'] == $postID){
                $currentPost = $posts;
            }
        }

    }

?>


   

    <main id="post-container">
        <div class="cotent-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="./img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>">
            </div>
            <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis exercitationem voluptas saepe recusandae. Repellat molestias iste quaerat veritatis vel, doloremque adipisci laboriosam? Illum quod quas sequi recusandae? Amet, quaerat accusantium?
            Provident labore sequi perspiciatis reiciendis a sit porro deserunt voluptas cum nulla consequuntur itaque nam quis beatae, repellendus aliquam soluta sint quaerat! Voluptate provident totam voluptatum ipsam! Voluptatem, non accusamus!
            Enim, in veniam rem praesentium assumenda ipsum pariatur nobis consequuntur ea aliquid autem recusandae hic temporibus, incidunt nam quibusdam eum illum neque facilis minima suscipit ex quasi! Ipsa, corporis atque.
            Officiis, corrupti? Pariatur molestiae eaque totam possimus, vel beatae, maxime earum maiores odio deleniti, numquam est non? Sit veritatis quam debitis accusantium molestias facilis modi placeat odio, consequuntur eveniet aspernatur.
            Rerum nemo sapiente, id cumque similique quisquam omnis odio voluptatum perferendis commodi. Quos sequi, eaque illo tenetur fugit iusto beatae minus, in commodi fugiat eum mollitia, accusantium vel adipisci voluptatibus!
        </p>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis exercitationem voluptas saepe recusandae. Repellat molestias iste quaerat veritatis vel, doloremque adipisci laboriosam? Illum quod quas sequi recusandae? Amet, quaerat accusantium?
            Provident labore sequi perspiciatis reiciendis a sit porro deserunt voluptas cum nulla consequuntur itaque nam quis beatae, repellendus aliquam soluta sint quaerat! Voluptate provident totam voluptatum ipsam! Voluptatem, non accusamus!
            Enim, in veniam rem praesentium assumenda ipsum pariatur nobis consequuntur ea aliquid autem recusandae hic temporibus, incidunt nam quibusdam eum illum neque facilis minima suscipit ex quasi! Ipsa, corporis atque.
            Officiis, corrupti? Pariatur molestiae eaque totam possimus, vel beatae, maxime earum maiores odio deleniti, numquam est non? Sit veritatis quam debitis accusantium molestias facilis modi placeat odio, consequuntur eveniet aspernatur.
            Rerum nemo sapiente, id cumque similique quisquam omnis odio voluptatum perferendis commodi. Quos sequi, eaque illo tenetur fugit iusto beatae minus, in commodi fugiat eum mollitia, accusantium vel adipisci voluptatibus!
        </p>
   
        </div>

        <aside id="nav-container">
            <h3 id="tags-title">tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag):  ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categoria</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category):  ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>

       
    </main>

    

<?php
    include_once("templates/footer.php");
?>

