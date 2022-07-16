//Verifies if the passed string is a valid email
function isValidEmail(string){

	return RegExp(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/).test(string)
}

//Verifies if passed string is not empty
function isEmpty(value){
	return !(value.length > 0);
}

//Verifies if the passed String is longer than 5 characters
function validatePassLen(pass){
	return pass.length > 5;
}

//Verifies if the passed string contains at least one number
function validatePassNum(pass){
	return RegExp(/.*[0-9].*/).test(pass);
}

function submitSignUp(){
    event.preventDefault();
    email= document.getElementById("email").value;
    fname= document.getElementById("fname").value;
    lname= document.getElementById("lname").value;
    password= document.getElementById('password').value;
    conpass= document.getElementById("conpass").value;

    var passes = false;
	

    //Email validation
	if (isValidEmail(email)){//email is valid
		passes = true;
		document.getElementById("email_error").style.display = "none";
	}else {
		passes = false;
		document.getElementById("email_error").style.display = "block";
	}

	//password number
	if (validatePassNum(password)){//password is long enough
		passes = true && passes;//takes into consideration previous status
		document.getElementById("pass_error_num").style.display = "none";
	} else {
		passes = false && passes;//takes into consideration previous status
		document.getElementById("pass_error_num").style.display = "block";
	}

	//password length
	if (validatePassLen(password)){//password is long enough
		passes = true && passes;//takes into consideration previous status
		document.getElementById("pass_error_len").style.display = "none";
	} else {
		passes = false && passes;//takes into consideration previous status
		document.getElementById("pass_error_len").style.display = "block";
	}

	//valid username
	if(fname == null || lname == null){//no username is typed
		passes = false && passes;//takes into consideration previous status
		document.getElementById("name_error_empty").style.display = "block";
        document.getElementById("name_error_empty2").style.display = "block";
   
	}else {
		passes = true && passes;//takes into consideration previous status
		document.getElementById("name_error_empty").style.display = "none";
        document.getElementById("name_error_empty2").style.display = "none";

	}

	//validate passwords
	if (password == conpass){
		passes = true && passes;//takes into consideration previous status
		document.getElementById("pass_error_confirm").style.display = "none";

	}else{
		passes = false && passes;//takes into consideration previous status
		document.getElementById("pass_error_confirm").style.display = "block";

	}
    
console.log(passes);
	if(passes){
		//sign up credentials are okay, sign user up and redirect to login page

		//if all login credentials are correct, process login with AJAX
        // The ajax code
    
     dataString = 'email='+ email +'&fname='+fname+'&lname='+lname+'&pass='+password;
        $.ajax({
            type:"POST",
            url:"../../actions/sign_up_proc.php",
            data: dataString,
            cache:false,
            success:function(result){
                alert(result);
            }
        })
	}else {

		
	}

	return false;

}

 function onLogin(){
	event.preventDefault();
    email= document.getElementById("email1").value;
    pass= document.getElementById("pass1").value;
    var passes = false;
	

    //Email validation
	if (email == null || pass == null ){//email is valid
		passes = false;
		document.getElementById("email_error1").style.display = "block";
	}else {
		passes = true;
		document.getElementById("email_error1").style.display = "none";
	}

    if  (isValidEmail(email)){
        document.getElementById("email_error1").style.display = "none";
        passes= true;
    } else{
        passes = false;
        document.getElementById("email_error1").style.display = "block";
    }
    
    if (validatePassLen(pass) && validatePassNum(pass) ){
        document.getElementById("email_error1").style.display = "none";
        passes= true;
    } else{
        passes = false;
        document.getElementById("email_error1").style.display = "block";
    }
    
    //Send the detail to the proc page with ajax
    if(passes == true){
		//sign up credentials are okay, sign user up and redirect to login page

		//if all login credentials are correct, process login with AJAX
        // The ajax code
    
     dataString = 'email='+ email +'&pass='+pass;
        $.ajax({
            type:"POST",
            url:"../../actions/login_proc.php",
            data: dataString,
            cache:false,
            success:function(result){
				console.log(result);
				alert(result);
                if(result == "success"){
                    window.location= "../index.php";
                }
            }
        })
	}else {

		// ;
	}

    
}


