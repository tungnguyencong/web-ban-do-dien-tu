
            function validateSelectBox(obj){
                var options = obj;
                var optionsvalue=document.getElementById("optiontinh");
                var inputvalue=document.getElementsByClassName("billing_address_1");
                for (var i = 0; i < optiontinh.length; i++){
                    if (optiontinh[i].value==options){
                        
                        options.selected=inputvalue[0].value;
                    }
                }
                
                
            }
        