<?php
    include('config.php');
    $sql="SELECT * FROM history";
    $result=mysqli_query($conn,$sql);
?>

<?php include('navigation.php'); ?>

<div class="history">
    <div class="container">
        <h2 style="color: #B53471;">Transaction History</h2>
        <table class="tbl">
            <tr>
                <th>Sender</th>
                <th>Reciever</th>
                <th>Amount</th>
            </tr>
            <?php
                while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['sender']; ?></td>
                        <td><?php echo $row['reciever']; ?></td>
                        <td><?php echo $row['Amount']; ?></td>
                    </tr>
                <?php
                }
                ?>
        </table>
    </div>
</div>

<?php include('info.php'); ?>
