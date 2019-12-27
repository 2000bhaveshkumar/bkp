<link type="text/css" rel="stylesheet" href="style_downloads.css" />

    <script>
    function theFunction(e)
    { 
        var itemName =  e.target.innerHTML;

            $.ajax({
                url     : "/ajaxAction.php",
                type    : "POST",
                data    : {'itemName':itemName},
                dataType: 'json',
                success: function (response) { 
                console.log("response",response)        
                    if(response.type == "success") {
                        $("#downloads").html('');
                        $("#downloads").html(response.result);                     
                        return false;
                    }
                }
            });
    }
    </script>

<a onclick="theFunction(event)" href="">Electromagnetic Theory</a>
<a onclick="theFunction(event)" href="">Manufacturing Technology-I</a>

<div id="downloads">
    <span id="pdfname"><?php echo $row['pdfname'] ?></span>
    <a href="upload/<?php echo $row['file'] ?>"> <img src="download.png" id="downloadbtn"></a>
</div>

    <?php
    

    $itemName   = $_POST['itemName'];
    $con        = mysqli_connect('localhost', 'root');
    if (!$con)
        echo "Connection Failed";

    mysqli_select_db($con, 'test') or die(mysqli_error($con));
    $q      = "SELECT * FROM tb1";
    mysqli_query($con, $q) or die(mysqli_error($con));
    $result = mysqli_query($con, $q);
    $num    = mysqli_num_rows($result);
    for ($i = 1; $i <= $num; $i++) {   
        $row = mysqli_fetch_array($result); 
        if($itemName == $row['coursename'])
        { 
            $res = '<span id="pdfname"><?php echo $row['pdfname'] ?></span>
                <a href="upload/<?php echo $row['file'] ?>"> <img src="download.png" id="downloadbtn"></a>';<?php
        }
     }
    echo json_encode("type":"success","result":$res);
    mysqli_close($con);
    ?>