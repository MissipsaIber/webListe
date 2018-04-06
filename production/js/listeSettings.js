

var table=document.getElementById("table");
var tableau_elements=document.getElementById("tableau_elements");
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


function addRow(){
	
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

	function addRowElement(){	
	var 		maintenant=new Date();
	var 		jour=maintenant.getDate();
	var 		mois=maintenant.getMonth()+1;
	var 		an=maintenant.getFullYear();
	var 		d=an+"-"+mois+"-"+jour;
    var 		newRow = tableau_elements.insertRow(tableau_elements.length),
                cel1 = newRow.insertCell(0),
                cel2 = newRow.insertCell(1),
                cel3 = newRow.insertCell(2),
				cel4 = newRow.insertCell(3),
				cel5 = newRow.insertCell(4),
				
                titleElement = document.getElementById("titleElement").value,
                descElement = document.getElementById("descElement").value,
				date_creation = document.getElementById("date_creation").value;
				//date-modification = document.getElementById("date-modification").value,
				//document.write(d);
				date_modification = d;
				statuElement = document.getElementById("statuElement").value;   
	
        cel1.innerHTML = titleElement;
        cel2.innerHTML = descElement;
        cel3.innerHTML = date_creation;
		cel4.innerHTML = date_modification;
		cel5.innerHTML = statuElement;
		selectedRowToInputElement();

}

function selectedRowToInput(){
	
	//var rowIndex;
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

function selectedRowToInputElement(){
	
	//var rowIndex;
	for (var i=0; i<tableau_elements.rows.length; i++){
		tableau_elements.rows[i].onclick=function(){
			
			rIndex = this.rowIndex;
			console.log(rIndex);
			document.getElementById("titleElement").value=this.cells[0].innerHTML;
			document.getElementById("descElement").value=this.cells[1].innerHTML;
			document.getElementById("date_creation").value=this.cells[2].innerHTML;

			document.getElementById("statuElement").value=this.cells[4].innerHTML;

		}
	}
}

function majHtmlTableSelectRow(){
	
	var titListModif = document.getElementById("titListModif").value,
		descListModif = document.getElementById("descListModif").value,
		typeListModif = document.getElementById("typeListModif").value;
		
		table.rows[rIndex].cells[0].innerHTML = titListModif;
		table.rows[rIndex].cells[1].innerHTML = descListModif;
		table.rows[rIndex].cells[2].innerHTML = typeListModif;
	
}

function SelectMajElement(){
	
	var 		maintenant=new Date();
	var 		jour=maintenant.getDate();
	var 		mois=maintenant.getMonth()+1;
	var 		an=maintenant.getFullYear();
	var 		d=an+"-"+mois+"-"+jour;
	var titleElement = document.getElementById("titleElement").value,
		descElement = document.getElementById("descElement").value,
		date_creation = document.getElementById("date_creation").value,
		date_modification = d,
		statuElement = document.getElementById("statuElement").value;
		
}

function majHtmlTableSelectRowElement(){
	var 		maintenant=new Date();
	var 		jour=maintenant.getDate();
	var 		mois=maintenant.getMonth()+1;
	var 		an=maintenant.getFullYear();
	var 		d=an+"-"+mois+"-"+jour;
	var titleElement = document.getElementById("titleElement").value,
		descElement = document.getElementById("descElement").value,
		date_creation = document.getElementById("date_creation").value,
		date_modification = d,
		statuElement = document.getElementById("statuElement").value;
		tableau_elements.rows[rIndex].cells[0].innerHTML = titleElement;
		tableau_elements.rows[rIndex].cells[1].innerHTML = descElement;
		tableau_elements.rows[rIndex].cells[2].innerHTML = date_creation;
		tableau_elements.rows[rIndex].cells[3].innerHTML = date_modification;
		tableau_elements.rows[rIndex].cells[4].innerHTML = statuElement;
	
}

function delSelectedRow()
{
	table.deleteRow(rIndex);
}

function delSelectedRowElement()
{
	tableau_elements.deleteRow(rIndex);
}

function ConfirmMessageDelElement() {
       if (confirm("Voulez-vous supprimer cette élement ?")) { 
           // Clic sur OK
           delSelectedRowElement();
       }
   }
   
function ConfirmMessageDelList() {
       if (confirm("Voulez-vous supprimer cette liste ?")) { 
           // Clic sur OK
           delSelectedRow();
       }
   }