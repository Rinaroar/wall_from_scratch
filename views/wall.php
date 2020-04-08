
<h1>The Wall</h1>
  <form action="" method="post">
    <input type="text" name="content" class="wallInput">
    <button type="submit">Add</button>
  </form>

  <div class="wall">
    <ul>
    <?php foreach($contents as $content){?>
        <li><?php echo $content['content']; ?>, <?php echo $content['date']; ?>, <?php echo $content['user'][0]['name']; ?> </li>
    <?php }?>
    <ul>
  </div>
