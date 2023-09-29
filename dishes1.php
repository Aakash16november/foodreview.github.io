<!DOCTYPE html>
<html>
<head>
  <title>Dishes</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .vote-button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #e74c3c;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .vote-button:hover {
      background-color: #c0392b;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h2>Vote for Dishes</h2>
  <form action="dishes1.php" method="POST">
    <ul>
      <li>
        paneer_bhurji
        <button class="vote-button" type="submit" name="dish1_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        aloo_chips
        <button class="vote-button" type="submit" name="dish2_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        methi_aloo
        <button class="vote-button" type="submit" name="dish3_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        dal
        <button class="vote-button" type="submit" name="dish4_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        matar_paneer
        <button class="vote-button" type="submit" name="dish5_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        aloo_bhindi
        <button class="vote-button" type="submit" name="dish6_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        kadhi_pakoda
        <button class="vote-button" type="submit" name="dish7_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        biryani
      <button class="vote-button" type="submit" name="dish8_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        chicken_curry
      <button class="vote-button" type="submit" name="dish9_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        egg_bhujia
      <button class="vote-button" type="submit" name="dish10_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        egg_korma
      <button class="vote-button" type="submit" name="dish11_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        fish_curry
      <button class="vote-button" type="submit" name="dish12_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        egg_salad
      <button class="vote-button" type="submit" name="dish13_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        mix_raita
      <button class="vote-button" type="submit" name="dish14_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        salted_rice
      <button class="vote-button" type="submit" name="dish15_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        curd
      <button class="vote-button" type="submit" name="dish16_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        misti_doi
      <button class="vote-button" type="submit" name="dish17_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        salad
      <button class="vote-button" type="submit" name="dish18_vote" value="negative">Vote Negative</button>
      </li>
      <!-- Add more dishes as needed -->
    </ul>
  </form>

  <script>
    function vote(type) {
      alert('Voted ' + type);
    }
  </script>
</body>
</html>
<?php
  include("connect.php");

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['dish1_vote']) && $_POST['dish1_vote'] === 'negative') {
      $dish1 = 'paneer_bhurji';
      $query = "INSERT INTO negative (paneer_bhurji) VALUES ('$dish1')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish2_vote']) && $_POST['dish2_vote'] === 'negative') {
      $dish2 = 'aloo_chips';
      $query = "INSERT INTO negative (aloo_chips) VALUES ('$dish2')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish3_vote']) && $_POST['dish3_vote'] === 'negative') {
      $dish3 = 'methi_aloo';
      $query = "INSERT INTO negative (methi_aloo) VALUES ('$dish3')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish4_vote']) && $_POST['dish4_vote'] === 'negative') {
      $dish4 = 'dal';
      $query = "INSERT INTO negative (dal) VALUES ('$dish4')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish5_vote']) && $_POST['dish5_vote'] === 'negative') {
      $dish5 = 'matar_paneer';
      $query = "INSERT INTO negative (matar_paneer) VALUES ('$dish5')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish6_vote']) && $_POST['dish6_vote'] === 'negative') {
      $dish6 = 'aloo_bhindi';
      $query = "INSERT INTO negative (aloo_bhindi) VALUES ('$dish6')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish7_vote']) && $_POST['dish7_vote'] === 'negative') {
      $dish7 = 'kadhi_pakoda';
      $query = "INSERT INTO negative (kadhi_pakoda) VALUES ('$dish7')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish8_vote']) && $_POST['dish8_vote'] === 'negative') {
      $dish8 = 'biryani';
      $query = "INSERT INTO negative (biryani) VALUES ('$dish8')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish9_vote']) && $_POST['dish9_vote'] === 'negative') {
      $dish9 = 'chicken_curry';
      $query = "INSERT INTO negative (chicken_curry) VALUES ('$dish9')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish10_vote']) && $_POST['dish10_vote'] === 'negative') {
      $dish10 = 'egg_bhujia';
      $query = "INSERT INTO negative (egg_bhujia) VALUES ('$dish10')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish11_vote']) && $_POST['dish11_vote'] === 'negative') {
      $dish11 = 'egg_korma';
      $query = "INSERT INTO negative (egg_korma) VALUES ('$dish11')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish12_vote']) && $_POST['dish12_vote'] === 'negative') {
      $dish12 = 'fish_curry';
      $query = "INSERT INTO negative (fish_curry) VALUES ('$dish12')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish13_vote']) && $_POST['dish13_vote'] === 'negative') {
      $dish13 = 'mix_raita';
      $query = "INSERT INTO negative (mix_raita) VALUES ('$dish13')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish14_vote']) && $_POST['dish14_vote'] === 'negative') {
      $dish14 = 'salted_rice';
      $query = "INSERT INTO negative (salted_rice) VALUES ('$dish14')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish15_vote']) && $_POST['dish15_vote'] === 'negative') {
      $dish15 = 'curd';
      $query = "INSERT INTO negative (curd) VALUES ('$dish15')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish16_vote']) && $_POST['dish16_vote'] === 'negative') {
      $dish16 = 'misti_doi';
      $query = "INSERT INTO negative (misti_doi) VALUES ('$dish16')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish17_vote']) && $_POST['dish17_vote'] === 'negative') {
      $dish17 = 'salad';
      $query = "INSERT INTO negative (salad) VALUES ('$dish17')";
      $data = mysqli_query($conn, $query);
    }

    

    if ($data) {
      echo "Data inserted successfully";
    } else {
      echo "Failed to insert data";
    }
  }
?>