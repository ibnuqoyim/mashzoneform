var script_url = "https://script.google.com/macros/s/AKfycbyizGLRYHrQKTcXaE4wcn0sP8im7bYKsSj7Ds-m_wGvSSeE-7qa/exec";
  
  // Make an AJAX call to Google Script
  function insert_value() {
    
	
 
	var id1=	$("#Task_id").val();
	var mto= $("#Task_idMto").val();
	var task= $("#Task_idItem").val();	
	var item= $("#namaitem").val();
	var bstart= $("#Task_bStart").val();
	var bfinish= $("#Task_bFinish").val();
	var npic= $("#infopic").val();
	
	
    var url = script_url+"?callback=ctrlq&npic="+npic+"&bfinish="+bfinish+"&item="+item+"&bstart="+bstart+"&task="+task+"&mto="+mto+"&id="+id1+"&action=insert";
  
 
    var request = jQuery.ajax({
      crossDomain: true,
      url: url ,
      method: "GET",
      dataType: "jsonp"
    });
 
  }
 
 
  
  
 
  
  
  function update_value(){
	$("#re").css("visibility","hidden");
     document.getElementById("loader").style.visibility = "visible";
	
	
	var id1= $("#Progres_Id").val();
	var idT= $("#Progres_IdTask").val();
	var pStart= $("#Progres_pStart").val();
	var pSatu= $("#Progres_pTahap1").val();
	var pDua= $("#Progres_pTahap2").val();
	var pFinish= $("#Progres_pFinish").val();
	
	
	
	
    var url = script_url+"?callback=ctrlq&pFinish="+pFinish+"&pDua="+pDua+"&pSatu="+pSatu+"&pStart="+pStart+"&idT="+idT+"&id="+id1+"&action=update";
  
 
    var request = jQuery.ajax({
      crossDomain: true,
      url: url ,
      method: "GET",
      dataType: "jsonp"
    });
 
	
  }
 
  
 
  
  
  function delete_value(){
	$("#re").css("visibility","hidden");
     document.getElementById("loader").style.visibility = "visible";
	$('#mySpinner').addClass('spinner');
var id1=	$("#id").val();
	var name= $("#name").val();
	
	
	
    var url = script_url+"?callback=ctrlq&name="+name+"&id="+id1+"&action=delete";
  
 
    var request = jQuery.ajax({
      crossDomain: true,
      url: url ,
      method: "GET",
      dataType: "jsonp"
    });
 
  }
 
 
  
  
  // print the returned data
  function ctrlq(e) {
  
	
	$("#re").html(e.result);
	$("#re").css("visibility","visible");
	
	
  }
  
  
 
  
function read_value() {
 
$("#re").css("visibility","hidden");
   
   document.getElementById("loader").style.visibility = "visible";
 var url = script_url+"?action=read";
 
$.getJSON(url, function (json) {
 
    // Set the variables from the results array
   
   
  
 
        // CREATE DYNAMIC TABLE.
        var table = document.createElement("table");
 
		
 
        var header = table.createTHead();
		var row = header.insertRow(0);     
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		var cell6 = row.insertCell(5);
		var cell7 = row.insertCell(6);
		var cell8 = row.insertCell(7);
		var cell9 = row.insertCell(8);
		var cell10 = row.insertCell(9);
		
	
		cell1.innerHTML = "<b>ID</b>";
		cell2.innerHTML = "<b>Task</b>";
		cell3.innerHTML = "<b>MTO</b>";
		cell4.innerHTML = "<b>Progres</b>";
		cell5.innerHTML = "<b>Baseline Start</b>";
		cell6.innerHTML = "<b>Baseline Finish</b>";
		cell7.innerHTML = "<b>Actual Start</b>";
		cell8.innerHTML = "<b>Actual Finish</b>";
		cell9.innerHTML = "<b>PIC</b>";
		cell10.innerHTML = "<b>Kontak</b>";
        
        // ADD JSON DATA TO THE TABLE AS ROWS.
        for (var i = 0; i < json.records.length; i++) {
 
            tr = table.insertRow(-1);
				var tabCell = tr.insertCell(-1);
                tabCell.innerHTML = json.records[i].ID;
				tabCell = tr.insertCell(-1);
				tabCell.innerHTML = json.records[i].Task;
				tabCell = tr.insertCell(-1);
				tabCell.innerHTML = json.records[i].MTO;
				tabCell = tr.insertCell(-1);
                tabCell.innerHTML = json.records[i].Progres;
				tabCell = tr.insertCell(-1);
				tabCell.innerHTML = json.records[i].BaselineStart;
				tabCell = tr.insertCell(-1);
				tabCell.innerHTML = json.records[i].BaselineFinish;
				tabCell = tr.insertCell(-1);
				tabCell.innerHTML = json.records[i].ActualStart;
				tabCell = tr.insertCell(-1);
                tabCell.innerHTML = json.records[i].ActualFinish;
				tabCell = tr.insertCell(-1);
				tabCell.innerHTML = json.records[i].PIC;
				tabCell = tr.insertCell(-1);
				tabCell.innerHTML = json.records[i].Kontak;
            }
      
 
        // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
        var divContainer = document.getElementById("showData");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);
		document.getElementById("loader").style.visibility = "hidden";
		$("#re").css("visibility","visible");
    });
	}
  