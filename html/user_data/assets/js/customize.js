/* カスタマイズ用Javascript */
// TODO: カート展開時のアイコン変更処理
$('.ec-headerRole__cart').on('click', '.ec-cartNavi', function() {
    $('.ec-cartNaviWrap').toggleClass('is-active');
    $('.ec-headerNaviRole .ec-headerNaviRole__search .ec-headerSearch').toggleClass('is-active');
});

$('.ec-headerRole__cart').on('click', '.ec-cartNavi--cancel', function() {
    $('.ec-cartNaviWrap').toggleClass('is-active');
    $('.ec-cartNavi').toggleClass('is-active');
    $('.ec-headerNaviRole .ec-headerNaviRole__search .ec-headerSearch').toggleClass('is-active');
});
    
function fnOrderPlusMinus(id,is_plus){
  let ids = id;
  const num = document.getElementById(`quantity${ids}`);
  
  if(is_plus){
     num.value++;
  } 
  else{
     num.value--;
     if(num.value < 0) num.value = 0;  
  }
}