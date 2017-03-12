 <?php
    $pages = array(
        '/index.php' => 'Home',
        '/services.php' => 'Services',
        '/directions.php' => 'Directions',
        '/reviews.php' => 'Reviews');
?>
 <nav class="navbar navbar-inverse" id="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" onclick="over()" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
        <?php foreach ($pages as $pageId => $pageTitle): ?>
          <li itemprop="name" <?=(($_SERVER['REQUEST_URI'] == $pageId) ? 'class="active"' : '')?>><a  itemprop="url" href="<?=$pageId?>"><?=$pageTitle?></a></li>
        <?php endforeach; ?>
        
          
      </ul>
      <div class="social-wrap">
        <a href="https://www.facebook.com/Reid-Repairs-960859200641515/" target="_blank"><img class="social-buttons" src="../img/f.png"></a>
        <a href="https://twitter.com/reidrepairs" target="_blank"><img class="social-buttons" src="../img/t.png"></a>
        <a href="https://plus.google.com/+Reidrepairs" target="_blank"><img class="social-buttons" src="../img/g.png"></a>
      </div>
    </div>
    
  </div>

</nav>