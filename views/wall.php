<?php
  $host = "http://$_SERVER[HTTP_HOST]/wall_from_scratch/";
  $url = $host . '?url=';
?>

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
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($contents as $content){?>

      <tr>
        <td><?php echo $content['content']; ?></td>
        <td><?php echo $content['user'][0]['name']; ?></td>
        <td><?php echo $content['date']; ?></td>
        <td>
          <form action="<?php $url . 'deleteWord'?>" method="post">
              <input type="hidden" name="delete_word" value="<?php echo $content['id']?>">
              <button type="submit" class="delete">Delete</button>
          </form>
        </td>
        <?php }?>
      </tr>
    <tbody>
  </table>
