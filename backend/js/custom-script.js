function generateDataTable(classname){

         $('.'+classname).DataTable({
      
            "aaSorting": [],
           //"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            rowReorder: {
            selector: 'td:nth-child(2)'
            },
            responsive: 'true',
            dom: "Bfrtip",
            buttons: [

                {
                    extend: 'copyHtml5',
                    text: '<i class="fa fa-files-o"></i>',
                    titleAttr: 'Copy',
                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'excelHtml5',
                    text: '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel',
                   
                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'csvHtml5',
                    text: '<i class="fa fa-file-text-o"></i>',
                    titleAttr: 'CSV',
                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'pdfHtml5',
                    text: '<i class="fa fa-file-pdf-o"></i>',
                    titleAttr: 'PDF',
                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'
                        
                    }
                },

                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>',
                    titleAttr: 'Print',
                    title: $('.download_label').html(),
                        customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                },
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'colvis',
                    text: '<i class="fa fa-columns"></i>',
                    titleAttr: 'Columns',
                    title: $('.download_label').html(),
                    postfixButtons: ['colvisRestore']
                },
            ]
        });
    }
  
function destroyDataTable(classname){
  $("."+classname).dataTable().fnDestroy();
}

/** Multi Select Jquery Plugin Developed By Pawan Kumar pK **/
   function generateMultiSelect(elementid){
     var select = document.querySelector("#"+elementid);
     var selectClassesList = select.classList;
     var selectWidth = select.offsetWidth+"px";
     var options = document.querySelector("#"+elementid).options;
       if(options.length >0){
     var checkBoxList = `<select class='${selectClassesList}' id="${elementid}_btn" onclick="toggleUL('${elementid}')">`;
     checkBoxList += `<option value='' id="${elementid}_selectoption">Select`;
     checkBoxList += "</option></select>";
     checkBoxList += "<ul id="+elementid+'_ul'+" class='select_ul' style='z-index: 1000;list-style-type: none;margin: 0;padding:0;display:none;position: absolute;background: rgb(255, 255, 255);border: 1px solid rgb(102, 175, 233);max-height: 200px;overflow-y: auto;width:"+selectWidth+"'>";
     checkBoxList += `<li style='margin-bottom: 5px;' onmouseover="hoverLi(this)" onmouseout="removeHoverLi(this)" class="${elementid}_ul_selectall_li"><input id="${elementid}_ulCheckAll" style="margin: 5px 7px 5px 12px !important;" type="checkbox" onclick="checkAll('${elementid}'); showSelectedCount('${elementid}')">Select All`;
     checkBoxList += "</li>";
     for(var i=0; i<options.length; i++){
       var option = options[i];
       var checked = '';
       var title = '';
       if(option.attributes.selected){
         checked = 'checked';
       }
       if(option.attributes.title){
         title = option.attributes.title.value;
       }       
       if( i== options.length-1){
         checkBoxList += `<li title="${title}" onmouseover="hoverLi(this)" onmouseout="removeHoverLi(this)" class="${elementid}_ul_li">`;
       }
       else{
         checkBoxList += `<li title="${title}" style='margin-bottom: 5px;' onmouseover="hoverLi(this)" onmouseout="removeHoverLi(this)" class="${elementid}_ul_li">`;
       }
       checkBoxList += `<input ${checked} style="margin: 5px 7px 5px 12px !important;" type="checkbox" value="${option.value}" class="${elementid}_checkbox" onclick="showSelectedCount('${elementid}')">${option.text}`;
       checkBoxList += "</li>";
     }
     checkBoxList += "</ul>";
     var newDiv = document.createElement('div');
     newDiv.setAttribute("id", elementid);
     newDiv.setAttribute("class", 'multiselect_div');
       newDiv.innerHTML = checkBoxList;
     select.parentNode.replaceChild(newDiv, select);
     document.querySelector("#"+elementid+"_selectoption").style.display = 'none';  
       showSelectedCount(elementid);     
     }
   }
   
   function toggleUL(elementid){
     var ul = document.querySelector("#"+elementid+"_ul");
     if(ul.style.display == 'none'){
       
       ul.style.display = "block";
     }
     else{
       ul.style.display = 'none';
     }
   }
   
   function checkAll(ulId){
     var checkAllElement = document.querySelector("#"+ulId+"_ulCheckAll");
     var inputList = document.querySelector("#"+ulId+"_ul").getElementsByTagName("input");
     if(checkAllElement.checked == true){ 
       for(let i=0; i<inputList.length; i++){
         inputList[i].checked= true;
       }
     }
     else{
       for(let i=0; i<inputList.length; i++){
         inputList[i].checked= false;
       }
     }
   }
   
   function makeAllChecked(elementId){
      if( document.querySelector("#"+elementId+"_ul") ){
     var inputList = document.querySelector("#"+elementId+"_ul").getElementsByTagName("input");
         for(let i=0; i<inputList.length; i++){
         inputList[i].checked= true;
       }
     showSelectedCount(elementId);
      }
   }   
   
   function getSelectedElementsBySelectId(elementid){
       var checkedElementList = [];
       if( document.querySelector("#"+elementid+"_ul") ){
     var inputList = document.querySelector("#"+elementid+"_ul").getElementsByTagName("input");
     for(let i=1; i<inputList.length; i++){
       if(inputList[i].checked == true){
         checkedElementList.push(inputList[i].value);
       }
     }
       }
       return checkedElementList; 
   }
   
   function hoverLi(elementId){
     elementId.style.background = "rgb(102, 175, 233)";
     elementId.style.color = "white";
   }
   
   function removeHoverLi(elementId){
     elementId.style.background = "";
     elementId.style.color = "";
   }

   function showSelectedCount(elementid){
     var inputList = document.querySelector("#"+elementid+"_ul").getElementsByTagName("input");
     var checkedElementList = [];
     for(let i=1; i<inputList.length; i++){
       if(inputList[i].checked == true){
         checkedElementList.push(inputList[i].value);
       }
     }
     var length = checkedElementList.length;
     if(length > 0){
       document.querySelector("#"+elementid+"_selectoption").text = length+" Item Selected"; 
     }
       else{
       document.querySelector("#"+elementid+"_selectoption").text = "Select"; 
     }
   }
 
$('html').on('click', function(e){
$(".multiselect_div").each(function(k,v){
  let elementid = $(this).attr('id');
  let ul = document.querySelector("#"+elementid+"_ul");
  var elementstatus = "none";
  if( ul.style.display == 'block' ){
    elementstatus = "block";
  }
  ul.style.display = 'none';
  if( document.getElementById(elementid).contains(event.target) ){
    ul.style.display = (elementstatus == 'block') ? 'block' : 'none';
  }
});   
});
    
/** Multi Select **/