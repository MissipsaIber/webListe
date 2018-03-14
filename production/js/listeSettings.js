

var table=document.getElementById("table");
var tableau-elements=document.getElementById("tableau-elements");
var rIndex;

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
     var 		newRow = table.insertRow(table.length),
                cel1 = newRow.insertCell(0),
                cel2 = newRow.insertCell(1),
                cel3 = newRow.insertCell(2),

                titList = document.getElementById("titList").value,
                descList = document.getElementById("descList").value,
                typeList = document.getElementById("typeList").value;
	
        cel1.innerHTML = titList;
        cel2.innerHTML = descList;
        cel3.innerHTML = typeList;

	  //$('#message-box-edit-list').modal('hide');
	  
		selectedRowToInput();
		titList="";
        descList="";
        typeList="";
		
}

function addRowElement()
{
     var 		newRow = tableau-elements.insertRow(tableau-elements.length),
                cel1 = newRow.insertCell(0),
                cel2 = newRow.insertCell(1),
                cel3 = newRow.insertCell(2),
				cel4 = newRow.insertCell(3),
				cel5 = newRow.insertCell(4),
				
                titElement = document.getElementById("titElement").value,
                descElement = document.getElementById("descElement").value,
				date-creation = document.getElementById("date-creation").value,
				date-modification = document.getElementById("date-modification").value,
				//date-modification = document.write(Date()),
				descElement = document.getElementById("descElement").value;
                
	
        cel1.innerHTML = titElement;
        cel2.innerHTML = descElement;
        cel3.innerHTML = date-creation;
		cel4.innerHTML = date-modification;
		cel5.innerHTML = descElement;
		print("tzzzzzzz");
	  //$('#message-box-edit-list').modal('hide');
	  
		//selectedRowToInputElement();
		
}
function selectedRowToInput(){
	
	//var rIndex;
	for (var i=0; i<table.rows.length; i++){
		table.rows[i].onclick=function(){
			
			rIndex = this.rowIndex;
			console.log(rIndex);
			document.getElementById("titListModif").value=this.cells[0].innerHTML;
			document.getElementById("descListModif").value=this.cells[1].innerHTML;
			document.getElementById("typeListModif").value=this.cells[2].innerHTML;
			//$('#message-box-maj-list').modal('show');
		}
	}
}

/*function selectedRowToInputElement(){
	
	//var rIndex;
	for (var i=0; i<tableau-elements.rows.length; i++){
		tableau-elements.rows[i].onclick=function(){
			
			rIndex = this.rowIndex;
			console.log(rIndex);
			document.getElementById("titListModif").value=this.cells[0].innerHTML;
			document.getElementById("descListModif").value=this.cells[1].innerHTML;
			document.getElementById("typeListModif").value=this.cells[2].innerHTML;
			document.getElementById("descListModif").value=this.cells[1].innerHTML;
			document.getElementById("typeListModif").value=this.cells[2].innerHTML;
			//$('#message-box-maj-list').modal('show');
		}
	}
}*/

function majHtmlTableSelectRow(){
	
	var titListModif = document.getElementById("titListModif").value,
		descListModif = document.getElementById("descListModif").value,
		typeListModif = document.getElementById("typeListModif").value;
		
		table.rows[rIndex].cells[0].innerHTML = titListModif;
		table.rows[rIndex].cells[1].innerHTML = descListModif;
		table.rows[rIndex].cells[2].innerHTML = typeListModif;
	
}

function delSelectedRow()
{
	table.deleteRow(rIndex);
}
