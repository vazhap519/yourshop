
var fullsite=document.querySelector("#wrapper");
var topCarousellLeftBtn=document.querySelector('.carousell_area_arrows_left');
var topCarousellRighttn=document.querySelector('.carousell_area_arrows_right');
var TopCarousellContent=document.querySelectorAll('.carousell_area_box ')
var TopCarousellCounter=0;
if(TopCarousellContent && topCarousellLeftBtn && topCarousellRighttn && TopCarousellContent){
    function TopCarousellContentItems(){
        for(var i=0;i<TopCarousellContent.length;i++){
            TopCarousellContent[i].classList.remove('carousell_area_box_active')
             newColor=TopCarousellContent[TopCarousellCounter].getAttribute('data-bgColor');
        }

    }
    function topCarousellRighttn_f(){
        TopCarousellContentItems()
        TopCarousellCounter++
        if(TopCarousellCounter>TopCarousellContent.length-1){
            TopCarousellCounter=0

        }
        var newColor=TopCarousellContent[TopCarousellCounter].getAttribute('data-bgColor');
        fullsite.style.background=newColor;
        TopCarousellContent[TopCarousellCounter].classList.add('carousell_area_box_active')
    }

    function topCarousellLeftBtn_f(){
        TopCarousellContentItems()
        TopCarousellCounter--
        if(TopCarousellCounter<=TopCarousellContent.length-1){
            TopCarousellCounter=0
        }

        var newColor=TopCarousellContent[TopCarousellCounter].getAttribute('data-bgColor');
        fullsite.style.background=newColor;
        TopCarousellContent[TopCarousellCounter].classList.add('carousell_area_box_active')
    }

    function TopCarousellAutoplay(){
        topCarousellRighttn_f()
    }

    var TopAuto=setInterval(TopCarousellAutoplay,1000)

}

/*
=============================================================================================
                        End TopContent Carousel
=============================================================================================
*/

let LoginForm=document.querySelector(".LoginAreaUl_Content_Form")
let RegIco=document.querySelector('.LoginAreaUl_ico');
let USerContent=document.querySelector('.LoginAreaUl_Content');
function ShowHideUser(){
    if(RegIco.classList.contains('LoginAreaUl_ico_Active')){
        RegIco.classList.remove('LoginAreaUl_ico_Active')
    }else{
        RegIco.classList.add('LoginAreaUl_ico_Active')
    }
if(USerContent.classList.contains('LoginAreaUl_Content_Active')){
    USerContent.classList.remove('LoginAreaUl_Content_Active')
}else{
    USerContent.classList.add('LoginAreaUl_Content_Active')
}
}
RegIco.addEventListener('click',ShowHideUser)
let filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
let E_mail=document.querySelector('#email');
let PassWordCheck=document.querySelector('#password')
let Sign_in=document.querySelector('#SignIn');
Sign_in.addEventListener('click',function(){
 if(E_mail.value<=10){
     alert('შეამოწმე სიმბოლოების რაოდენობა ან ძაღლუკა ')
     filter.test(E_mail.value)
     E_mail.style.border="3px solid red"

 }else{

     E_mail.style.border="3px solid #A889F2"
 }

 if(PassWordCheck.value<=10){
    alert('შეამოწმე პაროლის სიგრძე და სისწორე ')
    PassWordCheck.style.border="3px solid red"
 }else{

    PassWordCheck.style.border="3px solid #A889F2"
 }
})
/*
=============================================================================================
                        End Login Validation
=============================================================================================
*/
let ShopIco=document.querySelector('.shopingCart_Ul_Ico')
let ShopContent=document.querySelector('.shopingCart_Ul_Content');
// let shopItems=document.querySelectorAll('.product_boxes_area_Right_Content li')

ShopIco.addEventListener('click',(e)=>{
    e.preventDefault();
if(ShopIco.classList.contains('shopingCart_Ul_Ico_active')){
    ShopIco.classList.remove('shopingCart_Ul_Ico_active')
}else{
    ShopIco.classList.add('shopingCart_Ul_Ico_active')
}
if(ShopContent.classList.contains('shopingCart_Ul_Content_Active')){
    ShopContent.classList.remove('shopingCart_Ul_Content_Active')
}else{
    ShopContent.classList.add('shopingCart_Ul_Content_Active')
}
})

let shopingCartItemRemove=document.getElementsByClassName('shopingCart_Ul_Content_items_item_Remove');


for(var i=0;i<shopingCartItemRemove.length;i++){
console.log(shopingCartItemRemove[i].addEventListener('click',Remove))
}

