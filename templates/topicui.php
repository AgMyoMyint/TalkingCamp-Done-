<?php include ("includes/header.php"); ?>


<div class="main-col">

    <div class="block">
        <h2 class="pull-left">
            <?php echo $topic_['title']; ?>
        </h2>
        <h4 class="pull-right">
            A simple PHP Forum Engine
        </h4>
        <div class="clearfix"></div>
        <hr>

        <ul id="topics">

            <li class="topic">
                <div class="row user-info">
                    <div class="col-md-2 ">
                        <div class="topic-info">

                            <img class="avatar pull-left" src="images/avatars/<?php echo $topic_['avatar']; ?>" />
                            <ul>
                                <li> <strong><?php echo $topic_['username']; ?>   </strong></li>
                                <li>  <?php echo userPostCount($topic_['user_id']); ?> posts </li>
                                <li>  <a href="topics.php?user=<?php echo $topic_['user_id']; ?>" > View Topics </a> </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-10 ">
                        <div class="topic-content ">
                            <?php echo $topic_['body']; ?>
                        </div>
                    </div>
                </div>
            </li>


            <?php foreach ($topics as $topic) : ?>
                <li class="topic">
                    <div class="row user-info">
                        <div class="col-md-2 ">
                            <div class="topic-info">
                                <img class="avatar pull-left" src="images/avatars/<?php echo $topic['avatar']; ?>" />
                                <ul>
                                    <li> <strong><?php echo $topic['username']; ?>   </strong></li>
                                    <li>  <?php echo userPostCount($topic['user_id']); ?> posts </li>
                                    <li>  <a href="topics.php?user=<?php echo $topic['user_id']; ?>" > View Topics </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-10 ">
                            <div class="topic-content ">
                                <?php echo $topic['body']; ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>


        </ul>

        <h3>
            Forum Statistics
        </h3>

        <ul>
            <li>Total Number of Users : <strong>52</strong></li>
            <li>Total Number of Topics : <strong><?php echo $totalTopics;?></strong></li>
            <li>Total Number of Categories : <strong><?php echo $totalCategories;?></strong></li>
        </ul>
    </div>
</div>


<?php include ("includes/footer.php"); ?>
