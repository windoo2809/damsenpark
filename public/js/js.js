$(document).ready(()=>{
    $("#btn-menu").click(()=>{
       console.log($("#navigation").css({"height":"70px"}))
        if($("#navigation").css("height") == "70px"){
            $("#navigation").css({"height":"150px"})
            $(".div-menu").show()
            $("#logo").hide()

        }else{
            $("#navigation").css({"height":"70px"})
            $(".div-menu").hide()
            $("#logo").show()
        }
    });

});