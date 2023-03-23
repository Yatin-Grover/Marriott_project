<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body{
      background-image: url("pics/image17.jpg");
    background-repeat: no-repeat;
    background-size: 1500px 1000px;
    }
   
.box
    {
        /*border: 1px solid grey;*/
        width: 100%;
        display: flex;
        position: absolute;
        /*position: fixed;*/
        box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        height: 60px;
        background-color:white ;
        margin: auto;
        float: left;
    }

.box1{
    background-image: url("pics/image20.jpg");
    border-radius: 2px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 150px 55px;
/*border: 1px solid grey;*/
margin: 1px;
        width: 150px;
        height: 55px;
}
.inbox{
            border-radius: 5px;
    width: 48%;
    height: 55px;   
    /*margin: 20px;*/
    margin-left: 550px;
    float: left;
}
ul{
                list-style-type: none;
                padding: 0px;
                margin: 0px;
            }
            li{
                /*display: inline-block;*/
                float: left;
                /*margin-left: 40px;*/
                /*margin-top: 20px;*/
                color: snow;
                font-size: 20px;
                font-family: Arial;
                font-weight: bold;
            }
            .li1{
                background-color: rgb(97, 106, 107 ,0.5);
                border-radius: 4px;
                /*border: 1px solid green;*/
                height: 100px;
                width: 105px;
                margin-left: 8px;
                margin-top: 0px;
                position: absolute;
                font-size: 20px;
                font-family: Arial;
                /*font-weight: bold;*/
                visibility: hidden;
                display: none;
            } 
             .inbox button{
    background-color: rgb(206, 36, 74);
    border:2px solid red;
    border-radius: 4px;
    color: #fff;
    position: relative;
    display: inline-block;
    /*font-family: inherit;*/
    font-size: 16px;
    box-shadow: 1px 2px 1px blue;
    margin: 8px;
    padding: 10px;
    width: 100px;
    cursor: pointer;
}
.inbox  button :hover{
    background: red;
    border-color: red;
}
        .wrapper{
            width: 600px;
            margin: 0 auto;
            margin-left: -86%;
            margin-top: 100px;
           
        }
        table tr td:last-child{
            width: 120px;
            background-color: goldenrod;
            /*border-color: blue;*/

        }
        
        .row{
            width: 1200px;         
        }
        .col-md-12{    
        }
        mt-5 mb-3 .clearfix{
        }
        .thread{
            /*color: pink;*/
              border-color: blue;
        }
        tr{
            /*color: pink;*/
            border-color: blue;
           
        }
        th{
            background-color: pink;
            /*color: pink;*/
            border-color: blue;
            
        }
        td{
            background-color: goldenrod;
            color: blue;
            border-color: blue;
        }
        .pull-left{
            margin-bottom: 20px;
        }
        
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
     <div class="box">
    <div class="box1"></div>
<div class="inbox">
        <ul>
            <li><a href="restaurant.php"><button style="margin-left: 250px;">Restaurant</button></a></li>
        <li><a href="dashboard.php"><button>Stay</button></a>
<ul class="li1">
    
    <!-- <li class="li2"><a href=""><button>SignIn</button></a></li> -->
    <!-- <li  class="li3"><a href=""><button>SignUp</button></a></li> -->
        </ul></li>
        <li><a href="booking.php"><button>Booking</button></a></li>
        <!-- <li><a href="services.php"><button>Services</button></a></li> -->
        <ul class="li1">
    <li class="li2"><a href=""><button></button></a></li>
    <li  class="li3"><a href=""><button></button></a></li>
        </ul></li>
        <!-- <li><a href="blog.php"><button>Blog</button></a></li> -->
        <li><a href="dashboard1.php"><button>Contact</button></a></li>
    </ul>
</div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <!-- <h2 class="pull-left">Login Data</h2> -->
                        <!-- <a href="contact.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New User</a> -->
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM cont";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Username</th>";
                                        echo "<th>Email</th>";
                                         echo "<th>Mobile</th>";
                                          echo "<th>Message</th>";
                                        
                                                   echo "<th >Action</th>";



                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                         echo "<td>" . $row['mobile'] . "</td>";
                                          echo "<td>" . $row['message'] . "</td>";
                                        

                                        echo "<td>";
                                            echo '<a href="view1.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="updation.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="deletion.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>