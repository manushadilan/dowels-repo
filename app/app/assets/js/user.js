  var frm= $('#user-form');
    frm.submit(function(e){
      e.preventDefault();

      $.ajax({
        type:frm.attr('method'),
        url:frm.attr('action'),
        data:frm.serialize(),
        success:function(data){
          $('#feedback').html(data).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
          
        },
        error:function(data){
          console.log('An error occurred !');
          console.log(data);
        }
      });

    });
