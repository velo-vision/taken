var data = [
      { y: '2014', a: 3000},
      { y: '2015', a: 3300},
      { y: '2016', a: 3000},
      { y: '2017', a: 3300},
      { y: '2018', a: 3000},
      { y: '2019', a: 3350},
      { y: '2020', a: 3000},
      { y: '2021', a: 3300}
    ],
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a'],
      labels: ['Total Income', 'Total Outcome'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#36c5d5'],
      pointStrokeColors: ['black'],
      lineColors:['#5bd1db','red']
  };
config.element = 'area2-chart';
Morris.Area(config);
