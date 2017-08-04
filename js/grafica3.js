 jQuery(document).ready(function($) {
   var rotulosYAxis = {
     8: 'Estructuración',
     11: 'Comité',
     18: 'Convocatoria',
     20: 'Adjudicación',
     25: 'Legalización'
   };
   $('#graficaPAA211').highcharts({
     chart: {
       type: 'column',
       zoomType: 'x',
       backgroundColor: 'transparent' || 'white',
       height: 400
     },
     legend: {
       enabled: false,
       align: 'right',
       verticalAlign: 'bottom',
       layout: 'vertical',
       y: -50
     },
     title: {
       text: 'D1-O2-4000-E / TIC y discapacidad',
       useHTML: true,
       style: {
         fontWeight: 'bold'
       }
     },
     xAxis: {
       categories: ['Aunar esfuerzos administrativos, financieros, humanos y técnicos con el Instituto Nacional para Cieg...', ' Aunar esfuerzos administrativos, financieros, humanos y técnicos para continuar desarrollando activ...', 'Aunar esfuerzos administrativos, financieros, humanos y técnicos con la Federación Nacional de Sordo...'],
       title: {
         text: 'Contratos'
       }
     },
     yAxis: {
       categories: ['', '', '', '', '', '', '', '', 'Estructuración', '', '', 'Comité', '', '', '', '', '', '', 'Convocatoria', '', 'Adjudicación', '', '', '', 'Legalización'],
       plotLines: [{
         color: '#3E5FA2',
         width: 2,
         value: 8,
         label: {
           text: 'Estructuración',
           align: 'left',
           x: -90,
           y: 4
         }
       }, {
         color: '#E4702D',
         width: 2,
         value: 11,
         label: {
           text: 'Comité',
           align: 'left',
           x: -90,
           y: 4
         }
       }, {
         color: '#939393',
         width: 2,
         value: 18,
         label: {
           text: 'Convocatoria',
           align: 'left',
           x: -90,
           y: 4
         }
       }, {
         color: '#FFE507',
         width: 2,
         value: 20,
         label: {
           text: 'Adjudicación',
           align: 'left',
           x: -90,
           y: 4
         }
       }, {
         color: '#58852A',
         width: 2,
         value: 25,
         label: {
           text: 'Legalización',
           align: 'left',
           x: -90,
           y: 4
         }
       }],
       plotBands: [{
         color: '#CBE5FC',
         from: 0,
         to: 8
       }, {
         color: '#FCE0CB',
         from: 8,
         to: 11
       }, {
         color: '#DDDDDD',
         from: 11,
         to: 18
       }, {
         color: '#FCF5CB',
         from: 18,
         to: 20
       }, {
         color: '#DBFCCB',
         from: 20,
         to: 25
       }],
       floor: 0,
       min: 0,
       max: 30,
       showLastLabel: true,
       gridLineColor: 'transparent',
       labels: {
         style: {
           "color": "transparent"
         }
       },
       title: {
         text: 'Estado Contratación'
       }
     },
     plotOptions: {
       column: {
         dataLabels: {
           enabled: false,
           format: ' {point.y:.0f}%',
           style: {
             fontSize: '12px',
             color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
           },
           connectorColor: 'black'
         }
       }
     },
     tooltip: {
       shared: true,
       useHTML: true,
       headerFormat: 'Contrato: <b>{point.key}</b><table>',
       pointFormat: '<tr><td style="color: {point.color}">{series.name}: </td>' + '<td style="text-align: right"><b>{point.estado}</b></td></tr>',
       footerFormat: '</table>',
       valueDecimals: 0
     },
     series: [{
       name: 'Programado',
       data: [{
         y: 0,
         fecha: '01/02/2015',
         estado: 'N/A - ',
         color: '#0059b3'
       }, {
         y: 25,
         fecha: '12/02/2015',
         estado: 'Legalización - Registro Presupuestal',
         color: '#0059b3'
       }, {
         y: 0,
         fecha: '01/02/2015',
         estado: 'N/A - ',
         color: '#0059b3'
       }]
     }, {
       name: 'Ejecutado',
       data: [{
         y: 25,
         fecha: '28/02/2015',
         estado: 'Legalización - Registro Presupuestal',
         color: '#007fff'
       }, {
         y: 25,
         fecha: '20/02/2015',
         estado: 'Legalización - Registro Presupuestal',
         color: '#007fff'
       }, {
         y: 15,
         fecha: '10/02/2015',
         estado: 'Convocatoria - Pliegos Definitivos',
         color: '#007fff'
       }]
     }]
   });
 });