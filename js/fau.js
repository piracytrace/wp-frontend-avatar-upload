jQuery(document).ready(function($){

  var mediaUploader;

  $(".avatar_uploader").click(function(e){
    e.preventDefault();

    if(mediaUploader){
      mediaUploader.open();
      return;
    }

   mediaUploader = wp.media.frames.file_frame = wp.media({
     title: 'Choose Image',
     button: {
     text: 'Choose Image'
   }, multiple: false });

   mediaUploader.on('select', function() {
     attachment = mediaUploader.state().get('selection').first().toJSON();
     var data = {
       'action' : 'avatar_action',
       'url'    : attachment.url
     }
     $.post(ajax_object.ajax_url, data, function(response){
       $(".avatar").attr('src',attachment.url);
     });
   });
   // Open the uploader dialog
   mediaUploader.open();


  });
});
