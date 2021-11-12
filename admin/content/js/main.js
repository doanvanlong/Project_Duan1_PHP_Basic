$(document).ready(function() {
    //toglle class thanh nav
   $('.toggle').click(function() {
       $('.toggle').toggleClass('active');
       $('.navigation').toggleClass('active');
       $('.main').toggleClass('active');
   })
//thay đổi icon toggle 
  $('.toggle').click(function(){
     if($('.toggle').hasClass('active')){
         $('.toggle').html('<i class="fas fa-angle-double-right"></i>');
     }else{
        $('.toggle').html('<i class="fas fa-angle-double-left"></i>');
     }
  })
//   sub menu dropdown navigation
 $('.navigation__link').click(function(){
    $(this).next('.sub-menu').slideToggle();
  })

// //   class active thay đổi icon dropdown sub menu navigation
//   $('.navigation__link').click(function(){
//       $(this).toggleClass('active');
//   })
//   //thay đổi icon toggle sub menu navigation
//   $('.navigation__link').click(function(){
//       if($(this).hasClass('active')){
//           $('.box__icon-dropdown').html('<i class="fas fa-chevron-up"></i>');
//       }else{
//         $('.box__icon-dropdown').html('<i class="fas fa-angle-down"></i>');
//       }
//   })
// gg chart
google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawStuff);
// lấy ngày trong tháng
function daysInMonth(month,year) {
  monthNum =  new Date(Date.parse(month +" 1,"+year)).getMonth()+1
  return new Date(year, monthNum, 0).getDate();
}
var monthNow=new Date().getMonth()+1;
var yearNow=new Date().getFullYear();
var daysInMonth = daysInMonth(monthNow, yearNow);
function drawStuff() {
  var dataArray=[['Move','Triệu']];
  // dùng vòng j push j vào php
  var php=[3,5,16,7,23,14,13,6,7,9,14,23,18,14,23,11,22,13,5,16,22,17,23,21,21,24,12];
 
  for(var i=0;i< daysInMonth;i++){
    dataArray.push([`${i+1}`,php[i]]);
 }
    var data = new google.visualization.arrayToDataTable(dataArray);
  var width =1055;
  var options = {
    width: width,
    height:400,
    legend: { position: 'none' },
    chart: {
      title: 'Biểu đồ thống kê doanh thu  ',
      subtitle: `Tháng ${monthNow} Năm ${yearNow}` },
    axes: {
      x: {
        0: { side: 'top', label: 'Ngày'} // Top x-axis.
      }
    },
    bar: { groupWidth: "90%" }
  };

  var chart = new google.charts.Bar(document.getElementById('top_x_div'));
  // Convert the Classic options to Material options.
  chart.draw(data, google.charts.Bar.convertOptions(options));
};

})