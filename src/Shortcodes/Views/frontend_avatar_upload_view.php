
<div id="profile_avatar" class="center-block">

<?php if($profile_avatar == ''){?>

  <?php echo get_avatar(get_current_user_id(),100,'','',array('class'=>'img-responsive img-circle'))?>
  <small><a class="avatar_uploader" href="javascript:void(0)">Change Avatar</a></small>

<?php }else{?>

  <img class="avatar avatar-100 photo img-responsive img-circle" width="100" height="100" src="<?php echo $profile_avatar?>" alt="">
  <small><a class="avatar_uploader" href="javascript:void(0)">Change Avatar</a></small>

<?php } ?>

</div>
