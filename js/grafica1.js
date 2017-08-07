$(function() {
  $("#container").highcharts({
    chart: {
      zoomType: 'xy'
    },
    title: {
      text: ""
    },
    subtitle: {
      text: ""
    },
    xAxis: [{
      categories: ['20/09/2012', '21/09/2013', '22/09/2012', '23/09/2012', '24/09/2012', '25/09/2012']
    }],
    yAxis: [{ //Primary yAxis
      labels: {
        format: '$ {value}',
        style: {
          color: '#89A54E'
        }
      },
      title: {
        text: '',
        style: {
          color: '#89A54E'
        }
      }
    }, {//Secondary yAxis
      title: {
        text: '',
        style: {
          color: '#4572A7'
        }
      },
      labels: {
        format: '$ {value}',
        style: {
          color: '#4572A7'
        }
      },
      opposite: true
    }],
    tooltip: {
      shared: true
    },
    legend: {
      layout: 'vertical',
      align: 'left',
      x: 0,
      verticalAlign: 'top',
      y: 0,
      floating: true,
      backgroundColor: '#FFFFFF'
    },
    series: [{
      name: 'serie 1',
      color: '#76bddf',
      type: 'column',
      yAxis: 1,
      data: [80000, 80000, 80000, 80000, 80000, 90000],
      tooltip: {
        valueSuffix: ''
      }
    }, {
      name: 'serie 2',
      color: '#f36a5a',
      type: 'spline',
      yAxis: 0,
      data: [51000, 70000, 78000, 69000, 70000, 90000],
      tooltip: {
        valueSuffix: ''
      }
   }]
  });
});