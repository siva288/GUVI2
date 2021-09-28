function profile()
{
    var name=$( "#input1" ).val();
    var username=$("#input2").val();
    var password=$("#input3").val();
    var dob=$("#input5").val();
    var no=$("#input6").val();
    var location=$("#input7").val();
    let reg=/\d+/g;
    let w=/\s/g;
    if(password!=$("#input4").val())
    {
        alert("password not match");
    }
    if(!isNaN(name) || name.match(reg))
    {
        alert("name does not contain number");
    }
    if(username.match(w))
    {
        alert("User name does not contain space")
    }
    $.ajax({method:"POST", url:"../GUVI2/php/main.php", data:{name:name,username:username,password:password,dob:dob,no:no,location:location}});
}
function login()
{
    var user=$("#user").val();
    var pass=$("#pass").val();
    var ajax=new XMLHttpRequest();
    var method="GET";
    var url="../GUVI2/php/get.php";
    var asynchronous=true;
    
    ajax.open(method,url,asynchronous);
    ajax.send();    
    ajax.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            var data=[JSON.parse(this.responseText)];
            var bool=false;
            for(var i=0;i<data[0].length;i++){
               if(user==data[0][i].username && pass==data[0][i].password){
                  window.location.replace("../GUVI2/php/profile.php?id="+data[0][i].id+"");
                   bool=true;
               }
            }
            if(bool==false){
                alert("Alert")
            }
               
        }     
    }
}