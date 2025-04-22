<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>img/<?= $currentPost['img']?>" alt="<?= $currentPost
                ['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis corporis nam obcaecati fugit ipsa asperiores eum impedit ex alias voluptatem nulla quidem aspernatur suscipit, quaerat eaque ea. Quibusdam, qui natus.
            Neque animi recusandae repellendus voluptas qui quidem quis nobis. Maiores laborum veritatis sint vel provident atque mollitia quos dignissimos ad soluta dolorum consequuntur eum ipsam incidunt, qui facere dolores doloribus?
            Est nulla laborum commodi ad aperiam alias voluptatum similique delectus! Tempora quia voluptas est odit reprehenderit ea aperiam similique dolore doloribus praesentium. Placeat delectus dignissimos neque excepturi nesciunt velit aliquid!
            Quidem reprehenderit sint, tempore id facilis distinctio aperiam? Aperiam minima tempora odio molestias quo suscipit, nulla voluptatem, temporibus blanditiis quisquam minus odit unde illum, quibusdam dolorem a! Natus, fuga minima?
            Consectetur sunt aliquam architecto repudiandae perferendis veniam modi repellat. Assumenda accusamus quidem laborum quisquam. Explicabo deleniti aut dolorum, nemo quidem unde possimus omnis quaerat est beatae, quia illo modi blanditiis!</p>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category?></a></li>
            <?php endforeach; ?>  
        </ul>
    </aside>
    </main>
    
<?php include_once("templates/footer.php");
?>