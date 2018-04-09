
$.ajax({
    url:"scan",
    method:"get",
    data:{code:"2222222"},
    dataType:"json",
    success:function (data) {
        console.log(data);
    }
});