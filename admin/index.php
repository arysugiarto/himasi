<?php
/**
 * Created by PhpStorm.
 * User: ary
 * Date: 30/11/17
 * Time: 13:56
 */
session_start();
if (isset($_SESSION['username'])) {
            include "pages/lib/header.php"
        ?>
<?php
        if($_SESSION['level'] == 1 ){  //membanding kan level admin
            include "pages/lib/bodi_superadmin.php";
        }elseif($_SESSION['level'] == 2 ){  //membanding kan level keuangan
            include "pages/lib/bodi_admin.php" ;
    
        }
?>

         <?php include "pages/lib/footer.php" ?>
</body>
</html>


<?php
} else {
    ?>
    <script>
        alert('Silakan login dulu!');
        parent.location.href="login/index.php"
    </script>
    <?php
}
?>
