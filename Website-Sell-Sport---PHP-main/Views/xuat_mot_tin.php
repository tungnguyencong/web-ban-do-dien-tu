<?php 
echo '<script type="text/javascript">
                        $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                    </script>
                     <script type="text/javascript">
                $(document).ready(function () {
                    $(".menu-quick-select ul").hide();
                    $(".menu-quick-select").hover(function () { $(".menu-quick-select ul").show(); }, function () { $(".menu-quick-select ul").hide(); });
                });
            </script>';
 $severname ="localhost"; 
            $username ="root";
            $password =""; 
            $db_name ="wiroshop";
 
            //Tao ket noi CSDL
            $connect= new mysqli($severname,$username,$password,$db_name);
             $connect->set_charset("utf8");

            //check connection
            if ( $connect->connect_error) {
		        die("Connection failed: " . $this->conn->connect_error);
		    }

	$id=$_GET['id'];
	$tv="select * from menu where id = $id";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	echo '<div class="container">';
    echo '<div class="row">';
   
    echo '<div class="col-md-12">';
	echo $tv_2['NoiDung'];
    echo '</div>';
    
    echo '</div>';
    echo '</div>';
?>