<style type="text/css">
  

    body {
      font-size: 15px;
      color: #343d44;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
      background:#B5E1E5  ;
 
 background-image: linear-gradient(-90deg,#172954, #B5E1E5); 
    }
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 17px;
    }

    table td {
      transition: all .5s;
    }
    
    
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #e1edff;
      padding: 7px 17px;
    }
    .data-table caption {
      margin: 7px;
    }

    
    .data-table thead th {
      background-color: #508abb;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    
    .data-table tbody td {
      color: #353535;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: right;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

    
    .data-table tfoot th {
      background-color: #e5f5ff;
      text-align: right;
    }
    .data-table tfoot th:first-child {
      text-align: left;
    }
    .data-table tbody td:empty
    {
      background-color: #ffcccc;
    }
    .data-table 
    {
      position: relative;

      top:200px;

    }
  </style>
<?php
// session_start();
// include('../connection.php');
// $user= $_SESSION['user'];
$sql=mysqli_query($conn,"select * from user where email='$user' ");

echo '<html><body><table class="data-table"><tbody>';
while ($row = mysqli_fetch_array($sql))
    {
      
      echo '<tr>
          <th> NAME</th>
          <td>'.$row['name'].'</td>
          </tr>
          <tr>
          <th>E-MAIL</th>
          <td>'.$row['email'].'</td>
          </tr>
          <tr>
          <th>CONTACT</th>
          <td>'.$row['mobile'].'</td>
          </tr>
          <tr>
          <th>GENDER</th>
          <td>'.$row['gender'].'</td>
          </tr>
          <tr>
          <th>DATE OF BIRTH</th>
          <td>'.$row['dob'].'</td>
          </tr>
         
          
        ';
      
      
    }
    echo '</tbody></table></body></html>';
?>