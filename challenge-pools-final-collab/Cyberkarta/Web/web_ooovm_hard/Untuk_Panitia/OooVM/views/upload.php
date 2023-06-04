<html>
<head>
  <meta name='author' content='makelaris, makelarisjr'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <title>Ooo-VM</title>
  <link link='preload' href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
  <link rel='stylesheet' href='/static/css/main.css' />
  <link rel='icon' href='/assets/favicon.png' />
</head>
<body>
<div id='main' class='container'>
  <h1 id='title' style='font-size:50pt'>Ooo-VM</h1>
  <div id='img-div'>
    <img id='image' src='/assets/images.gif' alt='eating space shrimps'>
    <?php if (isset($_GET['error'])): ?>
      <hr><div class='alert alert-danger'>
        <?= htmlspecialchars($_GET['error']) ?>
      </div>
    <?php endif; ?>
  </div>
  <h3>Minimum: 1920x720</h3>
  <hr>
  <form action='/upload' method='POST' enctype='multipart/form-data'>
    <div class='form-group'>
      <div class='row' style='margin: auto; width: 220px;'>
        <div class='col'>
          <label for='upload' id='selectFile' class='btn' style='background-color: #3B93EC'>
            Pilih File
          </label>
        </div>
        <div class='col'>
          <button type='submit' class='btn' style='background-color: #EF197E; color:292929'>Upload</button>
        </div>
        <input type='file' name='uploadFile' id='upload' required>
      </div>
    </div>
  </form>
</div>
<script src='//code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
<script src='//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
<script src='//stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js' integrity='sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI' crossorigin='anonymous'></script>
<script>
$('#upload').change(function(){
  let path = $(this).val().replace('C:\\fakepath\\', '');
  $('#selectFile').html(path);
})
</script>
<script src='/static/js/therock.js'></script> <!-- Just a meme -->
</body>
</html>