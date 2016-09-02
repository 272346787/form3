//实现向显示页面的跳转

function a () {
    window.location="http://www.php.com/sf/form/show.php";
}

//实现向查询页面的跳转

function cx () {
    window.location="http://www.php.com/sf/form/cx.php?" +
        "username="+document.form1.username.value+"&&" +
        "age="+document.form1.age.value+"&&" +
        "sex="+document.form1.sex.value+"";
}

//实现向重新页面的跳转

function tj () {
    window.location="http://www.php.com/sf/form/1.get.php?" +
        "username="+document.form1.username.value+"&&" +
        "age="+document.form1.age.value+"&&" +
        "sex="+document.form1.sex.value+"";
}

//实现向删除页面的跳转

function sc () {
    window.location="http://www.php.com/sf/form/sc.php?" +
        "username="+document.form1.username.value+"&&" +
        "age="+document.form1.age.value+"&&" +
        "sex="+document.form1.sex.value+"";
}

//实现向删除页面的跳转

function xg () {

    if (document.form1.username.value != "")
    {
        var age = prompt("请输入修改后的年龄");
        var sex = prompt("请输入修改后的性别");
        if (age &&sex){
            window.location="http://www.php.com/sf/form/xg.php?" +
                "username="+document.form1.username.value+"&&" +
                "age="+age+"&&" +
                "sex="+sex+"";
        }
    }
    else{
        alert("请输入姓名");
    }


}

//判断表单是否填写完毕

function jc () {
    if (document.form1.username.value == ""){
        alert("姓名不能为空");
        document.form1.username.focus();
        return false;
    }
    if (document.form1.age.value == ""){
        alert("年龄不能为空");
        document.form1.age.focus();
        return false;
    }
    if (document.form1.sex.value == ""){
        alert("性别不能为空");
        document.form1.sex.focus();
        return false;
    }

}


