<?php
    include('config.php');
    $sql="SELECT * FROM customer";
    $result=mysqli_query($conn,$sql);
?>

<?php include('navigation.php'); ?>

<div class="all users">
    <div class="container">
        <h2 style="color: #B53471;">All Users</h2>
        <table class="tbl">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Balance</th>
                <th>Action</th>
            </tr>

            <?php
                while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['E-Mail']; ?></td>
                        <td><?php echo $row['Balance']; ?></td>
                        <td><b><a href="transfer.php?data-id=<?php echo $row['ID']; ?>" class="btn" >Transaction</a></b></td>
                    </tr>
                <?php
                }
                ?>
            
        </table>
    </div>
</div>
<?php include('info.php'); ?>
