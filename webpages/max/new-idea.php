<?php

include_once 'header.php'
?>

<title>New Ideas</title>


<div class="container">

    <div class="col-md-6">


        <form class="form-horizontal form-bordered">
            <div class="form-group">
                <label class="control-label col-md-2">Idea Category</label>
                <div class="col-md-6">
                    <select name="idea" class="form-control">
                        <option>Idea Category</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Title</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">description</label>
                <div class="col-md-6">
                    <textarea cols="10" rows="10" class="form-control"></textarea>
                </div>
            </div>
        </form>

    </div>
    <div class="col-md-6">

        <br/>
        <br/>
        <strong>
            <a href="javascript:void(0)">Most Popular ideas </a> <i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;&nbsp;58

            <br/>
            <br/>
            <br/>

            <a href="javascript:void(0)">Most Visited ideas </a> <i class="fa fa-eye"></i>&nbsp;&nbsp;&nbsp;67

            <br/>
            <br/>
            <br/>

            <a href="javascript:void(0)">Most Visited ideas </a> <i class="fa fa-lightbulb-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;6

            <br/>
            <br/>
            <br/>

            <a href="javascript:void(0)">Most Comments</a> <i class="fa fa-comments"></i>&nbsp;&nbsp;&nbsp;6


            <br/>
            <br/>

        </strong>
    </div>
</div>
<?php


include_once 'footer.php'
?>
