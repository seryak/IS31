// // объявление переменных
// var a = 12; // целые
// console.log(a+' это а');
// a = 'Строка'; // строки
// var b = true; // логический тип
// console.log(a+' это b');
// var c = -12.8; // Вещественные (float)
// console.log(a+' это c');
// var massiv = [1, 3, 5, 'ололо'];
// var summa = massiv[0] + massiv[1];
// summa = massiv[1] - massiv[2];
// summa = massiv[1] * massiv[2];
// summa = massiv[1] / massiv[2];
// summa = 'Привет' + ' Мир!';
// console.log(massiv[1] > massiv[0]);
// console.log(massiv[1] <= massiv[0]);
// console.log(massiv[1] != massiv[0]);
// console.log(massiv[1] == massiv[0]);
// console.log('Сравнение');
//
// // alert(summa); // всплывающее окно с текстом
// console.log(massiv); // Вывести переменную в консоль, аналог var_dump


//
// $( document ).ready(function() {
//
//     $('body .el').on('click', function () {
//         $(this).remove();
//     });
//
//
// });

$( document ).ready(function() {




    $('a.start').on('click', function () {
        $.ajax({
            url: "http://news.re19.ru/api/mobile/lastnews",
            success: function(news){
                news['data'].forEach(function (item,i,news) {
                    $('#spisok').append('<div class="el">'+ item['title'] +'</div>');
                });
            }
        });
    });

    $('a.more').on('click', function () {
        var pager = $('a.more').attr('data-pager');

        $.ajax({
            url: "http://news.re19.ru/api/mobile/lastnews?page="+pager,
            success: function(news){
                news['data'].forEach(function (item,i,news) {
                    $('#spisok').append('<div class="el">'+ item['title'] +'</div>');
                });
            }
        });

        $('a.more').attr('data-pager', pager+1);
    });


});


// var fruits=["Яблоко","Апельсин","Мандарин"];
// fruits.push("Банан");
// delete fruits[1];
// fruits.forEach(function (item,i,fruits) {
//     alert(fruits[i]);
//
// });


