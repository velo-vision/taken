var data = [
      { y: '2014', a: 1500},
      { y: '2015', a: 2500},
      { y: '2016', a: 1600},
      { y: '2017', a: 900},
      { y: '2019', a: 2300},
      { y: '2020', a: 1500},
      { y: '2021', a: 1400},
      { y: '2022', a: 4500}
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
      pointFillColors:['#2d9ad3'],
      pointStrokeColors: ['black'],
      lineColors:['#76b5e1','red']
  };
config.element = 'area-chart';
Morris.Area(config);
