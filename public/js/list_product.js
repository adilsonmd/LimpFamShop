$(document).ready(function(){

    var container = $('.product-container');
    var product = $('.product-card');

    // $.ajax({
    //     url: "api/products",
    //     datatype: "json",
    //     success: function(data){
    //         data.forEach(element => {
    //             var p = product;
    //             p.find('.product-name')[0].innerText = element.name;
    //             p.find('.product-price')[0].innerText = element.value;
    //             p.find('.product-unit')[0].innerText = element.unit;
                 
    //             container.add(p);
    //         });
    //         console.log(data);
            
    //     }
    // });
});