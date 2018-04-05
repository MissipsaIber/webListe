/**
 * Created by IBERRAKENE Missipsa on 05/04/2018.
 */


var table=document.getElementById("table");
var tableauMembres=document.getElementById("tableau_membres");
var rowIndex;

function addRow(){

        var newRow = table.insertRow(table.length),
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
    var membre;
    var droit;
    var newRow = tableauMembres.insertRow(tableauMembres.length),
        cel1 = newRow.insertCell(0),
        cel2 = newRow.insertCell(1),

        membre = document.getElementById("membre").value,
        droit = document.getElementById("droitMembre").value;

    cel1.innerHTML = membre;
    cel2.innerHTML = droit;

    selectedRowToInputElement();
}

function selectedRowToInput(){

    //var rowIndex;
    for (var i=0; i<table.rows.length; i++){
        table.rows[i].onclick=function(){

            rowIndex = this.rowIndex;
            console.log(rowIndex);
            document.getElementById("titListModif").value=this.cells[0].innerHTML;
            document.getElementById("descListModif").value=this.cells[1].innerHTML;
            document.getElementById("typeListModif").value=this.cells[2].innerHTML;
            //$('#message-box-maj-list').modal('show');
        }
    }
}

function selectedRowToInputElement(){

    //var rowIndex;
    for (var i=0; i<tableauMembres.rows.length; i++){
        tableauMembres.rows[i].onclick=function(){

            rowIndex = this.rowIndex;

            document.getElementById("membre").value=this.cells[0].innerHTML;
            document.getElementById("droit").value=this.cells[1].innerHTML;
        }
    }
}

function majHtmlTableSelectRow(){

    var titListModif = document.getElementById("titListModif").value,
        descListModif = document.getElementById("descListModif").value,
        typeListModif = document.getElementById("typeListModif").value;

    table.rows[rowIndex].cells[0].innerHTML = titListModif;
    table.rows[rowIndex].cells[1].innerHTML = descListModif;
    table.rows[rowIndex].cells[2].innerHTML = typeListModif;

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

    var membre = document.getElementById("membre").value,
        droit = document.getElementById("droit").value;

    tableauMembres.rows[rowIndex].cells[0].innerHTML = membre;
    tableauMembres.rows[rowIndex].cells[1].innerHTML = droit;
}

function delSelectedRow()
{
    table.deleteRow(rowIndex);
}

function delSelectedRowElement()
{
    tableauMembres.deleteRow(rowIndex);
}

function ConfirmMessageDelElement() {
    if (confirm("Voulez-vous supprimer ce membre ?")) {
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