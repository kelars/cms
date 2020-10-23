<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

<?php include "includes/admin_navigation.php"; ?>

<div id="page-wrapper">
    <div class="container-fluid">

                <!-- Add Category Form-->
        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header">
                    Posts
                </h1>


<table class="table table-bordered table-hover">
    <thead>
        <tr>
           
           
           
            <th>Id</th>
            <th>Category Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
            <th>Image</th>
            <th>Content</th>
            <th>Tags</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
     
 <?php      
   
 
$query = "SELECT * FROM posts";
$select_posts = mysqli_query($connection, $query);                                 
                                
while($row = mysqli_fetch_assoc($select_posts)){
$post_id = $row['post_id'];
$post_category_id = $row['post_category_id'];     
$post_title = $row['post_title'];     
$post_author = $row['post_author'];     
$post_date = $row['post_date'];     
$post_image = $row['post_image'];     
$post_content = $row['post_content'];     
$post_tags = $row['post_tags'];     
$post_comment_count = $row['post_comment_count'];     
$post_status = $row['post_status'];     
        
echo "<tr>";
    echo "<td>{$post_id}</td>";       
    echo "<td>{$post_category_id}</td>";       
    echo "<td>{$post_title}</td>";       
    echo "<td>{$post_author}</td>";       
    echo "<td>{$post_date}</td>";       
    echo "<td><img width='100' src='../images/$post_image' alt='image'></td>";       
    echo "<td>{$post_content}</td>";       
    echo "<td>{$post_tags}</td>";       
    echo "<td>{$post_comment_count}</td>";       
    echo "<td>{$post_status}</td>";       
echo "</tr>";    
}
            ?>
    
</tbody>
</table>

















            </div>
        </div>
                <!-- /.row -->

    </div>
            <!-- /.container-fluid -->
</div>
<?php include "includes/admin_footer.php"; ?>
