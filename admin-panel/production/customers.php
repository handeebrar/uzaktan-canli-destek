<?php include 'header.php';

if(isset($_SESSION['admin_session_control'])) {
  $all_customers_sql = mysqli_query( $connection, "SELECT * FROM customers");
} else {
  $supporter_id = $_SESSION['supporter_id'];
  @$all_customers_sql = mysqli_query( $connection, "SELECT * FROM customers WHERE supporter_id = '$supporter_id' ");
}
?>

<!-- page content -->
<div class="right_col" role="main">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Müşteriler</h2>
  
              <div class="clearfix"></div>
            </div>

            <div class="x_content">
    
              <!-- Div İçerik Başlangıç -->
              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>İsim Soyisim</th>
                    <th>Mail</th>
                    <th>Telefon</th>
                    <th></th>
                    <?php if(isset($_SESSION['supporter_session_control']) != true) { ?>
                      <th></th>
                    <?php  } ?>
                  </tr>
                </thead>
    
              <tbody>               
                <?php while ($all_customer_data = mysqli_fetch_array($all_customers_sql)) { ?>
                    <tr>
                      <td><?=$all_customer_data['id']?></td>
                      <td><?=$all_customer_data['name']." ".$all_customer_data['surname']?></td>
                      <td><?=$all_customer_data['email']?></td>
                      <td><?=$all_customer_data['telephone']?></td>
                      <td><center><a href="<?=base_url('panel/supporter/edit/customer?id='.$all_customer_data['id'])?>" class="btn btn-primary btn-xs">Düzenle</a></center></td>
                      <?php if(isset($_SESSION['supporter_session_control']) != true) { ?>
                        <td><center><button class="btn btn-danger btn-xs" onclick="removeCustomer(<?=$all_customer_data['id']?>)">Sil</button></center></td>
                      <?php  } ?>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  
<?php include 'footer.php'; ?>