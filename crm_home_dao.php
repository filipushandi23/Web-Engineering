<?php
  //table customer field
  $cust_segment = $_POST['cust_segment'];
  $cust_account_number = $_POST['cust_acc_number'];
  $dukcapil_status = $_POST['status_dukcapil'];
  $cust_category = $_POST['cust_category'];
  $longitude = "1";//$_POST['longitude'];
  $latitude = "1";//$_POST['latitude'];
  $residence_type = $_POST['residence_type'];
  $npwp = $_POST['npwp_num'];
  $dob = date('Y-m-d',strtotime(str_replace('/', '-',$_POST['dob'])));
  $is_converted_from_lead = true;//$_POST['is_converted_from_lead'];
  $customer_status = $_POST['cust_status'];
  $occupation = $_POST['occupation'];
  $primary_mobile = $_POST['primary_mobile'];
  $bss_status = $_POST['bss_status'];
  $modified_time = date('Y-m-d H:i:s');//$_POST['modified_time'];
  $corp_tax_id = $_POST['corp_tax_id'];
  $shared_balance_group = $_POST['shared_balance_group'];
  $created_time = date('Y-m-d H:i:s');//$_POST['created_time'];
  $cust_username = $_POST['cust_username'];
  $submit_type = $_POST['submit_button'];


  //table pic
  $first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$gender=$_POST['gender'];
	$fb=$_POST['fb'];
	$cust_id_type=$_POST['cust_id_type'];
	$contact_num=$_POST['contact_number'];
	$cust_id=$_POST['customer_id'];
	$mother_name=$_POST['mother_name'];
	$email=$_POST['email'];
	$language=$_POST['language'];
	$kk=$_POST['kk_number'];
	$home_phone=$_POST['home_phone'];
	$home_status=$_POST['home_status'];
	$office_phone=$_POST['office_phone'];
	$marital_status=$_POST['marital_status'];
	$fax=$_POST['fax'];
  /*echo "Cust segment: $cust_segment <br>";
  echo "Cust account number: $cust_account_number<br>";
  echo "Dukcapil status: $dukcapil_status<br>";
  echo "Cust category: $cust_category<br>";
  echo "Longitude: $longitude<br>";
  echo "Latitude: $latitdue<br>";
  echo "Residence type: $residence_type<br>";
  echo "NPWP: $npwp<br>";
  echo "DOB: $dob<br>";
  echo "IS converted from lead: $is_converted_from_lead<br>";
  echo "cust status: $customer_status<br>";
  echo "occupation :$occupation<br>";
  echo "primary mobile: $primary_mobile<br>";
  echo "bss status : $bss_status<br>";
  echo "modified_time: $modified_time<br>";
  echo "corp tax id: $corp_tax_id<br>";
  echo "shared balance group: $shared_balance_group<br>";
  echo "created time: $created_time<br>";
  echo "cust username: $cust_username<br>";
  echo "submit type: $submit_type";*/
  $con=mysqli_connect("localhost","root","","crm");
  if(mysqli_connect_errno()){
    echo "Failed to connect mysql";
  }
  else{
    switch ($submit_type) {
      case 'Save':
        echo "masuk save";
      break;
      case 'Add':
        echo "masuk add";
        $result = mysqli_query($con,"SELECT account_number FROM customer order by account_number desc limit 1");
        $row = mysqli_fetch_array($result);
        $cust_account_number = (int) (substr($row[0],2,strlen($row[0]))) + 1;
        $cust_account_number = "CA".$cust_account_number;
        $sql = "INSERT into customer(account_number,cust_username,cust_segment,dukcapil_status,cust_category,longitude,latitude,residence_type,
          npwp,birth_date,is_converted_from_lead,cust_status,occupation,primary_mobile,
          bss_status,modified_time,corp_tax_id,shared_balance_group,created_time)
        VALUES('$cust_account_number','$cust_username','$cust_segment','$dukcapil_status','$cust_category','$longitude','$latitude','$residence_type',
        '$npwp','$dob','$is_converted_from_lead','$customer_status','$occupation','$primary_mobile','$bss_status','$modified_time','$corp_tax_id',
        '$shared_balance_group','$created_time')";
        if(mysqli_query($con,$sql)){
          echo "Insert successfull";
          header('Location: crm_home_edit.php?status=1&account_number='.$cust_account_number);
        }
        else{
          echo "Insert failed";
        }
      break;
      case 'Edit':
        echo "masuk edit<br>";
        $sql = "UPDATE customer SET cust_username = '$cust_username',cust_segment = '$cust_segment',dukcapil_status = '$dukcapil_status',
          cust_category = '$cust_category',longitude = '$longitude',latitude = '$latitude',residence_type = '$residence_type',
          npwp = '$npwp',birth_date = '$dob',is_converted_from_lead = '$is_converted_from_lead',
          cust_status = '$customer_status',occupation = '$occupation',primary_mobile = '$primary_mobile',
          bss_status = '$bss_status',modified_time = '$modified_time',corp_tax_id = '$corp_tax_id',
          shared_balance_group = '$shared_balance_group',created_time = '$created_time'
          WHERE account_number = '$cust_account_number'";

          if(mysqli_query($con,$sql)){
            header('Location: crm_home.php');
          }
          else{
            echo "Gagal update";
          }
      break;
      case 'Delete':
          echo "masuk delete";
          $sql = "DELETE from customer WHERE account_number = '$cust_account_number'";
          if(mysqli_query($con,$sql)){
            header('Location: crm_home.php');
          }
          else{
            echo "Gagal delete";
          }
      break;
      case 'Check Dukcapil':
          echo "masuk check";
          echo "<br>KK : $kk";
          echo "<br>KTP/Passport : $cust_id";
          $sql = "SELECT * FROM dukcapil WHERE no_kk = '$kk' AND no_ktp='$cust_id'";
          $result = mysqli_query($con,$sql);
          if($row = mysqli_fetch_array($result)){
            $sql = "UPDATE customer SET dukcapil_status = 'Valid' WHERE account_number = '$cust_account_number'";
            if(mysqli_query($con,$sql)){
              header('Location: crm_home.php?status=OK');
            }
            else{
              echo "Data tidak valid!";
            }
          }
          else{
            header('Location: crm_home.php?status=NO');
            //echo "<br>Data anda tidak ditemukan!!!";
          }


      break;

    }
    mysqli_close($con);

  }
?>
