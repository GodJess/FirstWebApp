//Анимация сердечек
let count = document.getElementById('test');
console.log(count.value)

const addCount = () => {
    if (count.value < 100) 
    {
        count.value = parseInt(count.value) + 1;
    } else {
        count.value = 100;
    }
}

const minusCount = () => {
    if (count.value >  1)
    {
        count.value = parseInt(count.value) - 1;
    } else {
        count.value = 0;
    }
}

let count1 = document.getElementById('priceord');
console.log(count1.value1)

const fffCount = () => {
    count1.value1 = parseInt(count1.value1) * value;
}

/*$('.like-btn').on('click', function() {
    $(this).toggleClass('is-active');
 });

 $('.minus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (count >  1)
    {
        count = count - 1;
    } else {
        count = 0;
    }
 
  $input.val(value);
 
});
 
$('.plus-btn').on('click', function(e) {
    console.log("23")
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (count < 100) 
    {
        count = count + 1;
    } else {
        count = 100;
    }
 
    $input.val(value);
});*/
