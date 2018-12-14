

    <?php
    include 'connect.php';
    session_start();
    $billno=$_GET['id'];
    $sql="SELECT * FROM bill NATURAL JOIN customer where `Billno`='$billno'";
    $result = $mysqli->query($sql) or die("BOOM");
    $row=mysqli_fetch_assoc($result);
    ?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bill</title>
    
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="logo.png" style="width:100px;">
                            </td>
                        <?php
                            
                            echo '<td> Bill No: '. $row['Billno'] .'<br> 

                                      Date:'; echo date("d/m/Y"); echo '                                      
                            </td>';
                    echo  '</tr>
                    </table>
                </td>
            </tr>';
            
           echo '<tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Hotel Transylvania<br>
                                12345 Sunny Road<br>
                                Manhattan, NY 
                            </td>
                            
                            <td>
                                Customer info:<br>
                                  '. $row['FirstName'] .' '. $row['LastName'] .'<br>  
                                Email: '. $row['Email'] .'

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>';
            
            echo'<tr class="heading">
                <td>Payment Method</td> 
                
                <td> Card no</td>
                    
            </tr>';
            
            echo'<tr class="details">
                <td>
                    Card
                </td>
                
                
                <td>' . $row['Cardno'] . '</td>

                </td>
            </tr>';
            
            echo'<tr class="heading">
                <td>Description</td>
                
                
                <td> Price</td>
                   
                
            </tr>';
            
            echo'<tr class="item">
                <td>Room Charges</td>
                
                
                  <td> '. $row['Tariff'] .' </td>
 
                    
                
            </tr>';
            
           echo '<tr class="item last">
                <td>
                    Service Charges
                </td>
                
                 <td>' . $row['Servicecharges'] . '</td>

                    
            </tr>';
            
            
            echo '<tr class="total">
                <td></td>
                
                '; $total= $row["Tariff"] + $row["Servicecharges"];

                 echo '<td>Total='.$total.'</td>

                   </tr>';
            ?>
        </table>
    </div>
</body>
</html>

   