function addCart_id(p_id){
    // alert(p_id);
   
    // dataString = 'p_id='+ p_id;
    //     $.ajax ({
    //         type:"POST",
    //         url:"../../actions/add_id_cart_proc.php",
    //         data: dataString,
    //         cache:false,
    //         success:function(result){
	// 			console.log(result);
	// 			alert(result);
    //             if(result == "success"){
    //                 window.location= "../menu.php";
    //             }
    //         }
    //     });
        var xhttp = new XMLHttpRequest();
xhttp.open("POST", "../actions/add_id_cart_proc.php", true); 
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
     // Response
     var response = this.responseText;
     console.log(response);
   }
};
var data = 'p_id='+ p_id;
xhttp.send(data);
}

//
function addCart_ip(){

}

function updateCart(p_id){
    event.preventDefault();


    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../actions/add_id_cart_proc.php", true); 
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
         // Response
         var response = this.responseText;
         if (response == "success"){
            window.location= "cart.php";
         }
         console.log(response);
       }
    };
    var data = 'p_id='+ p_id;
    xhttp.send(data);

}

function removeCart(p_id){
    event.preventDefault();
    
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../actions/remove_id_cart_proc.php", true); 
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
         // Response
         var response = this.responseText;
         if (response == "success"){
            window.location= "cart.php";
         }
         console.log(response);
       }
    };
    var data = 'p_id='+ p_id;
    xhttp.send(data);
}