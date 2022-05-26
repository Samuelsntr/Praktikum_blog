<?php
include "header.php";
 
$posts = $conn->query("SELECT * FROM Post");
 
while($post = $posts->fetch_object()) {
 ?>
   <div class="card">
       <a href="post.php?id=<?php echo $post->id ?>"><h2><?php echo $post->title; ?></h2></a>
       <h5><?php echo $post->createdAt; ?></h5>
       <div><?php echo "<img src='uploads/$image[image]' width='70' height='90' />";?></div>
                <div><?php echo $image['tmp_name']?></div>
   </div>
   <?php
}
?>
<?php include "footer.php" ?>
