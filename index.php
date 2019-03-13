<?php require_once ("header.inc.php"); ?>
<main>
  <h2>Saffransmuffins med chokladbitar</h2>
  <p>En himmelsk muffins gjord med kärlek</p>
  <div class="IngredientListAndRecipeImage">
    <ul class="IngredientList">
      <li>100 g margarin</li>
      <li>2 ägg</li>
      <li>3 dl socker</li>
      <li>1,5 dl mjöl</li>
      <li>1 tsk bakpulver</li>
      <li>1 tsk vaniljsocker</li>
      <li>0,5 g saffran</li>
      <li>100 g mörk choklad</li>
    </ul>
    <img  class="RecipeImage" src="Images/eugenivy_reserv-1238293-unsplash.jpg">
  </div>
  <p>Smält smöret och vispa ihop ägg och socker. Blanda de torra ingredienserna och rör ner i äggsmeten tillsammans med margarinet. Klicka ut i muffinsformar och grädda i mitten av ugnen på 250 grader i 15 minuter. Dekorera med en grön kvist och en chokladbit. </p>
</section>


  <?php
    /*function showIngredient () {
      $link = mysqli_connect("localhost", "root", "", "RecipeDatabase") or die ("Kunde inte koppla upp mig mot databasen");
      $sql_result = $link->query("SELECT * FROM Ingredient;") or die ("Kunde inte ställa frågan");

      echo "<table class='table table-dark'";
      echo "<tr>";
      echo "<th>ID</th><th>Namn</th>";
      echo "</tr>";
      while ($rad = mysqli_fetch_array($sql_result)) {
        echo "<tr>";
        echo "<td>" . $rad['IngredientID'] . "</td>";
        echo "<td>" . $rad['IngredientName'] . "</td>";
        echo "</tr>";
      }

      echo "</table>";
      mysqli_close ($link);
    }
    showIngredient();*/
  ?>
  <!--
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</main>
</body>
<?php require_once ("footer.inc.php"); ?>
