<?php
  $con=mysqli_connect("localhost","root","","crm");
  if(mysqli_connect_errno()){
    echo "Failed to connect mysql";
  }
  echo "
    <table border='1' cellpadding='2'>
      <tr>
        <td>account_number</td>
        <td>cust_username</td>
        <td>cust_segment</td>
        <td>cust_category</td>
        <td>dukcapil_status</td>
        <td>longitude</td>
        <td>latitude</td>
        <td>residence_type</td>
        <td>npwp</td>
        <td>birth_date</td>
        <td>is_converted_from_lead</td>
        <td>cust_status</td>
        <td>occupation</td>
        <td>primary_mobile</td>
        <td>bss_status</td>
        <td>modified_time</td>
        <td>corp_tax_id</td>
        <td>shared_balance_group</td>
        <td>created_time</td>
      </tr> ";
  $sql = "SELECT * FROM customer order by account_number";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['account_number']."</td>";
    echo "<td>".$row['cust_username']."</td>";
    echo "<td>".$row['cust_segment']."</td>";
    echo "<td>".$row['cust_category']."</td>";
    echo "<td>".$row['dukcapil_status']."</td>";
    echo "<td>".$row['longitude']."</td>";
    echo "<td>".$row['latitude']."</td>";
    echo "<td>".$row['residence_type']."</td>";
    echo "<td>".$row['npwp']."</td>";
    echo "<td>".$row['birth_date']."</td>";
    echo "<td>".$row['is_converted_from_lead']."</td>";
    echo "<td>".$row['cust_status']."</td>";
    echo "<td>".$row['occupation']."</td>";
    echo "<td>".$row['primary_mobile']."</td>";
    echo "<td>".$row['bss_status']."</td>";
    echo "<td>".$row['modified_time']."</td>";
    echo "<td>".$row['corp_tax_id']."</td>";
    echo "<td>".$row['shared_balance_group']."</td>";
    echo "<td>".$row['created_time']."</td>";
    echo "</tr>";
  }
  echo "</table>";
?>
