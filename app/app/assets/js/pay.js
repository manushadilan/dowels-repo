$(document).ready(function(){
		var count=1;
		$('#add').click(function(){
			 count=count+1;
			 var html_code ="<tr id='row"+count+"'>";
			 html_code +="<td contenteditable='true' class='uid'></td>";
			 html_code +="<td contenteditable='true' class='name'></td>";
			 html_code +="<td contenteditable='true' class='nic'></td>";
			 html_code +="<td contenteditable='true' class='amount'></td>";
			 html_code +="<td contenteditable='true' class='paydate'></td>";
			 html_code +="<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";
			 html_code +="</tr>";
			 $('#curd_table').append(html_code);

		});

		$(document).on('click', '.remove', function(){
			var delete_row = $(this).data("row");
			$('#'+delete_row).remove();
		});
		$('#save').click(function(){
			var uid=[];
			var name=[];
			var nic=[];
			var amount=[];
			var paydate=[];
			
			$('.uid').each(function(){
				uid.push($(this).text());
			});
			$('.name').each(function(){
				name.push($(this).text());
			});
			$('.nic').each(function(){
				nic.push($(this).text());
			});
			$('.amount').each(function(){
				amount.push($(this).text());
			});
			$('.paydate').each(function(){
				paydate.push($(this).text());
			});
			$.ajax({
				 url:"../control/paylogic.php",
				 method:"POST",
				 data:{
				 	uid:uid,name:name, nic:nic, amount:amount, paydate:paydate},
				 success:function(data)
				 {
				 	
				 	$("td[contenteditable='true']").text("");
				 	for (var i = 2; i <=count; i++) {
				 		$('tr#'+i+'').remove();
				 	}

				 	$('#feedback').html(data).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
				 }
			});
		});

		$('#send').click(function(){
			var send=$('#send').val();
			$.ajax({
				url:"../control/sendmail.php",
				method:"POST",
				data:send,
				success:function(data){
					$('#feedback').html(data).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
				}
			});
		});
	});