$(document).ready(function(){
	get_comment();
	$('form').on('submit', function(e){
      e.preventDefault();
      $.ajax({
        type:$(this).attr('method'),
        url:$(this).attr('action'),
        data:$(this).serialize(),
        success:function(){
          get_comment();
          resetform();
        }
      })
      
 
    })
})

function get_comment(){

	$.get('part/comment-views.php', function(data){
		$('#comment-content').html(data);
	})
}

function resetform(){
  $('#comment').val('');
}