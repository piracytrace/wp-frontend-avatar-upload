
<div id="profile_avatar" class="center-block">

<?php if($profile_avatar == ''){?>

  <?php echo get_avatar(get_current_user_id(),100,'','',array('class'=>'img-responsive img-circle'))?>

<?php }else{?>

  <img class="avatar avatar-100 photo img-responsive img-circle"src="<?php echo $profile_avatar?>" alt="">

<?php } ?>

  <div class="text-center">
    <h5><?php echo current_user_first_name_and_last_name()?></h5>
  </div>
  <!-- <small><a class="avatar_uploader" href="javascript:void(0)">Change Avatar</a> | <a class="" href="<?php echo site_url()?>/logout">Logout</a></small> -->
  <small><a class="avatar_uploader" href="javascript:void(0)">Change Avatar</a> | <a class="" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></small>

</div>
