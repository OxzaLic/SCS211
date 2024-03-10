<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

</style>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
</head>
<?php
$people_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"), true);
$people = $people_obj["people"];
?>

<div class="container">
  <?php $count = 0; ?>
  <?php foreach ($people as $row) { ?>
    <?php if ($count % 3 == 0) { ?>
      <div class="row">
      <?php } ?>

      <div class="column col-4 text-center">
        <div class="card">

          <div class="container">
            <div>
              <img src="<?= $row["image"] ?>" style="width: 200px;
              height: 200px;
              border-radius: 100px;
              margin-top: 10px;
              margin-right: 10px;">
            </div>
            <h2><?= $row["name"] ?></h2>
            <p class="title"><?= $row["education"] ?></p>
            <p><?= $row["role"] ?></p>
            <p><?= $row["email"] ?></p>
            <p><?= $row["phone"] ?></p>
          </div>
        </div>
      </div>

      <?php if ($count % 3 == 2 || $count == count($people) - 1) { ?>
      </div>
    <?php } ?>



    <?php $count++; ?>
  <?php } ?>
</div>