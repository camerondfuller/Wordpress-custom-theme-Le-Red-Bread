jQuery(function(){
   jQuery('#close-comments').on('click', function(event) {
      event.preventDefault();

      jQuery.ajax({
         method: 'post',
         url: comment_close_var.rest_url+'wp/v2/posts/'+comment_close_var.post_id,
         data: {
            comment_status: 'open'
         },
         beforeSend: function(xhr) {
            xhr.setRequestHeader('X-WP-Nonce', comment_close_var.comment_nonce);
         }
      }).done(function(response){
         alert('Success!');
      });
   });

});
