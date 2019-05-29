<?php require('header.php');?>
<h5 class=" text-center">Messanger "SendMes"</h5>
<div class="jumbotron">
    <?php if (isset($_SESSION['username'])){?>
        <form action="?action">
            <div class="form-group">            
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Отправить</button>
        </form>
    <?php }   
    if (isset($data)){
        if(is_array($data)){    
    ?>
     <ul>
     <?php foreach( $data as $value) { ?>
        <li>                                 
     <?php   
            echo   ("<span class='badge badge-primary'>    ".$value['0']."</span>");
            echo   ("<span class='badge badge-secondary'> ".$value['1']."</span>");
            echo   ("<p class='font-weight-normal'>         ".$value['2']."</p>"); ?>
        </li>

<?php } } }?>

    </ul>
</div>
<?php require('footer.php');?>