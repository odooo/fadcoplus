$allParcelleoption.each(function(){
	selectedItemParcelleArray[i] = $(this).val();
	i++;
});

sendArray.idBien = selectedItemBienArray.id;
sendArray.codeBien = selectedItemBienArray.code;
sendArray.parcelles = {};

var Parcelles = new Array();
for( var compt in selectedItemParcelleArray ){
	Parcelles.push(selectedItemParcelleArray[compt]);
}

var outTabParcelles = $.extend({}, Parcelles);
sendArray.parcelles = outTabParcelles;

tab[selectedItemBienArray.id] = sendArray;