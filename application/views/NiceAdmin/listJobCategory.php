<section class="panel">
    <div class="panel-body progress-panel">
        <div class="row">
            <div class="col-lg-8 task-progress pull-left">
                <h1>To Do Everyday</h1>                                  
            </div>
            <div class="col-lg-4">
                <span class="profile-ava pull-right">
                    <img alt="" class="simple" src="img/avatar1_small.jpg">
                    Jenifer smith
                </span>                                
            </div>
        </div>
    </div>
    <div class="row">
        <center><h3><strong>Category List</strong></h3></center></div>
     
    <center><div class="panel-body progress-panel" align="center" style="width: 800px">

        <table class="table table-condensed">
            <th>Sl No</th>
            <th>Category Name</th>
            <th>Action</th>

            <?php
            $i = 1;
            foreach ($category as $key => $values) {
                ?>
                <tr>  <td width="15%"><?php echo $i; ?></td>
                    <td width="25%"><?php echo $values->category_name;
                ?></td>
                    <td width="25%"><a href="">edit</a></td>
                </tr>

                <?php
                $i++;
            }
            ?>

        </table>

        </div></center></section>
