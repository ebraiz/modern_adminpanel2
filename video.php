<?php include("includes/header.php"); ?>
<section class="glass">
  <?php include("includes/sidebar.php"); ?>
  <div class="games">
    <div class="status">
      <h1>My Video</h1>
      <input type="text" placeholder="Search" />
    </div>
    <div class="listing cards">
      <div class="card">
        <video width="400" controls style="width:100%;height:100%;">
          <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
          <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/ogg">
          Your browser does not support HTML video.
        </video>
      </div>
    </div>
  </div>
</section>
<?php include("includes/footer.php"); ?>