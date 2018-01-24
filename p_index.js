
$(document).ready(function(){
	get_topics();

	$('form').on('submit', function(e){
      e.preventDefault();
      $.ajax({
        type:$(this).attr('method'),
        url:$(this).attr('action'),
        data:$(this).serialize(),
        success:function(){
          get_topics();
          resetform();
        }
      })
      get_topics();
      $('#modal-1').modal('hide');
 
    })
})

function get_topics(){
	$.get('part/topic-views.php', function(data){
		$('#topic-content').html(data);
	})
}
function modal(){
	$('#modal-1').modal('show');
}
function resetform(){
  $('[name=nama]').val('');
  $('[name=deskripsi]').val('');

}