function Remove  (params) {
let targetRemove=params.target;
let RemoveBtn=targetRemove.parentElement.remove();

}
function updateCartTotal(){
    let shopingCartContainer=document.getElementsByClassName('shopingCart_Ul_Content_items')[0]
    let shopingCartContainerItems=document.getElementsByClassName('shopingCart_Ul_Content_items_item')
    for(var i=0;i<shopingCartContainerItems.length;i++){
        let items=shopingCartContainerItems[i];
       let priceVal=items.getElementsByClassName('shopingCart_Ul_Content_items_price')[0];
         let parsinPriceVal=parseFloat(priceVal.textContent.replace(' ₾', ' '))
        let QtyVal=items.getElementsByClassName('shopingCart_Ul_Content_items_Counter_count')[0];
        let QtyValParse=parseInt(QtyVal.textContent)

        let QtyValMin=items.getElementsByClassName('shopingCart_Ul_Content_items_Counter_minus')[0];
        console.log(QtyValMin.addEventListener('click',function(){
            console.log('test')
        }))
        let QtyValPlus=items.getElementsByClassName('shopingCart_Ul_Content_items_Counter_Plus')[0];
    }
}
updateCartTotal()


/*
=============================================================================================
                        End Shoping Cart Area
=============================================================================================
*/
let Wish_ico=document.querySelector('.Favorites_Ul_Ico');
let Wish_Content=document.querySelector(".Favorites_Ul_Content");
Wish_ico.addEventListener('click', (e)=>{
    e.preventDefault();
    if (Wish_Content.classList.contains("Favorites_Ul_Content_active")){
        Wish_Content.classList.remove("Favorites_Ul_Content_active");

    }else{
        Wish_Content.classList.add("Favorites_Ul_Content_active");
    }
})
/*
=============================================================================================
                        End Wishlist Area
=============================================================================================
*/
let seaarchArea=document.querySelector('.Search_area');
let searchBtn=document.querySelector('.search_input_btn');
let searchInp=document.querySelector(".search_input");
searchBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    if (searchInp.classList.contains('search_input_active')){
        searchInp.classList.remove("search_input_active");
        seaarchArea.style.flexDirection="row-reverse";
    }else{
        searchInp.classList.add("search_input_active");
        seaarchArea.style.flexDirection="row";
    }

})

/*
=============================================================================================
                       END SEARCH AREA
=============================================================================================
*/


let Products_box=document.querySelector(".product_boxes_area");
let price_filter=document.querySelector('.price_filter');
let brandsFilter=document.querySelector('.brands_filter');
let modelsFilter=document.querySelector('.Models_filter');
let PriceRangeMin=document.querySelector('.price_filter_box_prices_min');
let PriceRangeMax=document.querySelector('.price_filter_box_prices_max');
PriceRange=document.querySelector('.price_range');

// PriceRange.addEventListener('change',(e)=>{
//     console.log(e.target);
//     console.log(PriceRangeMin.value,PriceRangeMax.value)
// })

if(Products_box && brandsFilter && price_filter &&  modelsFilter){
    let price_filter_header=price_filter.querySelector('.price_filter_headder');
    let Price_filter_prices_value=price_filter.querySelector('.price_filter_box');


    let brandsFilterHeader=brandsFilter.querySelector('.brands_filter_header');
    let brandsFilterList=brandsFilter.querySelector('.band_list');

    let modelsFilterHeader=modelsFilter.querySelector('.Models_filter_header');
    let modelsFilterContent=modelsFilter.querySelector('.Models_filter_sub');







    if(Products_box){
        price_filter_header.addEventListener('click',(e)=>{
            e.preventDefault;
            if(Price_filter_prices_value.classList.contains('price_filter_box_active')){
                Price_filter_prices_value.classList.remove('price_filter_box_active');
            }else{
                Price_filter_prices_value.classList.add('price_filter_box_active');
            }
            })
    }
    /*
    ========================================================================================================================================================
                                            PRODUCT PRICE FILTER END
    ========================================================================================================================================================
    */

    brandsFilterHeader.addEventListener('click',(e)=>{
        e.preventDefault;
        if(brandsFilterList.classList.contains("band_list_active")){
            brandsFilterList.classList.remove("band_list_active");
        }else{
            brandsFilterList.classList.add("band_list_active");
        }
    })

    /*
    ========================================================================================================================================================
                                            BRANDS  FILTER END
    ========================================================================================================================================================
    */

    modelsFilterHeader.addEventListener('click',(e)=>{
        e.preventDefault();
        if(modelsFilterContent.classList.contains('Models_filter_sub_active')){
            modelsFilterContent.classList.remove('Models_filter_sub_active')
        }else{
            modelsFilterContent.classList.add('Models_filter_sub_active')
        }
    })



    /*
    ========================================================================================================================================================
                                            MODELS  FILTER END
    ========================================================================================================================================================
    */


}




// function burgerMenu(){
//     let BurgerIco=document.querySelector('.burger_menu_icon');
//     let BurgerMenu_Cont=document.querySelector('.burger_menu');
//     BurgerIco.addEventListener('click',(e)=>{
//         e.preventDefault();
//         if(BurgerMenu_Cont.classList.contains('burger_menu_active')){
//             BurgerMenu_Cont.classList.remove('burger_menu_active');
//
//         }else{
//             BurgerMenu_Cont.classList.add('burger_menu_active');
//         }
//         console.log(e)
//     })
// }
// burgerMenu()

