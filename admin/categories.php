<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

<?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

    <div class="container-fluid">

                <!-- Add Category Form-->
                <div class="row">
                    <div class="col-lg-12">
                       
                           
                        <h1 class="page-header">
                            Categories
                        </h1>
                        
                        <div  class="col-xs-6">
                        
<?php insert_categories();?>                        

                        <form action="" method="post">
                             <div class="form-group">
                               <label for="cat_title">Add Category</label>
                                <input class="form-control" type="text" name="cat_title">
                             </div>
                             <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                             </div>
                        </form>
                        
<?php update_n_include_q(); ?>                       
                        
                         
                          
                           
                         </div> <!-- Add Category Form-->
                        <div class="col-xs-6">
           <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                   
<?php 
find_all_categories(); 
delete_categories()
?>

                           
                    </tbody>
                        </table>                              
                        </div>
                    </div>
                </div>
                <!-- /.row -->

    </div>
            <!-- /.container-fluid -->
    </div>
<?php include "includes/admin_footer.php"; ?>
