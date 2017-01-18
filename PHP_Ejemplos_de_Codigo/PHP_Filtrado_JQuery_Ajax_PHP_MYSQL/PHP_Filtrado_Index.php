<!--
    @Created on : 17-ene-2017, 16:04:32
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <title>Filtrado</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
      @import url(PHP_Filtrado_CSS.css);
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    </script>
    <script>
      function getUsers(type, val) {
        $.ajax({
          type: 'POST',
          url: 'getData.php',
          data: 'type=' + type + '&val=' + val,
          beforeSend: function (html) {
            $('.loading-overlay').show();
          },
          success: function (html) {
            $('.loading-overlay').hide();
            $('#userData').html(html);
          }
        });
      }
    </script>
  </head>
  <body>
    <div class="container">
      <h2>Users Search & Filter by CodexWorld</h2>
      <div class="form-group pull-left">
        <input type="text" class="search form-control" id="searchInput" placeholder="By Name or Email">
        <input type="button" class="btn btn-primary" value="Search" onclick="getUsers('search', $('#searchInput').val())"/>
      </div>
      <div class="form-group pull-right">
        <select class="form-control" onchange="getUsers('sort', this.value)">
          <option value="">Sort By</option>
          <option value="new">Newest</option>
          <option value="asc">Ascending</option>
          <option value="desc">Descending</option>
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
      </div>
      <div class="loading-overlay" style="display: none;"><div class="overlay-content">Loading.....</div></div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody id="userData">
          <?php
          include './PHP_Filtrado_DB.php';
          $db = new DB();
          $users = $db->getRows('users', array('order_by' => 'id DESC'));
          if (!empty($users)) {
            $count = 0;
            foreach ($users as $user) {
              $count++;
              ?>
              <tr>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo $user['created']; ?></td>
                <td><?php echo ($user['status'] == 1) ? 'Active' : 'Inactive'; ?></td>
              </tr>
              <?php
            }
          } else {
            ?>
            <tr><td colspan="5">No user(s) found...</td></tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
<?php
