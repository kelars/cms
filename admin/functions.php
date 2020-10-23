<?php 


// ADD CATEGORY 
function insert_categories() {
    
    global $connection;
    if(isset($_POST['submit'])){

$cat_title = $_POST['cat_title'];
    
    if($cat_title == "" || empty($cat_title)) {
        
        echo "This field should not be empty";
    } else {
        $query = "INSERT INTO categories(cat_title)";
        $query .= "VALUES('{$cat_title}') ";
        
        $create_category_query = mysqli_query($connection, $query);
            
            if(!$create_category_query) {
                die("QUARY FAILED" . mysqli_error($connection));
         }     
    } 
}    
}


function find_all_categories(){
    global $connection;
    
    // FIND ALL CATEGORIES QUERY
$query = "SELECT * FROM categories";
$select_categories = mysqli_query($connection, $query);                                 
                                
while($row = mysqli_fetch_assoc($select_categories)){
$cat_id = $row['cat_id'];
$cat_tittle = $row['cat_title'];
    
echo "<tr>";    
echo "<td>{$cat_id}</td>"; 
echo "<td>{$cat_tittle}</td>"; 
echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>"; 
echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>"; 
echo "</tr>";
}
}

function delete_categories() {
   global $connection; 
    // DELETE QUERY
if(isset($_GET['delete'])) {
    
$get_cat_id = $_GET['delete'];
$query = "DELETE FROM categories WHERE cat_id = {$get_cat_id}";
$delete_query = mysqli_query($connection, $query);
header("Location: categories.php");
}
}

function update_n_include_q(){
    
    
// UPDATE AND INCLUDE QUERY                            
if(isset($_GET['edit'])) {
    
    $cat_id = $_GET{'edit'};
    
    include "includes/edit_category.php";} }                         



?>                       
             






