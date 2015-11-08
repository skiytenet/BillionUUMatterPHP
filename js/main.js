$(document).ready(function(){
	$("#container").load("displayfluids.php");
reload();

	$("input[name='search']").on('input',function(){
		if($(this).val() == "")
		{
			canReload = true;
			reload();
		}
		else
		{
			var search = $(this).val();
				$(".fluid").each(function(index){
					if($(this).text().match(new RegExp(search,"i")))
					{
						$(this).show();
					}
					else {
						$(this).hide();
					}
				});
				canReload = false;
			}
		});
});

var canReload = true;

function reload()
{
	if(canReload == true)
	{
		$("#container").load("displayfluids.php");
		setTimeout(reload, 1000);
		console.log("reloaded");
	}
	else {
		//do nothing
		console.log("stopped");
	}
}
