<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1>Mega form</h1>
        <?php
          // Get the values from the form
          $nElementi = $_POST['nElementi'];

          // Create the form
          echo "<div>";
          echo "<form action='forms.php' method='post'>";
          for ($i = 0; $i < $nElementi; $i++) {
            echo "<label for='nome$i'>Nome $i:</label>";
            echo "<input class='input' type='text' id='nome$i' name='nome$i' placeholder='Nome $i'><br><br>";
          }
          echo "</form>";
          echo "</div>";
        ?>
        <form action="formGenerator.php">
          <button class="button" type="submit">Indietro</button>
        </form>
      </body>
</div>
</html>