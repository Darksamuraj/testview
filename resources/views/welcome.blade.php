@extends('layouts.app')

@section('content')
		<form >
 			  <p><h1 id="message">Ты добрый?</h1></p>
   			 <p><input name="character" type="radio" value="2"> Да</p>
   			 <p><input name="character" type="radio" value="3"> Нет</p>
   			 <p><button onclick="answer();return false;" >Выбрать</button></p>
  		</form>
		<script src="http://code.jquery.com/jquery-1.11.2.js"></script>
<script>
		function answer(){
		checks=document.getElementsByName("character");
		for(i=0;i<checks.length;++i){
			if(checks[i].type=="radio" && checks[i].checked){
				result=checks[i].value;
			}
		}
			$.ajax({
       			 url: '/sendmail',
    	  	  method: 'post',
    	 	  data: {text:result},
    	 	   headers: {
     		   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   				 },
    		    success: function(result1){
					alert(result1);
							
     		   },
   			 });
			return false;
	}
</script>
@endsection
