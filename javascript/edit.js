function edit(id)
{
    var ids=id;
    var name=$("#nameid").val();
    var username=$("#usernameid").val();
    var dob=$("#dobid").val();
    var no=$("#numberid").val();
    var location=$("#locationid").val();
    console.log(no);
    //let reg=/\d+/g;
    //let w=/\s/g;
    $.ajax({method:"POST", url:"/GUVI2/php/edit.php", data:{id:id,name:name,username:username,dob:dob,no:no,location:location}});
    window.location.href="/GUVI2/php/profile.php?id="+ids;
}
function hide(){
    $("#table1").css("display","none");
    $("#table2").css("display","block");
}