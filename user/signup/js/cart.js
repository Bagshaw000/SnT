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

function payment(email, amt){
    event.preventDefault();
    order_status="processing";
  
//    billing_add= document.getElementById('exampleFormControlTextarea1').value;
  
    
    
    let handler = PaystackPop.setup({
      key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
      email: email,
      amount: amt * 100,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1),
      currency:'GHS',
       // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      // label: "Optional string that replaces customer email"
      onClose: function(){
        alert('Window closed.');
      },
      callback: function(response){
        let message = 'Payment complete! Reference: ' + response.reference;
        
      
        if(response.status == "success"){
    
  
          dataString = 'email='+ email +'&amount='+amt+'&ref='+response.reference+'&res='+response.status +'&o_stat='+order_status+'&bill_add='+billing_add+'&user_id='+user_id;
          $.ajax({
              type:"POST",
              url:"",
              data: dataString,
              cache:false,
              success:function(result){
                  alert(result);
              }
          })
          alert ("Payment Successful");
        
      }else{
        alert ("Payment Failed");
      }
        alert(message);
      }
    });
    handler.openIframe();
  
}