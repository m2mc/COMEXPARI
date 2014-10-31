var cache = {};
$(document).ready(function(){
	$("input[data-id=nom]").autocomplete({
		source: function (request, response)
		{
			//Si la réponse est dans le cache
			if (request.term in cache)
			{
				response($.map(cache[request.term], function (item)
				{
					return {
						label: item.nom ,
						value: function ()
						{
							if ($(this).attr('data-id') == 'nom')
							{
								$('input[data-id=nom]').val(item.nom);
								return item.nom;
							}
							
						}
					};
				}));
			}
			//Sinon -> Requete Ajax
			else
			{
 
		            var objData = {};
		            var url = $(this.element).attr('data-url');
		            if ($(this.element).attr('data-id') == 'nom')
		            {
		            	objData = { nom: request.term };
		            }
		             
				$.ajax({
					url: url,
					dataType: "json",
					data : objData,
					type: 'POST',
					success: function (data)
					{
						//Ajout de reponse dans le cache
						cache[request.term] = data;
 
						response($.map(data, function (item)
						{
							return {
								label: item.nom,
								value: function ()
								{
									if ($(this).attr('data-id') == 'nom')
									{
										$('input[data-id=nom]').val(item.nom);
										return item.nom;
									}
									
								}
							};
						}));
					},
					error: function (jqXHR, textStatus, errorThrown)
					{
						console.log(textStatus, errorThrown);
					}
				});
			}
		},
		minLength: 1,
		delay: 300
	});
});