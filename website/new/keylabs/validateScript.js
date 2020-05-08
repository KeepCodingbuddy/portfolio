//function for checkbox
function checkArray(form, arrayName){

    var returnval = new Array();

    for(var i=0; i < form.elements.length; i++) {

        var el = form.elements[i];

        if(el.type == "checkbox" && el.name == arrayName && el.checked) {

        returnval.push(el.value);

        }
    }
    return returnval;
}
//function for checkbox


//================================= Validation Function =================================\\

function validateForm(form){

    //contains form errors
    var errors = [];
    //contains form errors


    //Check validity for name
    if (form.confused_philosopher.value == "") {

        errors.push("1. Name is empty! - Please type your name.");

    }
    //Check validity for name


    //Check validity for email  
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(!form.address.value.match(mailformat)){
       
        errors.push("2. Please check your email format!");

    } 
    //Check validity for email  


    //Check validity for postal code  
    var postal_code_format = /^\s*[a-ceghj-npr-tvxy]\d[a-ceghj-npr-tv-z](\s)?\d[a-ceghj-npr-tv-z]\d\s*$/i;

    if(!form.postal.value.match(postal_code_format)){

        errors.push("3. Please check your postal code again!");
    }
    //Check validity for postal code 


    //Check validity for selected options
    if(form.origin.selectedIndex==""){

        errors.push("4. Please give us your opinion!");
    }
    //Check validity for selected options


    //Check validity for checkbox
        var itemsChecked = checkArray(form, "composition[]");

        if(itemsChecked.length == 0) {

            errors.push("5. Please select at least one! ");
        } 
    //Check validity for checkbox


    //Check validity for number of planets
    var number=document.forms["UniverseForm"]["howmany"].value;

    var numberFormat=/^[0-9]+$/;

    if (!number.match(numberFormat)){
       
        errors.push("6. Please tell us how many planets are there!");

    } 
    //Check validity for number of planets


    //Check validity for radio
    var radio1 = document.getElementById('r').checked;
    var radio2 = document.getElementById('y').checked;
    var radio3 = document.getElementById('g').checked;
    var radio4 = document.getElementById('b').checked;
    var radio5 = document.getElementById('p').checked;

    if((radio1=="")&&(radio2=="")&(radio3=="")&(radio4=="")&(radio5=="")){

        errors.push("7. Please tell us what's the color of Mars!");

    }
    //Check validity for radio


     //Check validity for pi
     var decimal=document.forms["UniverseForm"]["pi"].value;

     var decimalFormat=/^\d+\.?\d*$/;
 
     if (!decimal.match(decimalFormat)){
        
         errors.push("8. Please enter a decimal number!");
 
     } 
     //Check validity for pi



    //display error messages
    if (errors.length > 0) {

        var msg = "ERRORS:\n\n";

        for(var i=0; i < errors.length; i++){

            msg+=errors[i] + "\n";
        }

        alert(msg);

        return false;
    }
    //display error messages
    
}

//================================= Validation Function =================================\\