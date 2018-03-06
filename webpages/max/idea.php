<?php

include_once 'header.php'
?>

<title>Ideas</title>


<div class="container">
    <a href="new-idea.php" class="btn-primary btn btn-sm">new Idea</a>
    <div class="col-md-6">
        <nav aria-label="Page navigation" style="align-content: center">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>

                    </a>
                </li>
            </ul>
        </nav>

        <?php

        foreach (range(1, 5) as $item) {

            echo '<a href="javascript:void(0)">idea_' . $item . '</a>&nbsp;&nbsp;&nbsp;';
            echo 'Lorem ipsum dolor sit amet, aliquam nec morbi nullam
             adipiscing ornare porttitor, faucibus sed libero turpis pede diam,
              massa nonummy urna a pellentesque sit magna.';

            echo '&nbsp;&nbsp;&nbsp;<i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;&nbsp;';
            echo '<i class="fa fa-comment"></i>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<button class="btn btn-default">Read More</button>';
            echo '<br/>';
            echo '<hr/>';
        }
        ?>
    </div>
    <div class="col-md-6">
        <br/>
        <br/>
        <br/>
        <br/>
        <strong>
        <a href="javascript:void(0)">Most Popular ideas </a> <i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;&nbsp;58
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <a href="javascript:void(0)">Most Visited ideas </a> <i class="fa fa-eye"></i>&nbsp;&nbsp;&nbsp;67
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <a href="javascript:void(0)">Most Visited ideas </a> <i class="fa fa-lightbulb-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;6
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <a href="javascript:void(0)">Most Comments</a> <i class="fa fa-comments"></i>&nbsp;&nbsp;&nbsp;6
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i>

        </strong>
    </div>
</div>
<?php


include_once 'footer.php'
?>
