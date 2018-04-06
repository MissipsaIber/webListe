/**
 * Created by IBERRAKENE Missipsa on 05/04/2018.
 */

var tableauMembres = document.getElementById("tableau_membres");
var rowIndex;

function modalAddList() {
    $('#message-box-edit-list').modal('show')

    document.getElementById("titList").value = ""
    document.getElementById("descList").value = ""
    document.getElementById("membre").value = "";

    //document.getElementById("droitMembre").value=""
    var Parent = document.getElementById("tableau_membres");
    while (Parent.hasChildNodes()) {
        Parent.removeChild(Parent.firstChild);
    }
}

function addRow() {
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
    titList = "";
    descList = "";
    typeList = "";
}

function addRowMembre() {
    var membre;
    var droit;
    var newRow = tableauMembres.insertRow(tableauMembres.length),
        cel1 = newRow.insertCell(0),
        cel2 = newRow.insertCell(1),

        membre = document.getElementById("membre").value,
        droit = document.getElementById("droitMembre").value;

    cel1.innerHTML = membre;
    cel2.innerHTML = droit;
    document.getElementById("membre").value = ""
    document.getElementById("droitMembre").value = "lecture"
    selectedRowToInputMembre();
}

function selectedRowToInput() {
    for (var i = 0; i < table.rows.length; i++) {
        table.rows[i].onclick = function () {
            rowIndex = this.rowIndex;
            console.log(rowIndex);
            document.getElementById("titListModif").value = this.cells[0].innerHTML;
            document.getElementById("descListModif").value = this.cells[1].innerHTML;
            document.getElementById("typeListModif").value = this.cells[2].innerHTML;
            //$('#message-box-maj-list').modal('show');
        }
    }
}

function selectedRowToInputMembre() {
    for (var i = 0; i < tableauMembres.rows.length; i++) {
        tableauMembres.rows[i].onclick = function () {
            rowIndex = this.rowIndex;
            var tr = tableauMembres.getElementsByTagName("TR")

            if (tr[rowIndex - 1].className == "success") {
                tr[rowIndex - 1].className = "";
                rowIndex = 0;
                document.getElementById("membre").value = "";
                document.getElementById("droitMembre").value = "lecture";
            }
            else {
                tr[rowIndex - 1].className = "success"
                document.getElementById("membre").value = this.cells[0].innerHTML;
                document.getElementById("droitMembre").value = this.cells[1].innerHTML;
            }
        }
    }
}

function majTableSelectedMembre() {

    var membre = document.getElementById("membre").value,
        droit = document.getElementById("droit").value;

    tableauMembres.rows[rowIndex].cells[0].innerHTML = membre;
    tableauMembres.rows[rowIndex].cells[1].innerHTML = droit;
}

function delSelectedRowMembre() {
    tableauMembres.deleteRow(rowIndex);
}

function ConfirmMessageDelMembre() {
    if (confirm("Voulez-vous supprimer ce membre ?")) {
        // Clic sur OK
        delSelectedRowMembre();
    }
}