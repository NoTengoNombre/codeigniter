<html>
  <head>
    <title>Validating form fields using CodeIgniter</title>
    <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter/css/styles.css">
  </head>
  <body>
    <div id="container">
      <?php echo form_open('validate_ctrl'); ?>
      <h1>Validating form fields using CodeIgniter</h1><hr/> 

      <?php echo form_label('Student Name :'); ?> <?php echo form_error('dname'); ?><br />
      <?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

      <?php echo form_label('Student Email :'); ?> <?php echo form_error('demail'); ?><br />
      <?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />

      <?php echo form_label('Student Mobile No. :'); ?> <?php echo form_error('dmobile'); ?><br />
      <?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile', 'placeholder' => '10 Digit Mobile No.')); ?><br />

      <?php echo form_label('Student Address :'); ?> <?php echo form_error('daddress'); ?><br />
      <?php echo form_input(array('id' => 'daddress', 'name' => 'daddress')); ?><br />

      <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>

      <?php echo form_close(); ?>

      <div id="fugo">
      </div>
    </div>
  </body>
</html>
