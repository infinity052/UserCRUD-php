function validation(){
    var error="";
    var uname=document.querySelector("#uname");
    var pwd=document.querySelector("#pwd");
    if(uname.value=="" || uname.value==null || pwd.value=="" || pwd.value==null){
        document.querySelector("#hideme").className="hide";
        document.querySelector("#hideshow").className="show";
        return false;
    }
}
  
function register(){
    location.href="register.php";
}
function updatedetails(){
    var btn="btn btn-success form-group";
       
    var input="container form-group input-group input-group-sm";
    var label="container form-group";
   document.querySelector('#update').className=btn+" hide";
   document.querySelector('#submit').className=btn+" show";
   for(let i=1;i<5;i++){
    document.querySelector('#input'+i).className=input+" show";
    if(i<4){
    document.querySelector('#label'+i).className=label+" hide";
    }
   }
   
}

function del(){
    document.querySelector('#delete').className="bg container form-group show";
}

function deleteno(){
    document.querySelector('#delete').className="hide";
}