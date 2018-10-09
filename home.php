<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php foreach ($jurusan as $news_item): ?>

        <h3><?php echo $news_item['jurusan']; ?></h3>
        <div class="main">
                <?php echo $news_item['deskripsi']; ?>
        </div>


<?php endforeach; ?>
</body>
</html>