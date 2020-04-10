
<h1>The Wall</h1>
  <form action="" method="post">
    <input type="text" name="content" class="wallInput">
    <button type="submit">Add</button>
  </form>

  <table class="wall">
    <thead>
      <tr>
        <th>What?</th>
        <th>Who?</th>
        <th>When?</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($contents as $content){?>
      <tr>
        <td><?php echo $content['content']; ?></td>
        <td><?php echo $content['user'][0]['name']; ?></td>
        <td><?php echo $content['date']; ?></td>
        <?php }?>
      </tr>
    <tbody>
  </table>
