/* detail */

function viewproduct() {
    //nothing happends
    }
    
    function change_img_0(){
        var img = document.getElementById("detail_ticket");
    
        img.src = "../img/cinema.png"
    }
    
    function change_img_1(){
        var img = document.getElementById("detail_ticket");
    
        img.src = "../img/cinema1.png"
    }
    
    function change_img_2(){
        var img = document.getElementById("detail_ticket");
    
        img.src = "../img/cinema2.png"
    }
    
    function change_img_3(){
        var img = document.getElementById("detail_ticket");
    
        img.src = "../img/cinema3.png"
    }
    
    
    
    function changeprice(){
        var productamount = document.getElementById("product_amount");
        var procuctvalue = productamount.options[productamount.selectedIndex].value;
        var original_price = parseFloat(document.getElementById("price").innerHTML);
        var total_price = parseFloat(procuctvalue*original_price);
        console.log(total_price);
        var total_end = document.getElementById("total_products_price");
        total_end.innerHTML = total_price;
        if (procuctvalue == "more") {
            productamount.hidden = true;
            document.getElementById("more_amount").hidden = false;
            total_end.innerHTML = "---";
    
        }else{
            productamount.hidden = false;
            document.getElementById("more_amount").hidden = true;
        }
    }

