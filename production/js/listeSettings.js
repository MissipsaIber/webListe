
function addMembres() {
	
	var membre
	var label
	
	
	membre=document.getElementById("membres").value
	
    $("#divLabelMembres").append("<div class='form control col-md-2'></div><label for=\"name\">Test</label></div>");
	
	document.getElementById("membres").value=""
	
	
	/*indicecondition++;
    var divselect = document.getElementById("condition");
    var newselect = createDivCondition(indicecondition);
    insertAfter(divselect, newselect)
    $("#c_"+indicecondition).selectpicker('refresh')
    tableauIdCondition.push("#c_"+indicecondition);*/
}


  function addRow() {
     var table = document.getElementById("table"),
                newRow = table.insertRow(table.length),
                cel1 = newRow.insertCell(0),
                cel2 = newRow.insertCell(1),
                cel3 = newRow.insertCell(2),

                titList = document.getElementById("titList").value,
                descList = document.getElementById("descList").value,
                typeList = document.getElementById("typeList").value;



        cel1.innerHTML = titList;
        cel2.innerHTML = descList;
        cel3.innerHTML = typeList;

	  $('#message-box-edit-list').modal('show')

    }