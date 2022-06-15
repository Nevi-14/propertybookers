<script>
(function($){
"use strict";
var myChart = echarts.init(document.getElementById('graph06'), 'azul');

    // Get leads data from the laravel backend
    var leads_data = {!! $total_status_leads !!};
    var legend_array = [];
    var series_data = [];
    Object.keys(leads_data).forEach(function(key){
      legend_array.push(key);
      series_data.push({
        name: key,
        value: leads_data[key]
      })
    });

    var option = {
      tooltip: {
          trigger: 'item',
          formatter: '{a} <br/>{b}: {c} ({d}%)'
      },
      legend: {
          orient: 'vertical',
          left: 10,
          data: legend_array
      },
      series: [
          {
              name: "{{ucwords(__('lead stats'))}}",
              type: 'pie',
              radius: ['45%', '70%'],
              avoidLabelOverlap: false,
              label: {
                  show: false,
                  position: 'center'
              },
              emphasis: {
                  label: {
                      show: true,
                      fontSize: '20',
                      fontWeight: 'bold'
                  }
              },
              labelLine: {
                  show: true
              },
              data: series_data
          }
        ]
    };
// use configuration item and data specified to show chart
myChart.setOption(option);
})(jQuery);  
</script>