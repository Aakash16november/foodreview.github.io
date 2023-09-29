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
  <form action="dishes2.php" method="POST">
    <ul>
      <li>
        hing_kachori
        <button class="vote-button" type="submit" name="dish1_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        tea
        <button class="vote-button" type="submit" name="dish2_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        fruit_salad
        <button class="vote-button" type="submit" name="dish3_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        coffee
        <button class="vote-button" type="submit" name="dish4_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        papri_chat
        <button class="vote-button" type="submit" name="dish5_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        vada_pav
        <button class="vote-button" type="submit" name="dish6_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        samosa
        <button class="vote-button" type="submit" name="dish7_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        chole_bathure
        <button class="vote-button" type="submit" name="dish8_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        paties
        <button class="vote-button" type="submit" name="dish9_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        pastry
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
      $dish1 = 'hing_kachori';
      $query = "INSERT INTO negative (hing_kachori) VALUES ('$dish1')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish2_vote']) && $_POST['dish2_vote'] === 'negative') {
      $dish2 = 'tea';
      $query = "INSERT INTO negative (tea) VALUES ('$dish2')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish3_vote']) && $_POST['dish3_vote'] === 'negative') {
      $dish3 = 'fruit_salad';
      $query = "INSERT INTO negative (fruit_salad) VALUES ('$dish3')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish4_vote']) && $_POST['dish4_vote'] === 'negative') {
      $dish4 = 'coffee';
      $query = "INSERT INTO negative (coffee) VALUES ('$dish4')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish5_vote']) && $_POST['dish5_vote'] === 'negative') {
      $dish5= 'papri_chat';
      $query = "INSERT INTO negative (papri_chat) VALUES ('$dish5')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish6_vote']) && $_POST['dish6_vote'] === 'negative') {
      $dish6 = 'vada_pav';
      $query = "INSERT INTO negative (vada_pav) VALUES ('$dish6')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish7_vote']) && $_POST['dish7_vote'] === 'negative') {
      $dish7 = 'samosa';
      $query = "INSERT INTO negative (samosa) VALUES ('$dish7')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish8_vote']) && $_POST['dish8_vote'] === 'negative') {
      $dish8 = 'chole_bathure';
      $query = "INSERT INTO negative (chole_bathure) VALUES ('$dish8')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish9_vote']) && $_POST['dish9_vote'] === 'negative') {
      $dish9 = 'paties';
      $query = "INSERT INTO negative (paties) VALUES ('$dish9')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish10_vote']) && $_POST['dish10_vote'] === 'negative') {
      $dish10 = 'pastry';
      $query = "INSERT INTO negative (pastry) VALUES ('$dish10')";
      $data = mysqli_query($conn, $query);
    }

    if ($data) {
      echo "Data inserted successfully";
    } else {
      echo "Failed to insert data";
    }
  }
?>