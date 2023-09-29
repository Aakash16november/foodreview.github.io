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
  <form action="dishes3.php" method="POST">
    <ul>
      <li>
        paratha_with_aloo_chop
        <button class="vote-button" type="submit" name="dish1_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        chole_with_masala
        <button class="vote-button" type="submit" name="dish2_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        kulche
        <button class="vote-button" type="submit" name="dish3_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        puri
        <button class="vote-button" type="submit" name="dish4_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        red_gravy
        <button class="vote-button" type="submit" name="dish5_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        dal_makhani
        <button class="vote-button" type="submit" name="dish6_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        kadhai_paneer
        <button class="vote-button" type="submit" name="dish7_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        khichdi_papad
        <button class="vote-button" type="submit" name="dish8_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        achar
        <button class="vote-button" type="submit" name="dish9_vote" value="negative">Vote Negative</button>
      </li>
      <li>
        kala_channa
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
      $dish1 = 'paratha_with_aloo_chop';
      $query = "INSERT INTO negative (paratha_with_aloo_chop) VALUES ('$dish1')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish2_vote']) && $_POST['dish2_vote'] === 'negative') {
      $dish2 = 'chole_with_masala';
      $query = "INSERT INTO negative (chole_with_masala) VALUES ('$dish2')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish3_vote']) && $_POST['dish3_vote'] === 'negative') {
      $dish3 = 'kulche';
      $query = "INSERT INTO negative (kulche) VALUES ('$dish3')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish4_vote']) && $_POST['dish4_vote'] === 'negative') {
      $dish4 = 'puri';
      $query = "INSERT INTO negative (puri) VALUES ('$dish4')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish5_vote']) && $_POST['dish5_vote'] === 'negative') {
      $dish5 = 'red_gravy_paneer';
      $query = "INSERT INTO negative (red_gravy_paneer) VALUES ('$dish5')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish6_vote']) && $_POST['dish6_vote'] === 'negative') {
      $dish6 = 'dal_makhani';
      $query = "INSERT INTO negative (dal_makhani) VALUES ('$dish6')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish7_vote']) && $_POST['dish7_vote'] === 'negative') {
      $dish7 = 'kadhai_paneer';
      $query = "INSERT INTO negative (kadhai_paneer) VALUES ('$dish7')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish8_vote']) && $_POST['dish8_vote'] === 'negative') {
      $dish8 = 'khichdi_papad';
      $query = "INSERT INTO negative (khichdi_papad) VALUES ('$dish8')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish9_vote']) && $_POST['dish9_vote'] === 'negative') {
      $dish9 = 'achar';
      $query = "INSERT INTO negative (achar) VALUES ('$dish9')";
      $data = mysqli_query($conn, $query);
    }

    if (isset($_POST['dish10_vote']) && $_POST['dish10_vote'] === 'negative') {
      $dish10 = 'kala_channa';
      $query = "INSERT INTO negative (kala_channa) VALUES ('$dish10')";
      $data = mysqli_query($conn, $query);
    }

    if ($data) {
      echo "Data inserted successfully";
    } else {
      echo "Failed to insert data";
    }
  }
?>