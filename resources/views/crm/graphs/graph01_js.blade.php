<script>
  (function($){
  "use strict";
    // based on prepared DOM, initialize echarts instance
    var myChart = echarts.init(document.getElementById('graph01'), 'westeros');

    // Get leads data from the laravel backend
    var leads_data = {!! $monthly_leads_recap !!};
    
    var legend_array = [];
    var series_data = [];
    Object.keys(leads_data).forEach(function(key){
      legend_array.push(key);
      series_data.push({
        name: key,
        type: 'line',
        stack: 'total',
        data: leads_data[key]
      })
    });

    var chart_type = 'line';
    var  option = {
      tooltip: {
          trigger: 'axis'
      },
      legend: {
          data: legend_array
      },
      grid: {
          left: '3%',
          right: '4%',
          bottom: '3%',
          containLabel: true
      },
      toolbox: {
          feature: {
              saveAsImage: {}
          }
      },
      xAxis: {
          type: 'category',
          boundaryGap: false,
          data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
      },
      yAxis: {
          type: 'value'
      },
      series: series_data
    };

    myChart.setOption(option);
})(jQuery);
</script>