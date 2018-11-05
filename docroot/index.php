<html>
<head></head>
<body>
<div>

  <form action="index.php" method="post">
    <?php
    $inputs = [
        '1' => 'name',
        '2' => 'alter',
        '3' => 'geburtstag',

    ];
    function validate($input)
    {
      $input = 'FRANZ';
      if (isset($_POST[$input]) && $_POST[$input] == '') {
        return 'ERROR';
      }
    }

    foreach ($inputs as $input) {
      ?>
      <label for="<?php echo $input ?>"><?php echo $input ?></label>

      <?php
      echo validate($input);
      echo $input;
      ?>
      <input type="text" name="<?php echo $input ?>" value="<?php echo isset($_POST[$input]) ? $_POST[$input] : '' ?>">
      <?php
    }
    ?>

    <input type="submit">
  </form>









</div>

</body>
</html>
