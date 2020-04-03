
<h1>The Wall</h1>
  <form action="" method="post">
    <input type="text" name="content" class="wallInput">
    <button type="submit">Add</button>
  </form>

  <div class="wall">
    <ul>
    <?php foreach($contents as $content){?>
        <li><?php echo $content['content']; ?></li>
    <?php }?>
    <ul>
  </div>
