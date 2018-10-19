@extends('principal')
@section('base')
<div class="content">
	<div class="container-fluid">
//Não esquece que existe o /user/atualizarDetalhesEvento

<button class="btn btn-primary sweet-1" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Try It</button>
<script >
	
	document.querySelector('.sweet-1').onclick = function(){
        swal("Here's a message!");
      };

   
      
</script>
<script>
     
    </script>

	</div>
</div>

@endsection