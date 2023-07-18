<?php
   error_reporting(0);
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "message";
   $conn = mysqli_connect($servername,$username,$password,$dbname);
   if($conn){
       //echo "Connection ok";
   }
   else{
       echo "Connection failed".mysqli_connect_error();
   }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="../assets/css/message.css" rel="stylesheet">
    <title>Message</title>
</head>

<body>
    <div class="container">

<?php
$query="SELECT * FROM view";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

 

//echo $total;
if($total != 0)
{

    ?>
    <h2 align="center"><mark>Display All Message</mark></h2>
    <center>
        

        
           <table border="1" cellspacing="7" width="100%" class="table table-striped">
               
            <tr>
                <th width=5%>SN</th>
                <th width=8%>First name</th>
                <th width=8%>Last name</th>
                <th width=20%>Email</th>
                <th width=10%>Phone number</th>
                <th width=25%>Message</th>
                <th width=14%>Operations</th>
            </tr>
              
              <?php
            while($result=mysqli_fetch_assoc($data))
            {
               echo "<tr>
                         <td>"."$result[sn]"."</td>
                         <td>"."$result[fname]"."</td>
                         <td>"."$result[lname]"."</td>
                         <td>"."$result[email]"."</td>
                         <td>"."$result[phone]"."</td>
                         <td>"."$result[message]"."</td>
                        <td>

                        <a href='message_delete.php?id=$result[sn]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
                   </tr>";
                
                
            }
        }
        else{
            echo"No records found";
        }
        ?>
        </table>
    </center> 
    <script>
        function checkdelete()
        {
            return confirm('Are you sure you want to delete this record?');
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</div>
</body>

</html>