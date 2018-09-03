// $(document).ready(function() {
//   function randomColor() {
//     return '#' + Math.random().toString(16).slice(2, 8);
//   };
//
//   $("#button").on("click", function() {
//     alert("hi");
//     // $('body').css('background', randomColor());
//   })
// })
//
// window.onload = function(){
//     var hw = document.getElementById('button');
//     hw.addEventListener('click', function(){
//         alert('Hello world');
//     })
// }

$(document).ready(function() {

  function hello() {
    alert('hi');
}
$('#button').click(function() {
        hello();
    });

});
