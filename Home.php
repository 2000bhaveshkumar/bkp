<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <style type="text/css">
            
            #LOGO
            {
                border:10px double red;
                border-radius: 20px;
                font-size: 50px;
                color: white;
                text-shadow: 0 1px 0 #ccc,
                             0 2px 0 #c9c9c9,
                             0 3px 0 #bbb,
                             0 4px 0 #b9b9b9,
                             0 5px 0 #aaa,
                             0 6px 1px rgba(0,0,0,.1),
                             0 0 5px rgba(0,0,0,.1),
                             0 1px 3px rgba(0,0,0,.3),
                             0 3px 5px rgba(0,0,0,.2),
                             0 5px 10px rgba(0,0,0,.25),
                             0 10px 10px rgba(0,0,0,.2),
                             0 20px 20px rgba(0,0,0,.15);
                width:71px;
                height: 60px;
                padding: 2px;
                float:left;
                background-color: turquoise;
                font-family: bold;
                
            }
            .coursediv
            {
                border:1px solid green;
                border-radius:5px;
                background-color:black;
                min-width:120px;
                height: 20px;
                padding:10px;
                text-align:center;
                top: 45px;
                display:table-cell;
                align:base;




            }
           /*#course1 {
                float: left;
                position: fixed;
               margin-left: 150px;
               font-size: 30px;
            }

            #course2 {
                float: left;
                position: fixed;
                margin-left: 300px;
                font-size: 30px;
            }

            #course3 {
                float: left;
                position: fixed;
                margin-left: 450px;
                font-size: 30px;
            }*/

            #navbar {
                background-color: darkgray;
                width: 100%;
                height: 85px;
                display:flex;
                flex-wrap:wrap;
                padding:10px;
                align-items:flex-end;

            }
            #upload
            {
                border:2px;
                width:71px;
                height: 60px;
                float:right;
                padding:10px;
                font-size: 60px;
            }
            .linkref 
            {
                color:whitesmoke;
            }
           
           
        </style>
    
    </head>
    <body>
        <div id="navbar" >
            <div id="LOGO"><i>EG</i></div>
            <div id="course1" class="coursediv"><a style="text-decoration:none;" href="course1.php" class="linkref">Numerical Methods</a></div>
            <div id="course2" class="coursediv"><a style="text-decoration:none;" href="course2.php" class="linkref">Electromagnetic Theory</a></div>
            <div id="course3" class="coursediv"><a style="text-decoration:none;" href="course3.php" class="linkref">Manufacturing Technology-I</a></div>
            <div id="course1" class="coursediv"><a style="text-decoration:none;" href="course4.php" class="linkref">Mechanical Engineering Drawing</a></div>
            <div id="course2" class="coursediv"><a style="text-decoration:none;" href="course5.php" class="linkref">Engineering Thermodynamics</a></div>
            <div id="course3" class="coursediv"><a style="text-decoration:none;" href="course6.php" class="linkref">Material Science</a></div>
            <div><a style="text-decoration:none;" href="form.html" id="upload" >+</a></div>
            
            
            
          </div>
        <div>
            <?php include('downloads.php') ?>
        </div>
        
    </body>

</html>