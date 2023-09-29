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
  <form action="dishes.php" method="POST">
    <ul>
      <li>
        puri_sabji
        <button class="vote-button" type="submit" name="dish1_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        idli
        <button class="vote-button" type="submit" name="dish2_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        vada
        <button class="vote-button" type="submit" name="dish3_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        dosa
        <button class="vote-button" type="submit" name="dish4_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        uthapum
        <button class="vote-button" type="submit" name="dish5_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        paratha
        <button class="vote-button" type="submit" name="dish6_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        poha
        <button class="vote-button" type="submit" name="dish7_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        jalebi
        <button class="vote-button" type="submit" name="dish8_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        eggs
        <button class="vote-button" type="submit" name="dish9_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        omlette
        <button class="vote-button" type="submit" name="dish10_vote" value="negative">Vote Negative</button>
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
      $dish1 = 'puri_sabji';
      $query = "INSERT INTO negative (puri_sabji) VALUES ('$dish1')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish2_vote']) && $_POST['dish2_vote'] === 'negative') {
      $dish2 = 'idli';
      $query = "INSERT INTO negative (idli) VALUES ('$dish2')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish3_vote']) && $_POST['dish3_vote'] === 'negative') {
      $dish3 = 'vada';
      $query = "INSERT INTO negative (vada) VALUES ('$dish3')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish4_vote']) && $_POST['dish4_vote'] === 'negative') {
      $dish4 = 'dosa';
      $query = "INSERT INTO negative (dosa) VALUES ('$dish4')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish5_vote']) && $_POST['dish5_vote'] === 'negative') {
      $dish5 = 'uthapum';
      $query = "INSERT INTO negative (uthapum) VALUES ('$dish5')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish6_vote']) && $_POST['dish6_vote'] === 'negative') {
      $dish6 = 'paratha';
      $query = "INSERT INTO negative (paratha) VALUES ('$dish6')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish7_vote']) && $_POST['dish7_vote'] === 'negative') {
      $dish7 = 'poha';
      $query = "INSERT INTO negative (poha) VALUES ('$dish7')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish8_vote']) && $_POST['dish8_vote'] === 'negative') {
      $dish8 = 'jalebi';
      $query = "INSERT INTO negative (jalebi) VALUES ('$dish8')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish9_vote']) && $_POST['dish9_vote'] === 'negative') {
      $dish9 = 'eggs';
      $query = "INSERT INTO negative (eggs) VALUES ('$dish9')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish10_vote']) && $_POST['dish10_vote'] === 'negative') {
      $dish10 = 'omlette';
      $query = "INSERT INTO negative (omlette) VALUES ('$dish10')";
      $data = mysqli_query($conn, $query);
    }

    if ($data) {
      echo "Data inserted successfully";
    } else {
      echo "Failed to insert data";
    }
  }
?>