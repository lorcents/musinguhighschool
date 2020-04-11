<?php include('header.php'); ?>
<body background-color="white">


    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">



<?php include('login.php'); ?>
<?php include('modal_add.php'); ?>


                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;ALUMINI TABLE</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">User Image</th>
                                    <th style="text-align:center;">Names</th>
                                    <th style="text-align:center;">Contact</th>
                                    <th style="text-align:center;">Registration</th>
                                    <th style="text-align:center;">occupation</th>
                                    <th style="text-align:center;">Residense</th>
                                   

                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM alumini ORDER BY year ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['tbl_image_id'];
							?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
									<?php if($row['image_location'] != ""): ?>
									<img src="uploads/<?php echo $row['image_location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
								</td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['first_name']; ?><br><?php echo $row ['last_name']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <a href="mailto:<?php echo $row ['email']; ?>"><?php echo $row ['email']; ?></a></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> REG NO:<?php echo $row ['regno']; ?><hr>CLASS OF:<?php echo $row ['year']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['occupation']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['address']; ?></td>
								</tr>
								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>


</body>
</html>


