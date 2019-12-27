<link type="text/css" rel="stylesheet" href="style_downloads.css" />
<?php
$con = mysqli_connect('localhost', 'root');
if (!$con)
    echo "Connection Failed";
mysqli_select_db($con, 'test') or die(mysqli_error($con));

$q = "SELECT * FROM tb1";
mysqli_query($con, $q) or die(mysqli_error($con));
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
for ($i = 1; $i <= $num; $i++) {   
    $row = mysqli_fetch_array($result); ?>
    <div id="downloads">
        <span id="pdfname"><?php echo $row['pdfname'] ?></span>
       <a href="upload/<?php echo $row['file'] ?>"> <img src="download.png" id="downloadbtn"></a>
    </div>

   
    
<?php
}
mysqli_close($con);
?>