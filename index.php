<?php
declare(strict_types=1);
require(__DIR__.'/header.php');
require(__DIR__.'/data.php');
require(__DIR__.'/functions.php');
usort($news, "sortFunction");
?>

  <div class="wrapper">
    <!--Header-->
    <div class="header">
      <h1>Fake News</h1>
    </div> <!---header-->

    <!---navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Fake News</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Today<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sport</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cultur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div> <!---navbar-collapse -->
      </nav> <!--navbar-->


    <!--main article-->
    <div class="main d-flex flex-wrap vw-100 justify-content-around">
        <?php for($i = 0; $i < count($news); $i++): ?>
          <?php
              $title = $news[$i]['title'];
              $name = $news[$i]['author']['name'];
              $date = $news[$i]['date'];
              $article = $news[$i]['article'];
              $image = $news[$i]['img'];
              $like = $news[$i]['like'];
          ?>
              <div class="card border-light mb-3 mt-3" style="max-width: 550px;">
              <div class="card-header"><?php echo "Article by " . $name . "." . "<br>" . " Published: " . $date ?></div>
              <div class="card-body">
                <h4 class="card-title"><?php echo $title ?></h4>
                <p class="card-text"><?php echo $article?><a href="#"> Read more</a></p>
                <img style="height: 300px; width: 100%; display: block;" src="<?php echo $image ?>" alt="Card image">
                <br>
                <button type="button" class="btn btn-outline-success">💚 <?php echo $like?></button>
              </div>
            </div>
        <?php endfor; ?>

    </div> <!--main-->

        <!---mostLike-->
        <br>
        <br>
        <div class="like d-flex flex-row vw-100 justify-content-center">
          <?php $getMax = getMax($news); ?>
            <h4><?php echo "Read our most liked article: "; ?><a href="#"><?php echo $getMax['title']; ?></a></h4>
        </div> <!---mostlike-->
  </div> <!--End of wrapper-->
  <?php
require(__DIR__.'/footer.php');
  ?>
