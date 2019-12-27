<?php
$con=mysqli_connect('localhost','root');
if(!$con)
    echo "Connection Failed";
mysqli_select_db($con,'test') or die(mysqli_error($con));

if(isset($_FILES['pdffile']))
{
  print_r($_FILES);
}
$file_name = $_FILES['pdffile']['name'];
$file_type = $_FILES['pdffile']['type'];
$file_temp = $_FILES['pdffile']['tmp_name'];
$file_error = $_FILES['pdffile']['error'];
$file_size = $_FILES['pdffile']['size'] ;
if(move_uploaded_file($_FILES['pdffile']['tmp_name'], 'upload/'. $_FILES["pdffile"]['name'])) 
{
  echo "Uploaded";
} 
else 
{
 echo "File was not uploaded";
}
$course=$_POST['fname'];
$name=$_POST['cname'];
//$q=INSERT INTO tb1 (coursename,pdfname,file) VALUES ('$course','$name','$_FILES['pdffile']['name']')");

//$data=$_FILES['pdffile'];
$q="INSERT INTO tb1 (coursename,pdfname,file) VALUES ('$course','$name','$file_name')";
mysqli_query($con,$q) or die(mysqli_error($con));
mysqli_close($con);
header('Location: index.php');
exit;
 
?>
?>
